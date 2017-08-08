@extends('institucion.master_institucion')

@section('content')
		{{ Auth::guard('institucion')->user()->nombre }}
@endsection