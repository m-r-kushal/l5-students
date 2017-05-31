@extends('layouts.app')


@section('content')
<h1>Students</h1>
<hr>

<p class="text-right">
	<a class="btn btn-primary" href="{{action('StudentsController@index')}}" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
</p>


<table class="table table-hover">
	<tbody>
		<tr>
			<th>ID</th>
			<td>{{$student->id}}</td>
		<tr>
			<th>name</th>
			<td>{{$student->name}}</td>
		<tr>
			<th>roll</th>
			<td>{{$student->roll}}</td>
		<tr>
			<th>email</th>
			<td>{{$student->email}}</td>
		<tr>
			<th>class_id</th>
			<td>{{$student->_class->class_name}}</td>
		<tr>
			<th>school_id</th>
			<td>{{$student->school->school_name}}</td>
		<tr>
			<th>gender</th>
			<td>{{$student->gender}}</td>
		<tr>
			<th>address</th>
			<td>{{$student->address}}</td>
		</tr>
		<tr>
			<th>Subjects</th>
			<td>
			<ul>
			@foreach ($student->subjects as $s)
				<li>{{$s->subject}}</li>
			@endforeach

			</ul>
			</td>
		</tr>
	</tbody>
</table>
@endsection


