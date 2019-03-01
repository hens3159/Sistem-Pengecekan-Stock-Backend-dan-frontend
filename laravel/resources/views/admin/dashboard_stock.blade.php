@extends('admin.master_admin_Afterlogin')


@section('title', 'Dashboard Admin')


@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 style="font-weight:bold;">
        Dashboard Stock
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

            <div class="col-lg-5 col-md-5">
            </div>

            <div class="col-lg-2 col-md-2">

            <button type="button" id="upload" class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#uploadModalCenter">Upload Stock</button>

            </div>


            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- /Data table -->
            <table id="example" class="table  table-bordered table-hover" style="width:100%">
                      <thead>
                          <tr>
                              <th>Material</th>
                              <th>Material Description</th>
                              <th>Base Unit of Measure</th>
                              <th>Unrestricted</th>
                              <th>Currency</th>
                              <th>Value Unrestricted</th>
                              <th>Harga/ Satuan</th>

                          </tr>
                      </thead>
                      <tbody>


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

<!-- .modal -->

<!-- /modal upload file-->
<div class="modal fade" id="uploadModalCenter" tabindex="-1" role="dialog" aria-labelledby="uploadModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width:524px;">
      <div class="modal-header" style="border-bottom-width: 0px;">
        <button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="modal-title" id="exampleModalLongTitle" style="text-align:center; font-size:24px; font-weight:700px; color:#707070; padding-top: 10px;">Upload File</p>
      </div>
      <div class="modal-body">
        <form action="{!! route('admin.upload-data') !!}" id="form_upload" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
        <div class="background-upload">
          <div class="file_input">
          <input type="file" name="file" id="file" class="inputfile" data-validation="mime"  data-validation-allowing="jpg"   data-validation-error-msg-mime="You can only upload .xlxs type file" />
          <label for="file">browse your file</label>
          <p style="text-align:center;" id="input_name" class=""></p>
        </div>
        </div>
      </form>
      </div>
      <div class="modal-footer" style="border-top-width: 0px; padding-bottom: 25px;">
      <p style="color:#8D8D8D; font-size:14px; text-align:center;">  The file must be using an available template.<br>Only <span id="klik" style="color:#2ACE85;">XLXS</span> file format allowed</p>
      </div>
    </div>
  </div>
</div>
<!-- /modal upload file-->



<!-- modal after upload -->
<div class="modal fade" id="AfteruploadModalCenter" tabindex="-1" role="dialog" aria-labelledby="uploadModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width: 360px"; role="document">
    <div class="modal-content" style="width:360px;">

      <div class="modal-body">
        <div class="konten">
        <img src="gambar/ceklis.svg" alt="terkirm" width="96px" height="96px" class="img-responsive center-block" style="margin-top: 28px; margin-bottom: 28px;">
        <p class="konten-1"style="text-align:center; color: #333333; font-weight:700;">Upload Berhasil !</p>
        <p class="konten-2" style="text-align:center;font-size: 12px; color: gray;">Stock di dashboard telah berhasil di update.</p>
        <button type="button" class="btn btn-success btn-block btn-lg" data-dismiss="modal" id="ok" style="margin-top: 20px; margin-bottom: 15px;">Ok</button>

      </div>

      </div>
    </div>
  </div>
</div>
<!-- /modal ok after upload -->



<!-- /modal -->



<script>
 $(document).ready(function() {

table =  $('#example').DataTable({
      "lengthChange": false,
      "iDisplayLength": 15,

        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.getdata') !!}',
        columns: [
            { data: 'material', name: 'material' },
            { data: 'material_description', name: 'material_description' },
            { data: 'base_unit', name: 'base_unit' },
            { data: 'unrestricted', name: 'unrestricted' },
            { data: 'currency', name: 'currency' },
            { data: 'value_unrestricted', name: 'value_unrestricted', render: $.fn.dataTable.render.number('.') },
            { data: 'harga', name: 'harga', render: $.fn.dataTable.render.number('.') }
        ]
  });

  $('#cari_data').on( 'keyup', function () {
      table.search( this.value ).draw();
  } );

  $('#example_filter').addClass("hide")


//end of dataTable


//modal js upload
$('input[type="file"]').change(function(e){
         var fileName = e.target.files[0].name;
         var fileUpload = $('input[type="file"]')[0];

        //Validate whether File is valid Excel file.
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/;
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();

                //For Browsers other than IE.
                if (reader.readAsBinaryString) {
                    reader.onload = function (e) {
                    $('#input_name').removeClass("text-red");
                    $('#input_name').addClass("text-black");
                    $('#input_name').html("<b>"+"Please wait your file"+" "+fileName+" "+"is process uploading"+"</b>");
                    $('#form_upload').submit();
                    };
                    reader.readAsBinaryString(fileUpload.files[0]);
                } else {
                    //For IE Browser.
                    reader.onload = function (e) {
                        var data = "";
                        var bytes = new Uint8Array(e.target.result);
                        for (var i = 0; i < bytes.byteLength; i++) {
                            data += String.fromCharCode(bytes[i]);
                        }
                        $('#input_name').removeClass("text-red");
                        $('#input_name').addClass("text-black");
                        $('#input_name').html(fileName);
                        $('#form_upload').submit();

                    };
                    reader.readAsArrayBuffer(fileUpload.files[0]);
                }
            } else {
                $('#input_name').removeClass("text-black");
                $('#input_name').addClass("text-red");
                $('#input_name').html("<b>This browser does not support HTML5. </b>");
            }
        } else {
            $('#input_name').removeClass("text-black");
            $('#input_name').addClass("text-red");
            $('#input_name').html("<b>Please upload a valid (.xlxs) Excel file .</b>");
        }


     });


} );
</script>

@endsection
