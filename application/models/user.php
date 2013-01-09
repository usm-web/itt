<?php
/**
 * User: A. Skomorkhov
 * Date: 22.11.12
 * Time: 16:41
 */

class User extends Eloquent {
    public static $table = 'users';
    public static $rules = array(
        'pass' => 'same:pass_repeat',
        'name' => 'required',
        'login' => 'required'
    );
    public static function validate($data){
        return Validator::make($data, static::$rules);
    }
    public static function login($credentials){
        return Auth::attempt($credentials);
    }
    public static function logout(){
        Auth::logout();
    }
    public function roles()
    {
        return $this->has_many_and_belongs_to('acl', 'cross_users_acls');
    }
}