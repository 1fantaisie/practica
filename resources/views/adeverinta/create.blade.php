@extends('layouts.app')

@section('content')
<form action='adeverinta/store' >
	<div class="form-group">
<label> Numele studentului</label>
<input type=text name=camp1 class="form-control">
<label> CNP studentului</label>
<input type=text name=camp2 class="form-control">
<input type=submit value=trimite class="btn btn-default">
</div>
</form>   

@endsection