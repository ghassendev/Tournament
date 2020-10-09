<?php

namespace App\Modules\Match\Http\Controllers;

use App\Modules\Match\Models\Match;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Match::welcome");
    }
    


    public function handlerUserJoinTournement(Request $request){

    
                $match = new Match;
                $match->playerId=$request->input('userId');
                $match->TournamentId=$request->input('tournamentId');
                $match->save();
                return redirect('tournament');
            }


    }

