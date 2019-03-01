@extends('admin.master_admin_login')

@section('title', 'Login Admin')
@section('css')
<style>
body{
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#6affba+0,2ed991+100 */
background-image: url("gambar/background_loginAdmin.svg"); /* Old browsers */
background-repeat: no-repeat;
background-size: cover;

}
</style>

@endsection


@section('content')
<div class="container">

    <div class="logo">
           <img src="gambar/icon_app.svg" class="mx-auto d-block img-fluid" width="160" height="160" alt="logo">

           <h5 class="text-center text-white">Portable Stock</h5>
    </div>

    <div class="row justify-content-center row-center">

        <form action="{!! route('admin.submit') !!}" class="form-login" style="width: 370px;">
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
          <input type="button" id="register" class="btn btn-outline-light  btn-block button-link" value="Daftar"  >
       </div>
     </div>
        </form>
</div>


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
  window.location = "http://{{Request::getHost()}}/admin-register"
})
</script>

@endsection
