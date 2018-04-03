@extends('layouts.app')

@section('content')
   
   @foreach($adeverinte as $adeverinta)

 <a href="{!! url('/adeverinta/'.$adeverinta->user_id) !!}"> {{ $adeverinta->camp1 }}  </a>
   @endforeach
@endsection


	