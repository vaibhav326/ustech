<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('logo_uri') ? 'has-error' : ''}}">
    {!! Form::label('name', 'logo', ['class' => 'control-label']) !!}
    {!! Form::file('logo_uri', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('logo_uri', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('club_state') ? 'has-error' : ''}}">
    {!! Form::label('name', 'club State', ['class' => 'control-label']) !!}
    {!! Form::text('club_state', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('club_state', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
