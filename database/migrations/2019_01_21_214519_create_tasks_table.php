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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id');
            // $table->integer('goal_id'); //can be null if not associated with a goal
            $table->string('taskName');
            // $table->boolean('isComplete')->default(false);
            // $table->integer('taskOrder'); //Where the task shows up in the list (is it the first item, the third item in the list? user can reorder)
            // $table->text('taskDesc');
            // $table->integer('taskPriority'); //Different priority levels for tasks. 1 could be top priority, 3 lowest priority. NOT the same as task order. Multiple items can be priority 1.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
