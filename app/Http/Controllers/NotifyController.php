<?php

namespace App\Http\Controllers;

use App\Models\Notify;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
                'email' => 'required|email|unique:notifies'
        ]);
        $email = $request->input('email');
        $notify = new Notify();
        $notify->email = $email;
        $notify->save();
        return response()->json('success' );
    }
}
