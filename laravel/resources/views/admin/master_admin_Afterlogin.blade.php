<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



<!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
   <link rel="stylesheet" href="css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/dist/css/All-skins.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins-->
  <link rel="stylesheet" href="css/styleAfterLogin.css">

  <link rel="stylesheet" href="css/bower_components/daterange/daterangepicker.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Javascript-->

<!-- jQuery 3 -->
<script src="css/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
 <script src="css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="css/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- <script src="http://cdn.datatables.net/plug-ins/1.10.19/dataRender/datetime.js"></script>

<!-- SlimScroll -->
<script src="css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="css/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="css/dist/js/demo.js"></script>
<!-- Popper -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="css/bower_components/daterange/moment.min.js"></script>
<script type="text/javascript" src="css/bower_components/daterange/daterangepicker.js"></script>





  <!-- Google Font -->
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini" style="margin-top:9px; margin-bottom:9px;">
            <img src="gambar/icon.svg" class="img-responsive center-block" width="32" height="32" alt="logo">
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Portable Stock</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span style="font-size:12px; padding-left:10px;">PT Triputra Agro Persada. All Right Reserved</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:40px;">
                  <span class="hidden-xs"><span style="margin-right:10px;"><b>{{ Auth::user()->name }}</b></span> <i class="fa fa-angle-down" style="font-size:14px; font-weight:bold;"></i></span>
                </a>
                <ul class="dropdown-menu" style="  width: 182px;">
                  <!-- User image -->
                  <li class="user-header" style="height: 104px; background-color: #31db93; color:white;">
                    <p>
                      {{ Auth::user()->name }}<br><br>
                      <small>(Admin)</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-lg-2">
                      </div>
                      <div class="col-lg-8" style=" padding-left: 0px; padding-right: 0px;">
                        <a href="{!! route('admin.logout') !!}" class="btn btn-default btn-flat center-block">Sign out</a>
                      </div>
                      <div class="col-lg-2">
                      </div>

                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footr">

                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- <div class="user-panel" style="padding-top: 20px; padding-bottom: 10px; padding-left: 15px;">
            <p style="font-size: 16px; font-weight:bold; color:white;">Selamat Datang</p>
              <p style="font-size: 16px; color:white;">{{ Auth::user()->name }}</p>
          </div> -->

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree" style="margin-top: 24px;">
            <li><a href="/admin-dashboard"><i class="fa fa-list-ul"></i> <span>Dashboard Stock</span></a></li>
            <li id="notif-pesan"><a href="/admin-pesanan-stock"><i class="fas fa-clipboard-list" style="margin-right:8px;"></i> <span>Pesanan Stock</span>   <span class="pull-right-container">
            <span class="pull-right" id="count" style="background:#31DB93; padding:0 8px; color:white; border-radius:4px;"></span></span></a></li>

          </ul>
        </section>
        <!-- /.sidebar -->

        <form action=""  method="GET" >
          <input type="hidden" name="token" id="token" value="{{ csrf_token()}}">
        </form>



<script type="text/javascript">

function load_unseen_notification(view = '')
{
token = $("#token").val()

$.get("/notif",
{
    kosong:view,
    token: token
},
function(data){

if(data > 0)
{
$('#count').html(data);
}
});

}

load_unseen_notification();

setInterval(function(){
  load_unseen_notification();;
 }, 5000);



</script>


      </aside>
 @yield('content')
  </body>
  </html>
