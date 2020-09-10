<!DOCTYPE html>
<html lang="id-ID">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title><?php echo $title; ?></title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no'/>
  <meta name="robots" content="index, follow">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="Frelance">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">
  
  <link rel="shortcut icon" href="<?php echo base_url()?>asset/images/ico.ico" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/lightbox-plus-jquery.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/agenda.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/lowongan.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/fancybox/jquery.fancybox.css" media="screen" />
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/plugins/jQuery/jquery-1.12.3.min.js"></script>
  

  
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/597780725dfc8255d623ee13/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/functions.min.js"></script>

</head>

<body class="home blog" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
<div class="loader"></div>
      <?php include "menu-atas.php"; ?>
    <div style="clear:both"></div>
      <div style='margin-bottom:-20px;' id="head" class="wrap">  
          <a href="index.php"><img src="<?php echo base_url(); ?>asset/logo/logo.png" id="logo"></a>
          <img style="float:right;margin-bottom:-20px" src="<?php echo base_url(); ?>asset/logo/unsika.png" id="logo" height="50px">
      </div>
    <div style="clear:both"></div>

    <?php echo $contents; ?>
    <?php $this->model_main->kunjungan(); ?>


<script type="text/javascript" src="<?php echo base_url(); ?>asset/fancybox/jquery.fancybox.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>asset/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>



</body>
</html>