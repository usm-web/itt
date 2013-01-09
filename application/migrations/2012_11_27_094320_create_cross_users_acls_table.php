<?php

class Create_Cross_Users_Acls_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('cross_users_acls', function($table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('acl_id');
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
        Schema::drop('cross_users_acls');
	}

}