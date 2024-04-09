<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersphp;
use Illuminate\Support\Facades\Hash;

class UsersphpController extends Controller
{
    function login(Request $request)
    {
        $user = Usersphp::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password))
        {
            return "Mismatch!";
        }
        else
        {
            $request->session()->put('user', $user);
            return redirect('/');
        }
        return ;
    }
}
