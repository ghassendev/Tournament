<?php

namespace App\Modules\Match\Http\Controllers;

use App\Modules\Match\Models\Match;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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
         


                if(Match::where('playerId',  $request->input('userId'))->where('TournamentId', 'LIKE', $request->input('tournamentId'))->count() > 0) {
            
                    return redirect('');
                                        
                }       
                else{
                $match = new Match;
                $match->playerId=$request->input('userId');
                $match->TournamentId=$request->input('tournamentId');
                $match->save();
                return redirect('tournament');
            }}


    }

