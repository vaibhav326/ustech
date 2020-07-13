@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <team :team=@json($team)></team>
        </div>
    </div>
@endsection
