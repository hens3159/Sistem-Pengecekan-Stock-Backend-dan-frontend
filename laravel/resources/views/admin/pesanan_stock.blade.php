@extends('admin.master_admin_Afterlogin')

@section('title', 'Pesanan Stock')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 style="font-weight:bold;">
        Pesanan Stock
      </h3>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="padding-bottom: 0px; padding-top: 17px;">
            <div class="row">
              <div class="col-lg-5 col-md-5">
                <div class="input-group">
                  <span class="input-group-addon line-left-form"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control input-lg form-cari" placeholder="Search" id="cari_data" style="border-left-width: 0px; padding-left:0px;">

                </div>
            </div>

            <div class="col-lg-2 col-md-2">
            </div>

            <div class="col-lg-5 col-md-5">

              <div class="calender-group">
              <span class="calender-left"><i class="fa fa-calendar" style="font-size:16px"></i></span>
              <span class="calender-period">Period</span>
              <input type="text" id="demo" class="form-control cinta" name="daterange" style="height: 49px; padding-left: 110px;padding-right: 40px; border-left-width: 1px; border-right-width: 1px"  />
              <span class="calender-right"><i class="fa fa-angle-down" style="font-size:16px"></i></span>
            </div>

            </div>


            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- /Data table -->
           <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Pemesanan</th>
                        <th>Nama Material</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($laporan as $data)
                  <?php
                  $status = $data->comment_status;
                  if($status==0){
                     $status = str_replace($status, 'warning', $status);
                  }else {
                    $status = str_replace($status, 'dua', $status);
                  }


                  $status_data = $data->status_data;
                  if($status_data == 0){
                     $status_data = "btn-success";
                     $status_kalimat = "Proses Pesanan";
                  }else {
                    $status_data = "disabled";
                    $status_kalimat = "Sudah Diproses";
                  }

                  $jumlah = $data->jumlah;
                  $searchString = ',';
                    if(strpos($jumlah, $searchString) !== false ) {
                      $jumlah = str_replace(',','.',$jumlah);
                      $jumlah = number_format((float)$jumlah,2,",",".");
                    }else {
                      $jumlah = number_format((float)$data->jumlah,0,",",".");
                    }

                  ?>

                    <tr class = "{{$status}}">
                      <td>{{date('d-m-Y', strtotime($data->created_at))}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->material}}</td>
                      <td>{{$jumlah}}</td>
                      <td>{{$data->komentar}}</td>
                      <td><button type="button" id="status-{{$data->id}}" class="tombol-status btn {{$status_data}}" data-id="{{$data->id}}"> {{$status_kalimat}}</button></td>

                    </tr>
                    @endforeach


                </tbody>
            </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>

 $(document).ready(function() {
   $(".tombol-status").click(function(){
   var statusData = $(this).attr('data-id')

   $.get("/status-data",
   {
       status: statusData,
       token: token,
   },

   function(data){
     console.log(data)
     $('#status-'+statusData).removeClass('btn-success').addClass("disabled");
     $('#status-'+statusData).html('Sudah Diproses');
});






   });
   //DATATABLE
   //To display datatable without search and page length select, and to still have pagination work, instantiate like so
   var oTable=$('#example').DataTable({
     "lengthChange": false,
     "iDisplayLength": 15,
   	//"sDom":"tp",
   	"pageLength": 15,
   	 //// order table onload
   "order": [[ 0, 'desc' ]],

   // columnDefs: [
   //      { type: 'date-eu', targets: 0,
   //      render: function ( data, type, row ) {
   //           // If display or filter data is requested, format the date
   //           if ( type === 'display' || type === 'filter' ) {
   //               var rowvalue = row["EventDate"];
   //               var rowvalueallday = row["AllDayEvent"];
   //                       if (rowvalueallday == 0) {
   //                        return (moment(data).format("ddd DD/MM/YYYY (HH:mm)"));
   //                       } else {
   //                        return (moment(data).format("DD/MM/YYYY"));
   //                       }
   //           }
   //           // Otherwise the data type requested (`type`) is type detection or
   //           // sorting data, for which we want to use the raw date value, so just return
   //           // that, unaltered
   //           return data;
   //           }
   //      }
   //    ],


   	});
   //DATE RANGE
   //set global vars that are set by daterange picker, to be used by datatable
   var startdate;
   var enddate;
   //instantiate datepicker and choose your format of the dates
   $('#demo').daterangepicker({
       "opens": "right",
   	format: 'DD/MM/YYYY'

   },
   function(start,end,label) {
   // Parse it to a moment
   var s = moment(start.toISOString());
   var e = moment(end.toISOString());
   startdate = s.format("YYYY-MM-DD");
   enddate = e.format("YYYY-MM-DD");
   });
   //Filter the datatable on the datepicker apply event
   $('#demo').on('apply.daterangepicker', function(ev, picker) {
   startdate=picker.startDate.format('YYYY-MM-DD');
   enddate=picker.endDate.format('YYYY-MM-DD');
   oTable.draw();

   });


   $.fn.dataTable.ext.search.push(
       function( settings, data, dataIndex ) {
           var min = new Date (startdate).getTime();
           var max = new Date (enddate).getTime();
           var date = data[0];
           var newdate = date.split("-").reverse().join("-");
           var time = new Date(newdate).getTime()


           if (typeof time == 'undefined') {
                time = new Date(Data[0]).getTime();
              }

              if (min && !isNaN(min)) {
                if (time < min) {
                  return false;
                }
              }

              if (max && !isNaN(max)) {
                if (time > max) {
                  return false;
                }
              }

           return true;
   });


   $('#example_filter').addClass("hide")

   $('#cari_data').on( 'keyup', function () {
       oTable.columns(2).search( this.value ).draw();
   } );



load_unseen_notification(view = 'no')





} );




</script>
@endsection
