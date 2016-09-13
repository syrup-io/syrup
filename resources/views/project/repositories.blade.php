<div class="ui container">
    <div class="ui centered header" style="padding-top:2em;">
        <h3> repositories </h3>
    </div>
    <div class="ui pointing secondary menu">
      @foreach($repositories as $repository)
      <a class="item" data-tab="organization">{{ $repository['name'] }}</a>
      @endforeach
    </div>
</div>
@section('scripts')
<script>
$('.tabular.menu .item').tab();
</script>
@endsection
