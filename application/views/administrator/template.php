<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WELCOME ADMINISTRATOR</title>
  <meta name="author" content="gusnavanila">
  <link rel="shortcut icon" href="<?php echo base_url()?>asset/images/favicon.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/ionicons.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/select2.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style type="text/css">
    .files {
      position: absolute;
      z-index: 2;
      top: 0;
      left: 0;
      filter: alpha(opacity=0);
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      opacity: 0;
      background-color: transparent;
      color: transparent;
    }
  </style>
  <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/plugins/jQuery/jquery-1.12.3.min.js">
  </script>
  <script src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <?php include "main-header.php"; ?>
    </header>

    <aside class="main-sidebar">
      <?php include "menu-admin.php"; ?>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <h1> Dashboard <small>Control panel </small> </h1>
      </section>

      <section class="content">
        <?php echo $contents; ?>
      </section>
      <div style='clear:both'></div>
    </div><!-- /.content-wrapper -->
    <div style="text-align: center;" class="modal" id="spinner" tabindex="1" role="dialog" aria-hidden="true"
      data-backdrop="static">
      <img tabindex="1" style="margin: 25%;" src="<?php echo base_url('asset/images/ajax-loader.gif'); ?>"
        alt="spinner">
    </div>
    <footer class="main-footer">
      <?php include "footer.php"; ?>
    </footer>
  </div><!-- ./wrapper -->
  <!-- jQuery 2.1.4 -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?php echo base_url(); ?>asset/admin/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>asset/admin/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js">
  </script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>asset/admin/plugins/fastclick/fastclick.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>asset/admin/dist/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>asset/admin/dist/js/app.min.js"></script>

  <script>
    $('#rangepicker').daterangepicker();
    $('.datepicker').datepicker();
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <script>
    // CKEDITOR.replace('editor1' ,{
    //   filebrowserImageBrowseUrl : '<?php echo base_url('asset/kcfinder'); ?>'
    // });
    CKEDITOR.on('instanceReady', function (ev) {
      ev.editor.dataProcessor.htmlFilter.addRules({
        elements: {
          img: function (el) {
            // Add bootstrap "img-responsive" class to each inserted image
            el.addClass('img-responsive');

            // Remove inline "height" and "width" styles and
            // replace them with their attribute counterparts.
            // This ensures that the 'img-responsive' class works
            var style = el.attributes.style;

            if (style) {
              // Get the width from the style.
              var match = /(?:^|\s)width\s*:\s*(\d+)px/i.exec(style),
                width = match && match[1];

              // Get the height from the style.
              match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec(style);
              var height = match && match[1];

              // Replace the width
              if (width) {
                el.attributes.style = el.attributes.style.replace(/(?:^|\s)width\s*:\s*(\d+)px;?/i, '');
                el.attributes.width = width;
              }

              // Replace the height
              if (height) {
                el.attributes.style = el.attributes.style.replace(/(?:^|\s)height\s*:\s*(\d+)px;?/i, '');
                el.attributes.height = height;
              }
            }

            // Remove the style tag if it is empty
            if (!el.attributes.style)
              delete el.attributes.style;
          }
        }
      });
    });
  </script>
  <script type="text/javascript">
    var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function () {
      return this.href == url;
    }).parent().addClass('active');

    // for treeview
    $('ul.treeview-menu a').filter(function () {
      return this.href == url;
    }).closest('.treeview').addClass('active');

    // function spinnerClick(){
    //   $('#spinner').modal('show');
    // }
  </script>
</body>

</html>