<div class="responsive">

        {!! Form::open(['method' => 'delete', 'route' => ['unities.managers.destroy', 'manager' => $manager->id, 'unity' => $manager->unity->id], 'class' => 'inline-block'	]) !!}
        
        <a href="{{ route('unities.managers.edit',['unity' => $manager->unity->id, 'manager'=> $manager->id]) }}" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
        
        <button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
        <i><i class="fa fa-remove"></i></i>
        </button>
        
    
        
        {!! Form::close() !!}
        
    </div>