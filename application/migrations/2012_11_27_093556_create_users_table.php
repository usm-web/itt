<?php

class Create_Users_Table {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->text('note');
            $table->string('phone');
            $table->string('mobile_phone');
            $table->string('room');
            $table->string('position');
            $table->boolean('is_admin');
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
        Schema::drop('users');
    }

}