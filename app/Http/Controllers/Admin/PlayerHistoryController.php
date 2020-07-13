<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\PlayerHistory;
use App\Player;
use DB;
use Illuminate\Http\Request;

class PlayerHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $playerhistory = PlayerHistory::where('player_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $playerhistory = PlayerHistory::latest()->paginate($perPage);
        }

        return view('admin.player-history.index', compact('playerhistory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $player_id=null;
        $player=[];
        $players=Player::select( DB::raw("CONCAT(COALESCE(`first_name`,''),' ',COALESCE(`last_name`,'')) AS name"),'id')->get()->toArray();
        foreach($players as $p=>$pv){
            $player[]=array($pv['id']=>$pv['name']);
        }
        return view('admin.player-history.create',compact('player','player_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        PlayerHistory::create($requestData);
        return redirect('/admin/player-history')->with('flash_message', 'PlayerHistory added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $playerhistory = PlayerHistory::findOrFail($id);
        return view('admin.player-history.show', compact('playerhistory'));
    }



    public function playerWithPlayerId($id){
        $playerhistory = PlayerHistory::where('player_id',$id)->first();
        $player_id=$playerhistory->player_id;
        $player=[];
        $players=Player::select( DB::raw("CONCAT(COALESCE(`first_name`,''),' ',COALESCE(`last_name`,'')) AS name"),'id')->get()->toArray();
        foreach($players as $p=>$pv){
            $player[]=array($pv['id']=>$pv['name']);
        }
        return view('admin.player-history.show', compact('playerhistory','player','player_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $playerhistory = PlayerHistory::findOrFail($id);
        return view('admin.player-history.edit', compact('playerhistory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $playerhistory = PlayerHistory::findOrFail($id);
        $playerhistory->update($requestData);
        return redirect('player-history')->with('flash_message', 'PlayerHistory updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        PlayerHistory::destroy($id);

        return redirect('player-history')->with('flash_message', 'PlayerHistory deleted!');
    }
}
