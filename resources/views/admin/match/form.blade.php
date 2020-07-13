<div class="form-group{{ $errors->has('team_1') ? 'has-error' : ''}}">
    {!! Form::label('team_1', 'Team 1', ['class' => 'control-label']) !!}
    {!! Form::text('team_1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('team_1', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
