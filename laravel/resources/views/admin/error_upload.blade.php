@extends('admin.master_admin_login')

@section('title', 'Error Upload')
@section('css')
<style>
body{
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#6affba+0,2ed991+100 */
background-image: url("gambar/background_loginAdmin.svg"); /* Old browsers */
background-repeat: no-repeat;
background-size: cover;
/* background: -moz-linear-gradient(top, #6affba 0%, #2ed991 100%) fixed; /* FF3.6-15 */
/* background: -webkit-linear-gradient(top, #6affba 0%,#2ed991 100%)fixed; /* Chrome10-25,Safari5.1-6 */ */
/* background: linear-gradient(to bottom, #6affba 0%,#2ed991 100%) fixed; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ */
/* filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6affba', endColorstr='#2ed991',GradientType=0 ); /* IE6-9 */ */
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
      <h1 class="h1" style="color:white; padding:30px 0 0 0;">Mohon Upload Sesuai Template</h1>
      <h3 class="h3" style="color:white; padding:10px 0;"> Silahkan Untuk Mengulangi Kembali Proses Upload</h2><br>

    </div>
    <div class="form-group" style="margin-top:20px;">
      <input type="button" style="font-size:16px; font-weight:700; height: 58px;" id="register" class="btn btn-lg btn-warning text-white btn-block btn-login" value="Kembali Ke Dashboard"  >
   </div>



    </div>




<script type="text/javascript">
$("#register").click(function(){
  window.location = "http://{{Request::getHost()}}/admin-dashboard"
})



</script>




@endsection
