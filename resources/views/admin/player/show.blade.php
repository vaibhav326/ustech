@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Player {{ $player->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/player') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/player/' . $player->id . '/edit') }}" title="Edit Player"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/player', $player->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Player',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $player->id }}</td>
                                    </tr>
                                    <tr><th> First Name </th><td> {{ $player->first_name }} </td></tr>
                                      <tr> <th> Last Name </th> <td>{{ $player->last_name }}</td></tr>
                                      <tr> <th> Image </th> <td><img src="{{URL::asset('/Player/' .$player->id .'/'. $player->image_uri )}}" alt="profile Pic" height="50" width="50"></td></tr>
                                      <tr>  <th> Jersey No </th> <td>{{ $player->jersey_no }}</td> </tr>
                                      <tr>  <th> Batting Hand </th> <td>{{ $player->batting_hand }}</td> </tr>
                                       <tr>  <th> Bowling Skill </th><td>{{ $player->bowling_skill }}</td> </tr>
                                       <tr>  <th> Country </th><td>{{ $player->country }}</td> </tr>
                                       <tr>  <th> Team </th><td>{{ $player->team?$player->team->name:null }}</td> </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
