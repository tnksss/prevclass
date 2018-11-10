<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('cgm','CGM')}}
            {{ Form::text('cgm', old('cgm') ?? $student->cgm ?? null, array_merge(['class' => 'form-control','autofocus'])) }}                        
              
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('name','Nome do Aluno')}}
            {{ Form::text('name',old('name') ?? $student->name ?? null, array_merge(['class' => 'form-control', 'autofocus'])) }}                      
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('bornDate', 'Data de Nascimento')}}
            {{ Form::date('bornDate', old('bornDate') ?? $student->bornDate ?? '\Carbon\Carbon::now()',array('class'=> 'form-control') )}}
        </div>
    </div>
</div>		    					