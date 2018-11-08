<div class="responsive">

	{!! Form::open(['method' => 'delete', 'route' => ['unities.destroy', $unity->id], 'class' => 'inline-block'	]) !!}
	<a href="{{ route('unities.show',['id' => $unity->id]) }}" class="btn-sm btn btn-info"><i class="fa fa-search"></i></a>
	<a href="{{ route('unities.managers.create',['id' => $unity->id]) }}" class="btn-sm btn btn-success"><i class="fa fa-user"></i></a>



	<a href="{{ route('unities.edit',['id' => $unity->id]) }}" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
	
	<button class="btn btn-sm btn-danger" type="submit" title="Deletar" onclick="return confirm('Tem certeza?')">
	<i><i class="fa fa-remove"></i></i>
	</button>
	

	
	{!! Form::close() !!}
	
</div>