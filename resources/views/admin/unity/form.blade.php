    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('code','Código INEP') }}
                {{ Form::text('code',old('code') ?? $unity->code ?? null , array_merge(['class' => 'form-control', 'autofocus'])) }}                        
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                {{ Form::label('name','Nome da Unidade') }}
                {{ Form::text('name',old('name') ?? $unity->name ?? null, array_merge(['class' => 'form-control'])) }}                        
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                {{ Form::label('address','Endereço') }}
                {{ Form::text('address',old('address') ?? $unity->address ?? null, array_merge(['class' => 'form-control'])) }}                        
            </div>
        </div>
        <div class="col-md-3">
           <div class="form-group">
                {{ Form::label('number','Número') }}
                {{ Form::text('number',old('number') ?? $unity->number ?? null, array_merge(['class' => 'form-control'])) }}                        
            </div>    
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            
            <div class="form-group">
                {{ Form::label('city_id','Cidade') }}
                {{ Form::select('city_id',$cities->pluck('name','id'),old('city_id') ?? $unity->city_id ?? null,['placeholder'=>'Selecione uma cidade','class'=>'form-control'])}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('phone','Telefone') }}
                {{ Form::text('phone',old('phone') ?? $unity->phone ?? null, array_merge(['class' => 'form-control'])) }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('email','E-mail') }}
                {{ Form::text('email',old('email') ?? $unity->email ?? null, array_merge(['class' => 'form-control'])) }}
            </div>                
        </div>
    </div>
   