<div class="form-group {{ $errors->has('valueVan') ? 'has-error' : ''}}">
    {!! Form::label('valueVan', 'Valuevan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('valueVan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('valueVan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valueAlbireo') ? 'has-error' : ''}}">
    {!! Form::label('valueAlbireo', 'Valuealbireo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('valueAlbireo', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('valueAlbireo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valueQuantec') ? 'has-error' : ''}}">
    {!! Form::label('valueQuantec', 'Valuequantec', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('valueQuantec', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('valueQuantec', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
