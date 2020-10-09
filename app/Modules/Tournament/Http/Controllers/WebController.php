<?php

namespace App\Modules\Tournament\Http\Controllers;

use App\Modules\Tournament\Models\Tournament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{

  
  
    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserListTournament()
    {
        $tournament=Tournament::orderBy('created_at','desc')->paginate(8);
        return view("Tournament::welcome")->with('tournament',$tournament);
    }

    /**
     * Display the module Create screen
     *
     * @return \Illuminate\Http\Response
     */

    public function showUserCreateTournament(){

        return view ("Tournament::create");
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleUserAddTournament(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'nbPlayers' => 'required',
            'nbTree' => 'required',
            'price' => 'required']);

            $playersNumber=$request->input('nbPlayers');
            $treeNumber=$request->input('nbTree');
            $matchsNumber=$playersNumber*pow(2,($treeNumber-1));
            
            $tournament = new Tournament;
            $tournament->title = $request->input('title');
            $tournament->description= $request->input('description');
            $tournament->nbPlayers = $request->input('nbPlayers');
            $tournament->nbTree =$request->input('nbTree');
            $tournament->matchsNumber=$matchsNumber;
            $tournament->idOrganizer=auth()->user()->id;

            $tournament->price = $request->input('price');
            $tournament->save();
            return redirect('tournament')->with('success', 'Tournament created');
        }
}
