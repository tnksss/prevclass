<div class="responsive">
    {!! Form::open(['method' => 'delete', 
        'route' => ['teachers.destroy', $teacher->id], 'class' => 'inline-block'
        ]) !!}
        <a href="{{ route('teachers.show',['id' => $teacher->id]) }}" class="btn-sm btn btn-info"><i class="fa fa-search"></i></a>    
        <a href="{{ route('teachers.edit',['id' => $teacher->id]) }}" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
        
        <button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
        <i><i class="fa fa-remove"></i></i>
        </button>
    {!! Form::close() !!}        
</div>