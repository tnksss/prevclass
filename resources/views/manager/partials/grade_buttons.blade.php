<div class="responsive">
    {!! Form::open(['method' => 'delete', 
        'route' => ['grades.destroy', $grade->id], 'class' => 'inline-block'
        ]) !!}
        <a href="{{ route('grades.show',['id' => $grade->id]) }}" class="btn-sm btn btn-info"><i class="fa fa-search"></i></a>    
        <a href="{{ route('grades.edit',['id' => $grade->id]) }}" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
        
        <button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
        <i><i class="fa fa-remove"></i></i>
        </button>
    {!! Form::close() !!}        
</div>