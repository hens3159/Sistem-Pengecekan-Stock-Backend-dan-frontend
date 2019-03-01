@extends('user.master_user')

@section('title', 'Cek Stock Barang')

@section('css')
<style>
html {
  overflow-y:scroll;
}
  @media screen and (max-width: 1024px) {
      html, body {
          z-index: 0 !important;
          overflow: scroll !important;
      }
  }

</style>
@endsection

@section('content')



    <nav class="container-fluid" style="background:#31DB93; position:fixed; height:56px; overflow: hidden; top: 0; z-index: 1 !important;">

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

<div class="container" style="padding:0 8px;   margin-top: 65px;">
<div class="">

    <div class="">
      <div id="infiniteScroll">
    @foreach($excel_data as $excel)
      <div class="card card-list">
        <div class="card-body">
          <p class="card-title" style="">{{$excel->material_description}}</p>
          <p class="card-text" style="">Material: {{$excel->material}}</p>
          <table class="table table-borderless" style="margin:0px;">
              <tbody>
                <tr>
                  <td><li style="list-style-position: inside;">Unrestricted</li></td>
                  <td>:</td>
                  <td>{{$excel->unrestricted}} {{$excel->base_unit}}</td>
                </tr>
                <tr>
                  <td><li style="list-style-position: inside;">Value Unrestrictedry</li></td>
                  <td>:</td>
                  <td>{{$excel->currency}} {{number_format($excel->value_unrestricted,0,",",".")}}</td>
                </tr>
                <tr>
                  <td style="width:50%;"><li style="list-style-position: inside;">Harga Satuan</li></td>
                  <td>:</td>
                  <td>{{$excel->currency}} {{number_format($excel->harga,0,",",".")}}</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
          @endforeach
          {{ $excel_data->links() }}


        </div>
      </div>
    </div>




</div>
</div>

</content>

<script type="text/javascript">

$('ul.pagination').hide();

//loading data

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
