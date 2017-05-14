@extends('layout')


@section('body-content')
	<h1 class="text-center">Hello {{$user_name}}</h1>


	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>name</th>
				<th>roll</th>
				<th>email</th>
				<th>class_id</th>
				<th>school_id</th>
				<th>gender</th>
				<th>address</th>
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
				<td><a href="{{action('StudentsController@details',$s->id)}}">Details</a></td>
			</tr>
			@endforeach


		</tbody>
	</table>
@endsection
