<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('name','Nome do Curso') }}
            {{ Form::text('name', old('name') ?? $course->name ?? null, array_merge(['class' => 'form-control', 'autofocus'])) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('code','Código') }}
            {{ Form::text('code', old('code') ?? $course->code ?? null, array_merge(['class' => 'form-control', 'autofocus'])) }}
        </div>
    </div>
</div>                