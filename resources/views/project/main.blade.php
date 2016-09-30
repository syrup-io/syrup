
<div class="ui grid">
  <div class="three wide column center aligned" style="padding-top:3em; padding-left: 3em; padding-bottom:3em;">
    <a href="project/create"><div class="circular ui icon green button" data-content="Create A New Project">
      <i class="icon plus"></i>
    </div></a>
  </div>
</div>

@section('scripts')
  @parent
    <script>
    $('.button').popup();
    </script>
@endsection
