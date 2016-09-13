<div class="ui container" id="app">
    <div class="ui centered header" style="padding-top:2em;">
        <h3> Organizations </h3>
    </div>
    <div class="ui pointing secondary menu">
      @foreach($orgs as $org)
      <a class="item" data-tab="organization">{{ $org['login'] }}</a>
      @endforeach
    </div>
</div>

@section('scripts')
  @parent
      <script>
        $('.tabular.menu .item').tab();
      </script>
@endsection
