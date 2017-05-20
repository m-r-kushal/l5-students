@extends('layout')


@section('body-content')
<div class="row">
	<div class="col-lg-offset-2 col-lg-8">
		<form action="{{action('StudentsController@update')}}" class="form-horizontal" method="POST" role="form">
			{{csrf_field()}}
			{{Form::hidden('id', $student->id)}}
			<legend>Form title</legend>
			<div class="form-group @if ($errors->has('name')) has-error @endif">
				<label class="control-label col-lg-3">Name</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="name" value="{{old('name',$student->name)}}" placeholder="name">
					{!!$errors->first('name','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('roll')) has-error @endif">
				<label class="control-label col-lg-3">Roll</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="roll" value="{{old('roll', $student->roll)}}" placeholder="roll">
					{!!$errors->first('roll','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('email')) has-error @endif">
				<label class="control-label col-lg-3">E-mail</label>
				<div class="col-lg-9">
					<input type="text" class="form-control" name="email" value="{{old('email', $student->email)}}" placeholder="email">
					{!!$errors->first('email','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('class_id')) has-error @endif">
				<label class="control-label col-lg-3">Class</label>
				<div class="col-lg-9">
					{{ Form::select('class_id',  $classes, $student->class_id, ['placeholder'=>'Please Select', 'class'=>'form-control']) }}
					{!!$errors->first('class_id','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('school_id')) has-error @endif">
				<label class="control-label col-lg-3">School</label>
				<div class="col-lg-9">
					{{ Form::select('school_id',  $schools, $student->school_id, ['placeholder'=>'Please Select', 'class'=>'form-control']) }}
					{!!$errors->first('school_id','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('gender')) has-error @endif">
				<label class="control-label col-lg-3">Gender</label>
				<div class="col-lg-9">
					@foreach ($gender as $label=>$value)
				      <label class="radio-inline">
				        {{ Form::radio('gender', $value, old('gender',$student->gender)==$value) }}  {{$label}}
				      </label>
				    @endforeach
					{!!$errors->first('gender','<span class="help-block">:message</span>')!!}
				</div>
			</div>
			<div class="form-group @if ($errors->has('address')) has-error @endif">
				<label class="control-label col-lg-3">Address</label>
				<div class="col-lg-9">
					<textarea name="address" class="form-control" rows="5" placeholder="address">{{old('address',$student->address)}}</textarea>
					<span class="help-inline">{!!$errors->first('address','<span class="help-block">:message</span>')!!}</span>
				</div>
			</div>
			<div class="form-group @if ($errors->has('subject')) has-error @endif">
				<label class="control-label col-lg-3">Subjects</label>
				<div class="col-lg-9">
					<div class="checkbox">
					@foreach ($subjects as $id=>$subject)
				      <label>
				        {{ Form::checkbox('subject[]', $id , in_array( $id, old('subject',$student_subjects)) ) }}  {{$subject}}
				      </label><br>
				    @endforeach
					{!!$errors->first('subject','<span class="help-block">:message</span>')!!}
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"></label>
				<div class="col-lg-9">
					<a class="btn btn-danger" href="{{action('StudentsController@index')}}" role="button"><i class="glyphicon glyphicon-arrow-left"></i>Back</a>
					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Update</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection