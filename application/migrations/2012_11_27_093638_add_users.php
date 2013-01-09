<?php

class Add_Users {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(array(
            'name'=>'Скоморохов Андрей',
            'username'=>'admin',
            'password'=>Hash::make('123'),
            'note'=>'Начальник отдела ИТ, полные административные права',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Рудковский Семён',
            'username'=>'rsb',
            'password'=>Hash::make('1234'),
            'note'=>'Системный администратор, ограниченные административные права',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Саларев Сергей',
            'username'=>'ssa',
            'password'=>Hash::make('12345'),
            'note'=>'Аникейщик, минимальные на просмотр',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Лёвин Сергей Александрович',
            'username'=>'lsa',
            'password'=>Hash::make('123'),
            'note'=>'',
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
        DB::table('users')->where('username','=','admin')->delete();
        DB::table('users')->where('username','=','rsb')->delete();
        DB::table('users')->where('username','=','saa')->delete();
        DB::table('users')->where('username','=','lsa')->delete();
    }

}