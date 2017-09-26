<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function someMethod($id)
    {
        // $user = new User();
        $user = User::find($id);
        return $user->posts()->get();
    }
    public function usersPosts()
    {
        $user = User::with('Posts')->get();
        return $user;
    }

    public function getUsersPosts($id)
    {
        $user = User::find($id)->posts()->get();
        return $user;
    }

    public function createNewUser(Request $request)
    {
        $response = 
        $this->validate(
            $request, [
                'name' => 'required',
                'email' => 'required|email|unique:users'
            ]
        );
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        if($user->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'userId' => $user->id
                    ]
                ], 201
            );
        }
        return $response;
    }
}

