<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
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
            $match = Match::with('team1','team2')->where('team_1', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $match = Match::with('team1','team2')->latest()->paginate($perPage);
        }
        
        return view('admin.match.index', compact('match'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.match.create');
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
        $team1=$requestData['team1'];
        $team2=$requestData['team2'];
        $count=Match::where(['team_1'=>$team1,'team_2'=>$team2])->count();
        $data=Match::create($requestData);
        if($request->ajax()){
            return response()->json(['data'=>$data]);
        }
        return redirect('match')->with('flash_message', 'Match added!');
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
        $match = Match::findOrFail($id);

        return view('admin.match.show', compact('match'));
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
        $match = Match::findOrFail($id);

        return view('admin.match.edit', compact('match'));
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
        
        $match = Match::findOrFail($id);
        $match->update($requestData);

        return redirect('admin/match')->with('flash_message', 'Match updated!');
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
        Match::destroy($id);

        return redirect('admin/match')->with('flash_message', 'Match deleted!');
    }
}
