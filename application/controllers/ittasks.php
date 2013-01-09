<?php
/**
 * User: A. Skomorkhov
 * Date: 11.12.12
 * Time: 10:26
 */
class ItTasks_Controller extends Base_Controller{
    public $restful = true;
    /*return list of task*/
    public function get_list(){
        if(Auth::check()){
            return View::make('ittasks.list')
                ->with('title', 'Список всех задач')
                ->with('all_ittasks', ItTask::where('status', '=', 0)->get());
        }else{
            return Redirect::to('norights');
        }
        //User::where('id', '=', $one_ittask->user_id)->first()->name;
    }
    /*change status and user_work*/
    public function post_ch(){
        if(Auth::check()){
            if(Input::get('my')){
                $result = Redirect::to_route('my_ittask');
            }else{
                $result = Redirect::to_route('list_ittask');
            }

            if(Input::get('i_will_do')){
                ItTask::where('id', '=', Input::get('i_will_do'))
                    ->update(array('user_work'=>Auth::user()->id
                ));
                $result = $result->with('message_sys', 'Вы взяли задание!');
            }
            if(Input::get('i_done')){
                ItTask::where('id', '=', Input::get('i_done'))
                    ->update(array(
                        'status'=>'1',
                        'user_work'=>Auth::user()->id,
                        'way_realization'=>Input::get('realization_way')
                ));
                $result = $result->with('message_sys', 'МАЛАДЕЦ!');
            }
            return $result;

        }else{
            return Redirect::to('norights');
        }
    }
    /*view one task*/
    public function  get_view($id){
        if(Auth::check()){
            return View::make('ittasks.view')
                ->with('title', 'Информация о задаче')
                ->with('ittask', ItTask::find($id));
        }else{
            return Redirect::to('norights');
        }
    }
    /*view form for create task*/
    public function get_new(){
        if(Auth::check()){
            return View::make('ittasks.new')
                ->with('title', 'Создание задачи');
        }else{
            return Redirect::to('norights');
        }
    }
    /*create task*/
    public function post_create(){
        if(Auth::check()){
            $validation = ItTask::validate(Input::all());

            if($validation->fails()){
                return Redirect::to_route('new_ittask')
                    ->with_errors($validation)
                    ->with_input();
            }else{
                ItTask::create(array(
                    'name'=>Input::get('name'),
                    'descriptions'=>Input::get('descriptions'),
                    'user_id'=>Auth::user()->id
                ));
                return Redirect::to_route('main')
                    ->with('message_sys', 'Задача создана!');
            }
        }else{
            return Redirect::to('norights');
        }

    }
    /*View your tasks*/
    public function get_my(){
        if(Auth::check()){
            return View::make('ittasks.my')
                ->with('title', 'Список моих задач')
                ->with('my_ittasks', ItTask::where('status', '=', 0)->where('user_work', '=', Auth::user()->id)->get());
        }else{
            return Redirect::to('norights');
        }
    }
}