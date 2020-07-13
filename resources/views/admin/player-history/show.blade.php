@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PlayerHistory {{ $playerhistory->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/player-history') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/player-history/' . $playerhistory->id . '/edit') }}" title="Edit PlayerHistory"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['playerhistory', $playerhistory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete PlayerHistory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $playerhistory->id }}</td>
                                    </tr>
                                    <tr><th> Player Id </th><td> {{ $playerhistory->player_id }} </td></tr>
                                    <tr><th> Matches</th><td>{{ $playerhistory->no_of_matches }}</td></tr>
                                    <tr> <th> Runs </th><td>{{ $playerhistory->no_of_runs }}</td><tr>
                                    <tr> <th>Highest Score </th><td>{{ $playerhistory->no_of_runs }}</td></tr>
                                    <tr> <th> Highest Score </th><td>{{ $playerhistory->hightest_score }}</td></tr>
                                    <tr> <th> Fifties </th><td>{{ $playerhistory->no_of_fifties }}</td></tr>
                                    <tr> <th>Hundreds </th><td>{{ $playerhistory->no_of_hundreds }}</td></tr>
                                    <tr> <th> Awards </th><td>{{ $playerhistory->no_of_awards }}</td></tr>
                                    <tr><th> ManOfMatch </th><td>{{ $playerhistory->no_of_mom }}</td></tr>
                                    <tr> <th> Matches Batting </th><td>{{ $playerhistory->no_of_matches_batting }}</td></tr>
                                     <tr><th> Batting Avg </th><td>{{ $playerhistory->batting_avg }}</td> </tr>
                                     <tr> <th>Bowling Avg </th><td>{{ $playerhistory->bowling_avg }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
