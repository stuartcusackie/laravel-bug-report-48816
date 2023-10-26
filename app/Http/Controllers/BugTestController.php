<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Mail\TestMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BugTestController extends Controller
{

    /**
     * Handle the request
     * 
     * @return redirect
     */
    public function handleRequest(Request $request)
    { 
        $user = User::first();

        $item = new Item;
        $item->name = Str::random(15);
        $item->place_id = 1;
        $item->team_id = 1;
        $item->user_id = 1;
        $item->save();

        Mail::to($user->email)->send(new TestMailable($item));

        return back();
    }

}