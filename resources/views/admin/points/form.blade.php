<div class="form-group{{ $errors->has('team_id') ? 'has-error' : ''}}">
    {!! Form::label('team_id', 'Team Id', ['class' => 'control-label']) !!}
    {!! Form::text('team_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('team_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
