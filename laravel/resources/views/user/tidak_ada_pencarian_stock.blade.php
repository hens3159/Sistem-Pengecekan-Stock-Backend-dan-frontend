@extends('user.master_user')

@section('title', 'Cek Stock Barang')


@section('content')


<nav class="container-fluid" style="background:#31DB93; height:56px;">

  <div class="row align-items-center navbar-mobile" id="menu_biasa" >

  <div class="col-2"  style="padding-left:16px;">
    <a href="http://{{Request::getHost()}}/menu" style="font-size:20px;"><i class="fa fa-arrow-left" style="font-size:20px; background:none; color:white;"></i></a>
  </div>
  <div class="col-8">
  <p class="text-center">Cek Stock</p>
  </div>

  <div class="col-2" style="padding-left: 25px; padding-right: 16px;">
    <i class="fa fa-search" id="form_cari" style="font-size:20px; float:right; background:none; color:white;   cursor: pointer;"></i>
    <span style=" content: ; clear: both; display: table;"> </span>
   </div>

</div>



    <!-- form pencarian -->

<div class="row align-items-center navbar-mobile hide" id="form_search" >
<div class="col-12 "  style="padding:0 16px; height:42px;">

<form action="/pencarian_stock" method="get" id="form_submit">
<div class="input-group mb-3 " >
<div class="input-group-prepend">
<button class="btn form-stock" type="button" id="button-addon1">
  <i class="fa fa-arrow-left" id="back_menu" style="font-size:15px; background:none; color:#AAAAAA;"></i></button>
</div>

<input type="text" name="cari" id="cari" class="form-control form-stock" placeholder="Cari Material" aria-label="Username" aria-describedby="basic-addon1" >
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
        <img src="gambar/kosong.svg" class="img-responsive mx-auto d-block" width="160" height="160" alt="logo">
      </div>

        <p class="text_pencarian">Tidak ada stock material saat ini</p>
        <p class="kata_kunci" >Stock material ter-update akan muncul disini.</p>

      </div>

  </content>


<script type="text/javascript">



//enter function from keyboard, submit
$(function() {
        $('#form_submit').keypress(function(e) { //use form id
            if (e.which == 13) {
                $('#form_submit').submit();  // use form id
                return false;
}
        });
    });





//change menu to form search
$("#form_cari").click(function(){
 $("#menu_biasa").addClass("hide")
 $("#form_search").removeClass("hide")
})


$("#button-addon1").click(function(){
 $("#form_search").addClass("hide")
 $("#menu_biasa").removeClass("hide")
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
     $("#search").removeClass('fa-close')
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
