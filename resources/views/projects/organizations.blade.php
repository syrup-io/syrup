@foreach($organizations as $organization)
<div class="ui top attached tabular menu">
  <div class="item">{{ $organization['login'] }}</div>
</div>
@endforeach
<div id="app">
    <h5> h </h5>
</div>
@section('scripts')
  <script src="/dist/app.js"></script>
@endsection
