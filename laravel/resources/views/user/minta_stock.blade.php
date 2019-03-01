@extends('user.master_user')

@section('title', 'Minta Stock Barang')

@section('content')
<!-- Navbar -->
<nav class="container-fluid" style="background:#31DB93">

  <div class="row align-items-center navbar-mobile">
  <div class="col-2" style="padding-left:16px;">
    <a href="http://{{Request::getHost()}}/menu" style="font-size:20px;"><i class="fa fa-arrow-left" style="font-size:20px; background:none; color:white;"></i></a>
  </div>
  <div class="col-8">
  <p class="text-center">Minta Stock</p>
  </div>
</div>

</nav>

<content>

<div class="container" style="padding-right:16px; padding-left:16px;">
<div class="row">
<div class="col-md-12 col-12 col-sm-12 stock">
<p style="font-size: 12px;"> Permintaan Stock </p>

    <form action="/minta-stock/kirim" class="form-stock" method="get" id="stock-form">
      <div class="form-group">
        <input type="text" class="form-control" id="nama" placeholder="Nama Material" name="nama"
        data-validation="required"  data-validation-error-msg-required="Wajib diisi">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah"
        data-validation-error-msg-required="Wajib diisi"
        data-validation-error-msg-number="Harus dalam bentuk angka"
        data-validation="required number">
      </div>

      <div class="form-group">
        <label for="comment" style="font-size:12px;">Keterangan:</label>
        <textarea class="form-control" rows="5" id="komen" placeholder="Tulis Keterangan (bila ada)" name="komen"></textarea>
     </div>


     <div class="form-group" style="padding: 65px 14px 0 14px;">
       <input type="submit" id="myBtn" class="btn btn-success text-white btn-block" value="Kirim">
    </div>

    </form>


</div>
</div>
</div>
</content>


<!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class=" modal-dialog" role="document">

      <div class="modal-content">
          <div class="konten">
          <img src="gambar/ceklis.svg" alt="terkirm" width="96px" height="96px" class="img-responsive rounded mx-auto d-block">

          <p class="konten-1"style="">Permintaan Stock Berhasil Dikirim</p>
          <p class="konten-2" style="">Permintaan akan diterima dan diproses oleh admin</p>

          <button type="submit" class="btn btn-success btn-block btn-lg" data-dismiss="modal" id="ok">Ok</button>
          <input type="hidden" value="{{csrf_token()}}" id="token"/>

        </div>
        </div>

    </div>
  </div>


  <div class="modal fade" id="myModl-gagal">
    <div class=" modal-dialog" role="document">

      <div class="modal-content">
          <div class="konten">
          <img src="gambar/error.png" alt="terkirm" width="96px" height="96px" class="img-responsive rounded mx-auto d-block">

          <p class="konten-1"style="">Permintaan Stock Gagal Dikirim</p>
          <p class="konten-2" style="">Mohon Ulangi Kembali</p>

          <button type="submit" class="btn btn-success btn-block btn-lg" data-dismiss="modal">Ok</button>

        </div>
        </div>

    </div>
  </div>



<script type="text/javascript">



$.validate({
  modules : 'location, date, security, toggleDisabled ',
  disabledFormFilter : '#stock-form',
  onModulesLoaded : function() {
 // $("input[type=submit]").attr("disabled", "disabled");
  },
  onError : function($form) {
    $("#myModl-gagal").modal();

     // alert('Validation of form '+$form.attr('id')+' failed!');
   },
 onSuccess : function($form) {

   var nama = $('#nama').val();
   var jumlah = $('#jumlah').val();
   var komen = $('#komen').val();
   var token = $('#token').val();

     $.get("/minta-stock/kirim",
     {
         nama: nama,
         komen: komen,
         jumlah: jumlah,
         token: token
     },
     function(data){
     console.log("berhasil")
     $("#nama").val("")
     $("#jumlah").val("")
     $("#komen").val("")

   });
   $("#myModal").modal();
      return false;
    },
});

</script>




@endsection
