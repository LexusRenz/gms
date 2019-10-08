@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a href="/subjects">Subjects</a>
  <a href="/strands">Strands</a>
  <a class="active" href="/teachers">Teachers</a>
  <a href="/sections">Sections</a>
  <a href="/subjectstrands">Subject Strands</a>
</div>
@endsection
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Advisory Section</th>
 				</tr>
			<tbody>
				@foreach($teachers as $teachers)
					<tr>
						<td>{{ $teachers->id}}</td>
						<td>{{ $teachers->name}}</td>
						<td>{{ $teachers->advisory_section}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teachers/add'>Add Teacher</a>
        </div>
	</br>
@endsection