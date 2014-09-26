<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 26-09-2014
 * Time: 09:30
 */

class UserRepository implements UserRepositoryInterface {

    public function createUser()
    {
//        $input = Input::all();

        $user = new User();
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
    }
} 