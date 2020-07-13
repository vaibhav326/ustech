<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Player;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
            $team = Team::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $team = Team::latest()->paginate($perPage);
        }

        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $player=Player::all();
        return view('admin.team.create',compact($player));
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
        $file=$request->file('logo_uri');
        unset($request['logo_uri']);
        $team=Team::create($requestData);
        if( $file){
            $name=$request->file('logo_uri')->getClientOriginalName();
            $ext=$request->file('logo_uri')->getClientOriginalExtension();
            $file->move(public_path().'/Team/'.$team->id.'/',$name);
            $team=Team::find($team->id);
            $team->update(['logo_uri'=>$name]);

        }
       
        return redirect('admin/team')->with('flash_message', 'Team added!');
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
        $team = Team::findOrFail($id);

        return view('admin.team.show', compact('team'));
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
        $team = Team::findOrFail($id);

        return view('admin.team.edit', compact('team'));
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
        $file=$request->file('logo_uri');
        $team = Team::findOrFail($id);
        if(!empty($file)){
            $name=$request->file('logo_uri')->getClientOriginalName();
            $ext=$request->file('logo_uri')->getClientOriginalExtension();
            $file->move(public_path().'/Team/'.$id.'/',$name);
            $requestData['logo_uri']=$name;

        }
       // dd($team);
        $team->update($requestData);
        return redirect('admin/team')->with('flash_message', 'Team updated!');
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
        Team::destroy($id);

        return redirect('admin/team')->with('flash_message', 'Team deleted!');
    }


    public function startMatch($id){
        $team = Team::findOrFail($id);

        return view('admin.team.select-team', compact('team'));
    }

    public function pickTeam($id){
        $result=Team::inRandomOrder()->where('id','!=',$id)->first();
        return response()->json(['data'=>$result]);
    }
}
