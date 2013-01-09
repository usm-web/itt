<?php

class Create_List_Of_Task_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('ittasks', function($table){
            $table->increments('id');
            $table->string('name');
            $table->text('descriptions');
            $table->integer('user_id');
            $table->integer('user_work');
            $table->date('dead_line');
            $table->date('date_realization');
            $table->text('way_realization');
            $table->boolean('status');
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('ittasks');
	}

}