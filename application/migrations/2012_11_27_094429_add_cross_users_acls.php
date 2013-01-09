<?php

class Add_Cross_Users_Acls {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        DB::table('cross_users_acls')->insert(array(
            'user_id'=>'1',
            'acl_id'=>'5',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('cross_users_acls')->insert(array(
            'user_id'=>'2',
            'acl_id'=>'3',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('cross_users_acls')->insert(array(
            'user_id'=>'3',
            'acl_id'=>'2',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('cross_users_acls')->insert(array(
            'user_id'=>'4',
            'acl_id'=>'2',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));


	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        DB::table('cross_users_acls')->where('user_id','=','1')->delete();
        DB::table('cross_users_acls')->where('user_id','=','2')->delete();
        DB::table('cross_users_acls')->where('user_id','=','3')->delete();
	}

}