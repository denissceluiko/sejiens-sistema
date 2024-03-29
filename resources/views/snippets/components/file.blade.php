<div class="form-group row">
    {{ Form::label($name, $label, ['class' => 'col-sm-4']) }}
    <div class="col-sm-8">
        {{ Form::file($name,  array_merge(['class' => 'form-control'], $attributes)) }}
        @if(isset($subtitle))
            <small class="form-text text-muted">{{ $subtitle }}</small>
        @endif
        @if ($errors->has($name))
            <small class="form-text text-danger">{{ $errors->first($name) }}</small>
        @endif
    </div>
</div>