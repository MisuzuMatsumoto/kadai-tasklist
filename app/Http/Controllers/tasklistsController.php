<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;  // 追加

use App\Tasklist;    // 追加

class TasklistsController extends Controller

{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasklists = $user->tasklists()->orderBy('created_at')->paginate(100);

            $data = [
                'user' => $user,
                'tasklists' => $tasklists,
            ];
            return view('tasklists.index', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function create()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
        $tasklist = new Tasklist;
        return view('tasklists.create', [
            'tasklist' => $tasklist,
            ]);
            
        }else {
            return view('welcome');
        }
    }

    public function store(Request $request)
    {
        //検証・制限
        $this->validate($request,[
            'status'=>'required|max:10',
            'content'=>'required|max:191',
            ]);
        
        $request->user()->tasklists()->create([
            'content' => $request->content,
            'status' => $request->status,
        ]);
            return redirect('/');
    }
    
    
    public function show($id)
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            
        $tasklist = Tasklist::find($id);
        
        return view('tasklists.show', [
            'tasklist' => $tasklist,
        ]);
            
        }else {
            return view('welcome');
        }
       
    }
    
    public function edit($id)
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasklist = Tasklist::find($id);
        
        return view('tasklists.edit',[
            'tasklist' => $tasklist,
            ]);
        }else {
            return view('welcome');
        }   
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'status'=>'required|max:10',
            'content'=>'required|max:191',
            ]);
        $tasklist = Tasklist::find($id);
        $tasklist->status = $request->status;
        $tasklist ->content = $request->content;
        $tasklist -> save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $tasklist = Tasklist::find($id);
        $tasklist->delete();
        
        return redirect('/');
    }
}
