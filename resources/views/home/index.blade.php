@extends('layouts.app')

@section('content')

@if(isset($organizations))

  @include('projects.organizations')

@endif

@endsection
