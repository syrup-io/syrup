
<div class="ui grid">
  <div class="three wide column center aligned" style="padding-top:3em; padding-bottom:3em;">
    <div class="circular ui icon green button" data-content="Create A New Project">
      <i class="icon plus"></i>
    </div>
  </div>
</div>

@if(Auth::check())
  @if(is_array($orgs))
    @include('project.partials.orgs')
  @endif

  @if(is_array($repos))
    @include('project.partials.repos')
  @endif
@endif

@section('scripts')
  @parent
    <script>
    $('.button')
      .popup({
        inline: true
      })
    ;
    </script>
@endsection
