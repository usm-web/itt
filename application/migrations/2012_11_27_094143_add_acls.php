<?php

class Add_Acls {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
    public function up()
    {
        //
        DB::table('acls')->insert(array(
            'name_objects'=>'Users',
            'note'=>'----'
        ));
        DB::table('acls')->insert(array(
            'name_objects'=>'Users',
            'note'=>'R---'
        ));
        DB::table('acls')->insert(array(
            'name_objects'=>'Users',
            'note'=>'RC--'
        ));
        DB::table('acls')->insert(array(
            'name_objects'=>'Users',
            'note'=>'RCE-'
        ));
        DB::table('acls')->insert(array(
            'name_objects'=>'Users',
            'note'=>'RCED'
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
        DB::table('acls')->where('name_objects','=','Users')->delete();
	}

}