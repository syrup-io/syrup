@extends('layouts.app')

@section('content')
<div class="ui top attached tabular menu">
  <div class="item">Tab</div>
</div>
<div class="ui bottom attached tab segment">
  <p></p>
  <p></p>
</div>
@endsection
@section('scripts')
<script>
$('.menu .item')
  .tab()
;
</script>
@endsection
