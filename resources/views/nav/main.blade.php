@extends('layouts.app')


@section('content')

<div class="ui top attached borderless large menu" id="main">
  <div class="ui dropdown icon item" onclick="openNav()">
    <i class="fa fa-bars"></i>
  </div>

  @include('nav.partials.side')

  <div class="header item centered aligned">
      @include('nav.partials.search')
  </div>

  <div class="header item right aligned">
    <h3 class="screen-only ui header">
      Syrup
    </h3>
  </div>

  @include('nav.partials.user')

</div>

@endsection

@section('scripts')

<script>
$('.ui.dropdown')
  .dropdown()
;
$('.ui.search')
  .search({ type: 'category' });

</script>

@endsection
