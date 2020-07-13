@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Player</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/player/create') }}" class="btn btn-success btn-sm" title="Add New Player">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/player', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Image</th>
                                        <th>Jersey No</th>
                                        <th>Batting Hand</th>
                                        <th>Bowling Skill</th>
                                        <th>Country</th>
                                        <th>Teams</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($player as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td><img src="{{URL::asset('/Player/' .$item->id .'/'. $item->image_uri )}}" alt="profile Pic" height="50" width="50"></td>
                                        <td>{{ $item->jersey_no }}</td>
                                        <td>{{ $item->batting_hand }}</td>
                                        <td>{{ $item->bowling_skill }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->team?$item->team->name:null }}</td>
                                        <td>
                                            <a href="{{ url('/admin/player/' . $item->id) }}" title="View Player"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/player/' . $item->id . '/edit') }}" title="Edit Player"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/player-history/player/' . $item->id) }}" title="PlayerHistory"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/player', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Player',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $player->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
