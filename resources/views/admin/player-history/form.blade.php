

<div class="form-group{{ $errors->has('player_id') ? 'has-error' : ''}}">
    {!! Form::label('player_id', 'Team', ['class' => 'control-label']) !!}
    {!! Form::select('player_id', $player,$player_id, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('player_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('no_of_matches') ? 'has-error' : ''}}">
    {!! Form::label('no_of_matches', 'Matches', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_matches', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_matches', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_runs') ? 'has-error' : ''}}">
    {!! Form::label('no_of_runs', 'Runs', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_runs', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_runs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hightest_score') ? 'has-error' : ''}}">
    {!! Form::label('hightest_score', 'Highest Score', ['class' => 'control-label']) !!}
    {!! Form::number('hightest_score', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('hightest_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_fifties') ? 'has-error' : ''}}">
    {!! Form::label('no_of_fifties', 'Fifties', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_fifties', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_fifties', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_hundreds') ? 'has-error' : ''}}">
    {!! Form::label('no_of_hundreds', 'Hundreds', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_hundreds', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_hundreds', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_awards') ? 'has-error' : ''}}">
    {!! Form::label('no_of_awards', 'Awards', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_awards', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_awards', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_mom') ? 'has-error' : ''}}">
    {!! Form::label('no_of_mom', 'ManOfMatch', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_mom', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_mom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_of_matches_batting') ? 'has-error' : ''}}">
    {!! Form::label('no_of_matches_batting', 'Matches Batting', ['class' => 'control-label']) !!}
    {!! Form::number('no_of_matches_batting', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_matches_batting', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('batting_avg') ? 'has-error' : ''}}">
    {!! Form::label('batting_avg', 'Batting Avg', ['class' => 'control-label']) !!}
    {!! Form::number('batting_avg', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('batting_avg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bowling_avg') ? 'has-error' : ''}}">
    {!! Form::label('bowling_avg', 'Bowling Avg', ['class' => 'control-label']) !!}
    {!! Form::number('bowling_avg', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bowling_avg', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
