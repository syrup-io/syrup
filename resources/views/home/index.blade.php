@extends('layouts.app')

@section('content')

@if (Auth::check() and is_array($orgs) and is_array($repos))

  @include('project.orgs')

  @include('project.repos')

@elseif (Auth::check() and is_array($orgs))

  @include('project.orgs')

@elseif (Auth::check() and is_array($repos))

  @include('project.repos')

@endif

@endsection
