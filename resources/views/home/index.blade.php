@extends('layouts.app')

@section('content')

@if (Auth::check())

@include('project.main')

@endif

@endsection
