<div class="form-group">        
        {{ Form::label('name','Nome do Secretário(a)') }}
        {{ Form::text('name',old('name') ?? $manager->name ?? null, array_merge(['class' => 'form-control', 'autofocus'])) }}                        
    </div>
    <div class="form-group">
    <div class="form-group">
        {{ Form::label('email','E-mail') }}
        {{ Form::text('email',old('email') ?? $manager->email ?? null, array_merge(['class' => 'form-control'])) }}
    </div>                
    </div>
    
    <div class="form-group">
        {{ Form::label('cpf','CPF') }}
        {{ Form::text('cpf',old('cpf') ?? $manager->cpf ?? null, array_merge(['class' => 'form-control'])) }}
    </div>
    <div class="form-group">
        {{ Form::submit('salvar', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
