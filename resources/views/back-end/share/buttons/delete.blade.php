<div class="col-md-8">
	<form action="{{route($routeName.'.destroy',['id' => $row])}}" method="POST">
		{{csrf_field()}}
		{{method_field('delete')}}
		 <button type="submit" class="btn btn-danger btn-sm">
		 	<i class="fa fa-trash"></i> 
		 Delete 
		</button>
	</form>
</div>