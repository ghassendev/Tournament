<?php

namespace App\Modules\PlayerMatch\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayerMatchController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("PlayerMatch::welcome");
    }
         /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleUserAddPlayerToMatch(Request $request){
        
        if(auth()->user()->organizer==1){
     

            $playerMatch = new PlayerMatch;
            $playerMatch->organizerId = auth()->user()->id;
            $playerMatch->playerId= $request->input('playerId');
            $playerMatch->tournamentId = $request->input('tournamentId');
            $playerMatch->treeLevel =$request->input('treeLevel');
            $playerMatch->matchNumber=$request->input('matchNumber');
            $playerMatch->idOrganizer=auth()->user()->id;

            
            $playerMatch->save();
            return redirect('tournament/show');
        
    }
    else{
        return redirect('tournament');
    }
}
}
