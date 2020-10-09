<?php

namespace App\Modules\Match\Http\Controllers;

use App\Modules\Tournament\Models\Match;
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

    
                $tournament = new Match;
                $tournament->title = $request->input('title');
                $tournament->description= $request->input('description');
                $tournament->nbPlayers = $request->input('nbPlayers');
                $tournament->nbTree =$request->input('nbTree');
                $tournament->idOrganizer=auth()->user()->id;
                $tournament->price = $request->input('price');
                $tournament->save();
                return redirect('tournament')->with('success', 'Tournament created');
            }


    }

