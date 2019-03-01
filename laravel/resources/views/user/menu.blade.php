@extends('user.master_user')

@section('title', 'Menu')


@section('css')

<style>
body{
background-color:white;
}

</style>@endsection



@section('content')

    <div class="jumbotron jumbotron-fluid jumbotron-menu">
      <div class="container" style="padding:0 16px;">
        <div class="judul">
          <div class="buttons">
        <button type="button" id="logout" class="btn btn-outline-light text-white"><i class="fa fa-power-off" style="margin-right:8px;"></i>Logout</button>
      </button>
    </div>
      <div class="judul-kata">
        <h4 class="h4 text-center">Selamat Datang</h4>
        <p class="text-center">Silahkan pilih menu dibawah</p>
      </div>
      </div>
    </div>
</div>

<div class="container" style="padding:0 24px;">
  <p class="menu-title">Menu<p>

    <div class="menu-user">

      <div class="card-menu" id="card_1">
        <div class="isi">
  <img src="gambar/ic_cek.svg" class="mx-auto d-block img-fluid" alt="menu cek" width="94px" height="94px" >
  <div class="container-card">
    <p class="text-center">Cek Stock<p>
  </div>
</div>
</div>


<div class="card-menu" id="card_2">
  <div class="isi">
<img src="gambar/ic_minta.svg" class="mx-auto d-block img-fluid" alt="menu cek" width="94px" height="94px" >
<div class="container-card">
<p class="text-center">Minta Stock<p>
</div>
</div>
</div>

    </div>

</div>
<footer class="footer-menu" >

  <div class="container">
  <div class="row align-items-end justify-content-center" style="height:54px;">
    <p class="text-center" >PT Triputra Agro Persada. All Right Reserved</p>
</div>
</div>

</footer>



<script type="text/javascript">
$("#logout").click(function(){
  window.location = "http://{{Request::getHost()}}/user-logout"
})

$("#card_1").click(function(){
  window.location = "http://{{Request::getHost()}}/cek-stock"
})

$("#card_2").click(function(){
  window.location = "http://{{Request::getHost()}}/minta-stock"
})


</script>



@endsection
