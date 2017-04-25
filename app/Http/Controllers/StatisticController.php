<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Leaderboard;
use App\Statistic;
use App\Foul;
use App\Player;
use Auth;
use DB;
class StatisticController extends Controller

{
    public function index()
    {
        $goals = Leaderboard::select(DB::raw('max(gfor)'))->first();


        $leaderboard = Leaderboard::union($goals)->first();

        echo $leaderboard;
        
        if (is_null($leaderboard)){echo "this is null";}
        else{$tname=$leaderboard->t_name;}

        $maxfoul = Foul::select(DB::raw('max(sum(y_card+r_card))'))->first();
        $foul = Foul::where('y_card + r_card', '=', $maxfoul)->first();
        $id=$foul->player_id;
        $player = Player::findOrFail($id);
        $statistic= new Statistic();
        $statistic['m_scored']=$tname;
        $statistic['m_fouls']=$player->p_fname;
        $statistic->save();
        echo $statistic;
        return view('matches.statistics', compact('statistic'));
    }

}
