<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Player;
use App\User;
use Auth;

class PprofileController extends Controller
{
    public function index()
    {
        //
        $userid = Auth::user()->id;
        $player = Player::where('user_id', '=', $userid)->first();
        return view('players.detail',compact('player'));
    }


}
