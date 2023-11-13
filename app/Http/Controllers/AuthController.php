<?php

namespace App\Http\Controller;

use Illuminate\Http\Controllers;
use App\Models\Cruz_User;

class AuthController extends Controller
{
    //C303
    function performRegister(Request $request ){
        $request->validate([
            'RegFirstName' => 'required | max:50 | min:5',
            'RegLastName' => 'required | max:50 | min:5',
            'RegEmail' => 'required | email | max:50 | min:5',
            'RegPassword' => 'required |max:50 | min:5'
        ]);

        $cruz_user = new al_user();
        $cruz_user->first_name = $request->input('RegFirstName');
        $cruz_user->last_name = $request->input('RegLastName');
        $cruz_user->email = $request->input('RegEmail');
        $cruz_user->password = $request->input('RegPassword');
        $cruz_user->date_created = date('Y-m-d');
        $cruz_user->date_modified =  date('Y-m-d');

        return response ('success!');
    }
}