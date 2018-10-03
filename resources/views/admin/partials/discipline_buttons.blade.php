<div class="responsive">
	
        {{ Form::open(['method' => 'delete', 'route' => ['disciplines.destroy', $discipline->id]])}}
        
        <a href="{{ route('disciplines.edit',['id' => $discipline->id]) }}" title="Editar" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>        
        
        
        <button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
            <i><i class="fa fa-remove"></i></i>
                </button>
        
            
        {{ Form::close() }}

        {{-- 
                {!! Form::open([
                    'method' => 'delete', 'route' => ['disciplines.destroy', $discipline->id], 'class' => 'inline-block'
                ]) !!}
            
                
                {!! Form::close() !!} --}}
    </div>