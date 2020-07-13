<div class="form-group{{ $errors->has('first_name') ? 'has-error' : ''}}">
    {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('last_name') ? 'has-error' : ''}}">
    {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_uri') ? 'has-error' : ''}}">
    {!! Form::label('image_uri', 'Image Uri', ['class' => 'control-label']) !!}
    {!! Form::file('image_uri', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image_uri', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jersey_no') ? 'has-error' : ''}}">
    {!! Form::label('jersey_no', 'Jersey No', ['class' => 'control-label']) !!}
    {!! Form::text('jersey_no', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jersey_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('batting_hand') ? 'has-error' : ''}}">
    {!! Form::label('batting_hand', 'Batting Hand', ['class' => 'control-label']) !!}
    {!! Form::text('batting_hand', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('batting_hand', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bowling_skill') ? 'has-error' : ''}}">
    {!! Form::label('bowling_skill', 'Bowling Skill', ['class' => 'control-label']) !!}
    {!! Form::text('bowling_skill', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bowling_skill', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', 'Country', ['class' => 'control-label']) !!}
    {!! Form::text('country', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('team_id') ? 'has-error' : ''}}">
    {!! Form::label('team_id', 'Team', ['class' => 'control-label']) !!}
    {!! Form::select('team_id', $team,$player_team_id, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('team_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
