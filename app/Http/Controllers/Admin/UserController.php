<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;


class UserController extends BaseController
{
    use ValidatesRequests;

    public function index ()
    {
        $users = User::all();
        return view('admin.user.user', ['users' => $users]);
    }

    public function create (Request $request, User $user)
    {
        $user = new User ();
        if($request->isMethod('post')) {
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $password = $request->post('password');
        if(!empty($password)) {
            $user->password = Hash::make($password);
        }
        $user->save();
        return redirect()->route('admin::user');
        }

        return view('admin.user.createUser', [
            'user' => $user,
            'route' => 'admin::user::create',
            'title' => 'Создать юзера',
        ]);
    }

    public function update (Request $request, User $user)
    {
        if( $request->isMethod('post'))
        {
            $user->update($request->only(['name', 'email']));
            return redirect()->route('admin::user');
        }
       
        return view('admin.user.createUser', [
                     'user' => $user,
                     'route' => 'admin::user::update',
                     'title' => 'Изменить юзера',
                 ]);
    }

}