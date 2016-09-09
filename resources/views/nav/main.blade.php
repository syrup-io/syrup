@extends('layouts.app')

@section('content')
<div class="ui top attached borderless large menu" id="main">
  <div class="ui dropdown icon item" onclick="openNav()">
    <i class="fa fa-bars"></i>
  </div>
  @include('nav.partials.side')
  <div class="header item centered aligned">
      Syrup
  </div>
  @include('nav.partials.user')
</div>
@endsection
