@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Playerhistory</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/player-history/create') }}" class="btn btn-success btn-sm" title="Add New PlayerHistory">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/player-history', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Player Id</th>
                                        <th>Matches</th>
                                        <th>Runs</th>
                                        <th>Highest Score</th>
                                        <th>Fifties</th>
                                        <th>Hundreds</th>
                                        <th>Awards</th>
                                        <th>ManOfMatch</th>
                                        <th>Matches Batting</th>
                                        <th>Batting Avg</th>
                                        <th>Bowling Avg</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($playerhistory as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->no_of_matches }}</td>
                                        <td>{{ $item->no_of_runs }}</td>
                                        <td>{{ $item->no_of_runs }}</td>
                                        <td>{{ $item->hightest_score }}</td>
                                        <td>{{ $item->no_of_fifties }}</td>
                                        <td>{{ $item->no_of_hundreds }}</td>
                                        <td>{{ $item->no_of_awards }}</td>
                                        <td>{{ $item->no_of_mom }}</td>
                                        <td>{{ $item->no_of_matches_batting }}</td>
                                        <td>{{ $item->batting_avg }}</td>
                                        <td>{{ $item->bowling_avg }}</td>
                                        <td>
                                            <a href="{{ url('/player-history/' . $item->id) }}" title="View PlayerHistory"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/player-history/' . $item->id . '/edit') }}" title="Edit PlayerHistory"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/player-history', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete PlayerHistory',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $playerhistory->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
