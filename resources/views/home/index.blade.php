@extends('layouts.app')

@section('content')

@if(isset($organizations))

  @include('project.organizations')

@endif

@endsection
