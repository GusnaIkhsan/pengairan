  <a class="toggleMenu" href="#">Menu </a> 
  <div id="hero" class="wrap">
      <?php include "menu-kiri.php"; ?>
    <div id="header">
      <?php include "header-slide.php"; ?>
    </div><div class="clear"></div>
  </div>
  
  <div style='background-image: url(<?php echo base_url(); ?>asset/images/2.jpg)' class="wrap">
    <div id="a_middle">
<script type="text/javascript">
  $(document).ready(function() {

  /* This is basic - uses default settings */
  
  $("a#single_image").fancybox();
  
  /* Using custom settings */
  
  $("a#inline").fancybox({
    'hideOnContentClick': true
  });

  /* Apply fancybox to multiple items */
  
  $("a.group").fancybox({
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600, 
    'speedOut'    : 200, 
    'overlayShow' : false
  });
  $("a[rel=detail]").fancybox({
        'height'      : 270,
        'autoScale'     : false,
        'transitionIn'    : 'elastic',
        'transitionOut'   : 'none',
        'overlayShow'   : false,
        'type'        : 'iframe'
      });
  
});
</script>

    <?php 

      $bottom_menu = $this->db->query("SELECT * FROM group_menu ORDER BY id_group_menu");
      foreach ($bottom_menu->result_array() as $b){
        echo "<div  class='col_42'>
                <h4 style='margin-bottom:0px;color:#ff1000;font-weight:bold;text-shadow: 0 0 2px #000000;text-align:center'>$b[nama_group_menu]</h4>
                    <div class='list-type1'>
                    <ol>";
                    $sub_bottom_menu = $this->db->query("SELECT * FROM group_menu_list where id_group_menu='$b[id_group_menu]' ORDER BY id_group_menu_list");
                    foreach ($sub_bottom_menu->result_array() as $bs){
                      echo "<li><a href='$bs[link]'>$bs[nama]</a></li>";
                    } 
                    echo "</ol>
                    </div>
                </div>";
      }
    ?>
    
    </div>
    <div style='clear:both'></div>
      <div id="event" class="block">
        <div class="event-nav">
            <a href=# id="event-prev">Prev</a>
            <a href=# id="event-next">Next</a>
        </div>
        <?php include "agenda-atas.php"; ?>
        <div class="clear"></div>
      </div>

      <?php include "pmb-atas.php"; ?>
  </div>
  
  <!-- content start -->
  <div id="content-container" class="wrap">
      <?php include "berita-home.php"; ?>
            
    <div id="pengumuman" class="block">
      <?php include "sidebar-pengumuman.php"; ?>
    </div>

    <div id="lowongan" class="block">
      <?php include "sidebar-lowongan.php"; ?>
    </div>
  

  <div id="footer-banner">
    <?php include "banner-footer.php"; ?>
  </div>
  
  <div id="credit">
    <?php include "info-footer.php"; ?>
  </div>
  
<script type="text/javascript">
jQuery(document).ready(function($) {
  $("#rotator").cycle({ 
      fx: 'fade',
      timeout: 3000,
      speed: 1000,
      pause: 1,
      fit: 1
  });
});
</script>
