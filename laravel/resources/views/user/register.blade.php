@extends('user.master_user')

@section('title', 'Register')

@section('content')

<!-- Navbar -->
<nav class="container-fluid" style="background:#31DB93">

  <div class="row align-items-center navbar-mobile">
  <div class="col-2" style="padding-left:16px;">
    <a href="http://{{Request::getHost()}}/" style="font-size:20px;"><i class="fa fa-arrow-left" style="font-size:20px; background:none; color:white;"></i></a>
  </div>
  <div class="col-8">
  <p class="text-center">Daftar</p>
  </div>
</div>

</nav>

<content>
  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">

  <div class="title-register">
  <p class="title-register-1">Silakan isi data-data dibawah ini</p>
  <p class="title-register-2">Pastikan anda mengisi data dengan benar</p>
</div>


<div class="container" style="padding-right:16px; padding-left:16px;">

    <form action="{!! route('user.register-akun') !!}" class="form-register" id="registration-form" method="get">
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama"
        data-sanitize="trim"
        data-validation="required"
        data-validation-error-msg-required="Wajib diisi">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="username" placeholder="Buat Username" name="username"
        data-sanitize="trim"
        data-validation="required"
        data-validation-url="http://sawit.oo/ajax/validasi-user.php"
        data-validation-error-msg-required="Wajib diisi">
      </div>

      <div class="form-group">
       <input type="password" class="form-control" id="password" placeholder="Buat Password" name="password"
       data-validation="required"
       data-validation-error-msg-required="Wajib diisi"
       data-sanitize="trim">

     </div>
     <div class="form-group">
      <input type="password" class="form-control" id="repeat" placeholder="Konfirmasi Password" name="repeat"
      data-validation="confirmation required"
      data-validation-confirm="password"
      data-validation-error-msg-required="Wajib diisi"
      data-validation-error-msg="password tidak sama. Silahkan masukan password yang sama"
      data-sanitize="trim">

    </div>

    <div class="form-group" style="padding: 88px 14px 25px 14px;">
      <input type="submit" class="btn btn-success text-white btn-block" id="myBtn" value="Daftarkan">
   </div>
    </form>

</div>
</content>


<!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class=" modal-dialog" role="document">

      <div class="modal-content">
          <div class="konten">
          <img src="gambar/ceklis.svg" alt="terkirm" width="96px" height="96px" class="img-responsive rounded mx-auto d-block">

          <p class="konten-1"style="">Pendaftaran Berhasil!</p>
          <p class="konten-2" style="">Akun anda sudah aktif dan siap digunakan.</p>

          <button type="button" class="btn btn-success btn-block btn-lg " data-dismiss="modal" id="ok" >Ok</button>

        </div>
        </div>

    </div>
  </div>


<script type="text/javascript">
$.validate({
  modules : 'location, date, security, sanitize, toggleDisabled',
  disabledFormFilter : '#registration-form',
  onModulesLoaded : function() {

  },
  onError : function($form) {
     alert('Validation of form '+$form.attr('id')+' failed!');
   },
  onSuccess : function($form) {
    console.log("koko");

    var name = $('#name').val();
    var username = $('#username').val();
    var repeat = $('#repeat').val();
    var nominal = $('#nominal').val();
    var token = $('#_token').val();

    $.get("/user-register/save",
    {
        nama: name,
        username: username,
        repeat: repeat,
        token: token,
    },
    function(data){
      $("#myModal").modal();
      $("#ok").click(function(){
        window.location = "http://{{Request::getHost()}}/menu"
      })
});

    return false; // Will stop the submission of the form
      },


});

</script>
@endsection
