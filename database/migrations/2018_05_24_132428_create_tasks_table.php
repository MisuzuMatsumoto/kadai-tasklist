<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasklists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('content'); 
            $table->string('status' , 10);
            $table->timestamps(); 
             //外部キーを追加
            $table->foreign('user_id')->references('id')->on('users'); 
            // ($table->foreign(外部キーを設定するカラム名)->references(制約先のID名)->on(外部キー制約先のテーブル名);)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasklists');
        Schema::table('tasklists', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
