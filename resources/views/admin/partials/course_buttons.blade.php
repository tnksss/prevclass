<div class="responsive">
	
        {{ Form::open(['method' => 'delete', 'route' => ['courses.destroy',$course->id]])}}
        
        <a href="{{ route('courses.edit',[ 'course' => $course->id]) }}" title="Editar" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>        
        <button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
            <i><i class="fa fa-remove"></i></i>
        </button>
            
        {{ Form::close() }}

      
    </div>