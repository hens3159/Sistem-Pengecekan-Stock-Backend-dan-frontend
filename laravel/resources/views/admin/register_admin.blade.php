@extends('admin.master_admin_login')

@section('title', 'Register')

@section('content')
iv class="container-fluid">
      <div class="row" >

        <div class="col-12 col-xsl-6  col-lg-6 col-sm-12 col-md-12 side-left" >
          <div class="d-flex flex-column  justify-content-center" style="height:668px;">
            <h4 class=" h4 text-center text-white" style="margin-bottom: 32px">Daftar </h4>
                 <img src="gambar/icon_app.svg" class="mx-auto d-block img-fluid" width="224" height="224" alt="logo">
                 <h5 class="text-center text-white" style="margin-top:42px;">Portable Stock</h5>

          <footer class="login-register" style="padding-bottom:-500px; margin-bottom: -80px; margin-top:50px;">
              <p class="text-white">PT Triputra Agro Persada. All Right Reserved</p>
          </footer>
        </div>

      </div>




        <div class="col-12 col-xsl-6 col-md-12 col-lg-6 col-sm-12 side-right" style="background:white;">

          <div class="d-flex flex-column  justify-content-center" style="height:668px;">


            <div class="title-register">
            <p class="title-register-1">Silakan isi data-data dibawah ini</p>
            <p class="title-register-2">Pastikan anda mengisi data dengan benar</p>
          </div>


          <div class="container" style="padding-right:16px; padding-left:16px;">
            <div class="row justify-content-center row-center">

              <form action="{!! route('admin.register-data') !!}" class="form-register" id="registration-form" method="post">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">

                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama"
                  data-sanitize="trim"
                  data-validation="required"
                  data-validation-error-msg-required="Wajib diisi">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="username" placeholder="Buat Username" name="username"
                  data-sanitize="trim"
                  data-validation="required "
                  data-validation-url="http://sawit.oo/ajax/validasi.php"
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
                data-sanitize="trim"
                data-validation-error-msg-required="Wajib diisi"
                data-validation-confirm="password"  data-validation-error-msg="password tidak sama. Silahkan masukan password yang sama">
              </div>

              <div class="form-group" style="padding: 88px 14px 25px 14px;">
                <input type="submit" class="btn btn-success text-white btn-block" id="myBtn" value="Daftarkan">
             </div>
              </form>
            </div>
        </div>
</div>

</div>
</div>




<script type="text/javascript">

$.validate({
  modules : 'location, date, security, sanitize, toggleDisabled ',
  disabledFormFilter : '#registration-form',
  onModulesLoaded : function() {
  },

});
</script>

@endsection
