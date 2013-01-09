<?php
/**
 * User: A. Skomorkhov
 * Date: 11.12.12
 * Time: 11:08
 */
class ItTask extends Eloquent {
    public static $table = 'ittasks';
    public static $rules = array(
        'name' => 'required'
    );
    public static function validate($data){
        return Validator::make($data, static::$rules);
    }
    public function user()
    {
        return $this->belongs_to('User');
    }
    public function user_work()
    {
        return $this->belongs_to('User', 'user_work');
    }
}