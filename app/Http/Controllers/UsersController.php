<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    public function index()
    {
         $users = User::paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
        
        
        $users = User::all();

        return view('tasklists.index', [
            'tasklists' => $tasklists,
        ]);
    }
    
     public function show($id)
    {
        $user = User::find($id);

        return view('tasklists.show', [
                    'tasklist' => $tasklist,
                ]);
            }
            
        }