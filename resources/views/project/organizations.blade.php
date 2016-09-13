<div class="ui container">
    <div class="ui centered header" style="padding-top:2em;">
        <h3> organizations </h3>
    </div>
    <div class="ui pointing secondary menu">
      @foreach($organizations as $organization)
      <a class="item" data-tab="organization">{{ $organization['login'] }}</a>
      @endforeach
    </div>
</div>
@section('scripts')
  @parent
      <script>
        $('.tabular.menu .item').tab();
      </script>
@endsection
