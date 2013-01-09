<?php

class Create_Acls_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('acls', function($table){
            $table->increments('id');
            $table->string('name_objects');
            $table->text('note');
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
        Schema::drop('acls');
	}

}