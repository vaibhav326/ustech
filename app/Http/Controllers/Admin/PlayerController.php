<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Team;
use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
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
            $player = Player::where('first_name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $player = Player::latest()->paginate($perPage);
        }

        return view('admin.player.index', compact('player'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $team=Team::pluck('name','id')->toArray();
        $player_team_id =null;
        return view('admin.player.create',compact('team','player_team_id'));
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
        $file=$request->file('image_uri');
        unset($request['image_uri']);
        $player=Player::create($requestData);
        if( $file){
            $name=$request->file('image_uri')->getClientOriginalName();
            $ext=$request->file('image_uri')->getClientOriginalExtension();
            $file->move(public_path().'/Player/'.$player->id.'/',$name);
            $player=Player::find($player->id);
            $player->update(['image_uri'=>$name]);

        }
        return redirect('admin/player')->with('flash_message', 'Player added!');
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
        $player = Player::with('team')->findOrFail($id);
        $player_team_id=$player->team_id;
        $team=Team::pluck('name','id')->toArray();
        return view('admin.player.show', compact('player','team','player_team_id'));
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
        $player = Player::findOrFail($id);
        $player_team_id=$player->team_id;
        $team=Team::pluck('name','id')->toArray();
        return view('admin.player.edit', compact('player','team','player_team_id'));
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
        $file=$request->file('image_uri');
        $player = Player::findOrFail($id);
        if(!empty($file)){
            $name=$request->file('image_uri')->getClientOriginalName();
            $ext=$request->file('image_uri')->getClientOriginalExtension();
            $file->move(public_path().'/Player/'.$id.'/',$name);
            $requestData['image_uri']=$name;

        }
        $player->update($requestData);

        return redirect('admin/player')->with('flash_message', 'Player updated!');
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
        Player::destroy($id);

        return redirect('admin/player')->with('flash_message', 'Player deleted!');
    }
}
