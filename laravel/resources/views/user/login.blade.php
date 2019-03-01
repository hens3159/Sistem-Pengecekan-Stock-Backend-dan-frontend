@extends('user.master_user')

@section('title', 'Login')


@section('css')

<style>
body{
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#6affba+0,2ed991+100 */
background-image: url("gambar/background_login.svg"); /* Old browsers */
background-repeat: no-repeat;
background-size: cover;
/* background: -moz-linear-gradient(top, #6affba 0%, #2ed991 100%) fixed; /* FF3.6-15 */
/* background: -webkit-linear-gradient(top, #6affba 0%,#2ed991 100%)fixed; /* Chrome10-25,Safari5.1-6 */ */
/* background: linear-gradient(to bottom, #6affba 0%,#2ed991 100%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ */
/* filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6affba', endColorstr='#2ed991',GradientType=0 ); /* IE6-9 */ */
}

</style>@endsection



@section('content')

<div class="container" style="padding-right:32px; padding-left:32px;">

<div class="logo">
  <div class="row justify-content-center">
       <img src="gambar/icon_app.svg" class="img-responsive" width="160" height="160" alt="logo">
   </div>

       <h5 class="text-center text-white">Portable Stock</h5>
</div>


    <form action="{!! route('user.submit') !!}" class="form-login">
      <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder="Username" name="username">
      </div>

      <div class="form-group">
       <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
     </div>

     <div class="button-space">
     <div class="form-group">
       <!-- submit -->
       <input type="submit" id="login" class="btn btn-warning text-white btn-block btn-login" value="Masuk">
    </div>

    <div class="form-group">
      <input type="button" id="register" class="btn btn-outline-light text-white btn-block button-link" value="Daftar"  >
   </div>
 </div>
    </form>
<footer class="login-footer">

  <div class="container">
  <div class="row align-items-end justify-content-center">
    <p class="text-white" style="margin-bottom:0px">PT Triputra Agro Persada. All Right Reserved</p>
</div>
</div>
</footer>

</div>


<script type="text/javascript">
$("#register").click(function(){
  window.location = "http://{{Request::getHost()}}/user-register"
})


</script>


@endsection
