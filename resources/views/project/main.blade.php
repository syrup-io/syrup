<div id="app">
    @{{ message }}
</div>

@section('scripts')
  @parent
    <script>
    $('.button').popup();
    </script>
@endsection
