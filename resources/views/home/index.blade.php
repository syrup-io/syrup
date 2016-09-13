@extends('layouts.app')

@section('content')

@if (Auth::check() and isset($orgs))

  @include('project.orgs')

  @include('project.repos')

@endif

@endsection
