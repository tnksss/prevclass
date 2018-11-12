<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('name','Nome do Professor') }}
            {{ Form::text('name',old('name') ?? $teacher->name ?? null,['class' => 'form-control']) }}                        
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('cpf','CPF')}}
            {{ Form::text('cpf',old('cpf') ?? $teacher->cpf ?? null,['class' => 'form-control']) }}                        
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('email','E-mail')}}
            {{ Form::text('email',old('email') ?? $teacher->email ?? null,array_merge(['class'=>'form-control'])) }}                        
        </div>
    </div>
</div>		    					