<div class="flash-message auto-hide">
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }} text-center auto-hide-box">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      <script type="text/javascript">
      	setTimeout(function(){ $('.auto-hide-box').fadeOut(); }, 5000);
      </script>
    @endif
  @endforeach
</div>