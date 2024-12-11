@extends('layouts._materializev2._materializev2')

@section('header')
	@include("layouts.templateSuperAdmin.partials.headerSuperAdmin")
@endsection

@section('sidebar')
	@include("layouts.templateSuperAdmin.partials.sidebarSuperAdmin")
@endsection

@section('content')
	@yield('content')
@endsection
