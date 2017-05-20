@extends('layout')


@section('body-content')
	<h1>Students</h1>
	<hr>

	<p class="alert alert-info text-right">
		<a class="btn btn-xs btn-primary" href="{{action('StudentsController@create')}}" role="button"><i class="glyphicon glyphicon-plus"></i> Add</a>
	</p>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Roll</th>
				<th>E-mail</th>
				<th>Class</th>
				<th>School</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $s)
			<tr>
				<td>{{$s->id}}</td>
				<td>{{$s->name}}</td>
				<td>{{$s->roll}}</td>
				<td>{{$s->email}}</td>
				<td>{{$s->_class->class_name}}</td>
				<td>{{$s->school->school_name}}</td>
				<td>{{$s->gender}}</td>
				<td>{{$s->address}}</td>
				<td>
					<a href="{{action('StudentsController@details',$s->id)}}">Details</a>
					<a href="{{action('StudentsController@edit',$s)}}">Edit</a>
				</td>
			</tr>
			@endforeach


		</tbody>
	</table>
@endsection
