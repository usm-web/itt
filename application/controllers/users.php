<?php
/**
 * User: A. Skomorkhov
 * Date: 22.11.12
 * Time: 14:27
 */
class Users_Controller extends Base_Controller{
    public $restful = true;
    public function get_index(){
        if(Auth::check()&&Auth::user()->roles()->first()->id){
            return View::make('users.index')
                ->with('title', 'Пользователи системы')
                ->with('users', User::all());
        }else{
            return Redirect::to('norights');
        }
    }
    public function get_view($id){
        if(Auth::check()&&Auth::user()->roles()->first()->id){
            return View::make('users.view')
                ->with('title', 'Информация о пользователе')
                ->with('user', User::find($id));
        }else{
            return Redirect::to('norights');
        }
    }
    public function get_new(){
        if(Auth::check()&&Auth::user()->roles()->first()->id>=3){
            return View::make('users.new')
                ->with('title', 'Добавление нового пользователя')
                ->with('acls', Acl::all());
        }else{
            return Redirect::to('norights');
        }
    }
    public function post_create(){
        if(Auth::check()&&Auth::user()->roles()->first()->id>=3){
            $validation = User::validate(Input::all());

            if($validation->fails()){
                return Redirect::to_route('new_user')
                    ->with_errors($validation)
                    ->with_input();
            }else{
                $user = User::create(array(
                    'name'=>Input::get('name'),
                    'username'=>Input::get('login'),
                    'password'=>Hash::make(Input::get('pass')),
                    'note'=>Input::get('note'),
                    'phone'=>Input::get('phone'),
                    'mobile_phone'=>Input::get('mobile_phone'),
                    'room'=>Input::get('room'),
                    'position'=>Input::get('position')
                ));
                $user->roles()->attach(Input::get('user'));
                return Redirect::to_route('users')
                    ->with('message_sys', 'Пользователь создан успешно!');
            }
        }else{
            return Redirect::to('norights');
        }

    }
    public function get_edit($id){
        if(Auth::check()&&Auth::user()->roles()->first()->id>=4){
            return View::make('users.edit')
                ->with('title', 'Редактирование пользователя')
                ->with('user', User::find($id))
                ->with('acls', Acl::all());
        }else{
            return Redirect::to('norights');
        }
    }
    public function put_update(){
        if(Auth::check()&&Auth::user()->roles()->first()->id>=4){
            $id = Input::get('id');
            $validation = User::validate(Input::all());

            if($validation->fails()){
                return Redirect::to_route('edit_user', $id)
                    ->with_errors($validation);
            }else{
                if(Input::get('pass')){
                    User::update($id, array(
                        'name'=>Input::get('name'),
                        'username'=>Input::get('login'),
                        'password'=>Hash::make(Input::get('pass')),
                        'note'=>Input::get('note'),
                        'phone'=>Input::get('phone'),
                        'mobile_phone'=>Input::get('mobile_phone'),
                        'room'=>Input::get('room'),
                        'position'=>Input::get('position')
                    ));
                }else{
                    User::update($id, array(
                        'name'=>Input::get('name'),
                        'username'=>Input::get('login'),
                        'note'=>Input::get('note'),
                        'phone'=>Input::get('phone'),
                        'mobile_phone'=>Input::get('mobile_phone'),
                        'room'=>Input::get('room'),
                        'position'=>Input::get('position')
                    ));
                }
                $user = User::find($id);
                foreach ($user->roles as $role)
                {
                    $role->pivot->acl_id = Input::get('user');
                    $role->pivot->save();
                }
                return Redirect::to_route('users')
                    ->with('message_sys', 'Пользователь изменён успешно!');
            }
        }else{
            return Redirect::to('norights');
        }
    }
    public function delete_destroy(){
        if(Auth::check()&&Auth::user()->roles()->first()->id>=5){
            User::find(Input::get('id'))->delete();
            return Redirect::to_route('users')
                ->with('message_sys', 'Удаление прошло успешно, Пользователя больше нет, его нет...Боже за чтоооо?');
        }else{
            return Redirect::to('norights');
        }
    }
    public function post_authorization(){
        if(User::login(array('username'=>Input::get('login'), 'password'=>Input::get('pass')))){
            return Redirect::to_route('main');
        }else{
            return Redirect::to_route('/');
        }
    }
    public function get_logout(){
        User::logout();
        return Redirect::to_route('/');
    }

}