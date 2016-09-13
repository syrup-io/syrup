@extends('layouts.app')

@section('content')

@if(isset($organizations))

  @include('project.organizations')

@elseif(isset($repositories))

  @include('project.repositories')

@endif

@endsection
