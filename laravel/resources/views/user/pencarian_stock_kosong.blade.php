@extends('user.master_user')

@section('title', 'Cek Stock Barang')


@section('content')



    <nav class="container-fluid" style="background:#31DB93; height:56px;">

  <div class="row align-items-center navbar-mobile " id="form_search" >
<div class="col-12 "  style="padding:0 16px; height:42px;">

  <form action="/pencarian_stock" method="get" id="form_submit">

<div class="input-group mb-3 " >
  <div class="input-group-prepend">
    <button class="btn form-stock" type="button" id="button-addon1">
      <i class="fa fa-arrow-left" id="back_menu" style="font-size:15px; background:none; color:#AAAAAA;"></i></button>
  </div>

  <input type="text" name="cari" id="cari" class="form-control form-stock" placeholder="Cari Material"
  aria-label="Username" aria-describedby="basic-addon1" value="{{$cari_data}}" >
  <input type="hidden" value="{{csrf_token()}}" id="token"/>

  <div class="input-group-append">

    <button class="btn form-stock" type="button" id="button-addon2">
      <i class="fa fa-search" id="search" style="font-size:15px; background:none; color:#AAAAAA;;"></i></button>
  </div>


</div>
</form>
</div>
</div>


</nav>


<content>


    <div class="container">
      <div class="row  pencarian">
        <div class="col-12 col-md-12 col-sm-12">
        <img src="gambar/none_search.svg" class="img-responsive mx-auto d-block" width="160" height="160" alt="logo">
      </div>

        <p class="text_pencarian">Hasil pencarian tidak ditemukan </p>
        <p class="kata_kunci" >Pastikan kata kunci anda sudah tepat</p>

      </div>

  </content>


<script type="text/javascript">

//loading data
$('ul.pagination').hide();
$(function() {
    $('#infiniteScroll').jscroll({
        autoTrigger: true,
        loadingHtml: '<img class="mx-auto d-block " src="/gambar/loading64.gif" alt="Loading..." />',
        padding: 0,
        nextSelector: '.pagination li.active + li a',
        contentSelector: '#infiniteScroll',
        callback: function() {
            $('ul.pagination').remove();
        }
    });
});


//enter function from keyboard, submit
$(function() {
        $('#form_submit').keypress(function(e) { //use form id
            if (e.which == 13) {
                $('#form_submit').submit();  // use form id
                return false;
}
        });
    });



    //menu kembali
        $("#back_menu").click(function(){
          window.location = "/cek-stock"
        })



//form search change icon and search pencarian
function checkEmpty(el){
  if(el.val() === ''){
    $("#search").removeClass('fa-times')
    $("#search").addClass('fa-search')
        // $("#button-addon2").click(function() {
        //   console.log("koko")
        // });

  } else {
    $("#search").removeClass('fa-search')
    $("#search").addClass('fa-times')

    $("#button-addon2").click(function() {
     $("#cari").val("")
     $("#search").removeClass('fa-times')
     $("#search").addClass('fa-search')
    });

  }
}

// listen for when the input/select change
$('input, select').on('change keyup',function(){
  checkEmpty($(this));
});

// loop through the elements when the page loads
$('input, select').each(function(){
  checkEmpty($(this));
});




</script>


@endsection
