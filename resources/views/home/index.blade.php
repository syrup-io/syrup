@extends('layouts.app')

@section('content')

@if (Auth::check())

  @if(is_array($orgs))
    @include('project.orgs')
  @endif

  @if(is_array($repos))
    @include('project.repos')
  @endif

@endif

@endsection
