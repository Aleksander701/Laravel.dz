<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function update(Request $request, User $user)
    {
        $user = Auth::user();

        $errors = [];

        if($request->isMethod('post')) {
            $password = $request->post('password');

            if(Hash::check($request->post('current_password'), $user->password)){
                if($this->validate($request, $this->validateRules())){
                    $user->name = $request->post('name');
                    $user->email = $request->post('email');
                    if(!empty($password)) {
                        $user->password = Hash::make($password);
                    }
                    $user->save();
                }
           } else {
                $errors['current_password'][] = 'Пароль указан неверно';
            }

            return redirect()->back()
                ->withErrors($errors);
        }
        return view('admin.updateProfile', ['user' => $user]);
    }


    public function validateRules()
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'current_password' => 'required'
        ];
    }
}