        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('asset/foto_user/').'/'.$_SESSION["foto"]; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> 
              <?php              
                echo $_SESSION["username"];
              ?>
              </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li>
            <li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <!-- <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Menu Utama</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/identitaswebsite"><i class="fa fa-circle-o"></i> Identitas Website</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menuwebsite"><i class="fa fa-circle-o"></i> Menu Website</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menugroup"><i class="fa fa-circle-o"></i> Menu Group</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/menugrouplist"><i class="fa fa-circle-o"></i> Menu Group List</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/halamanbaru"><i class="fa fa-circle-o"></i> Halaman Baru</a></li>
              </ul>
            </li> -->
            <?php
              if("superadmin"==$_SESSION["level"]){
            ?>
              <li class="treeview">
                <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Master Data</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <!-- <li><a href='<?php echo base_url(); ?>administrator/fakultas'><i class='fa fa-circle-o'></i> Fakultas</a></li> -->
                  <li><a href='<?php echo base_url(); ?>administrator/prodi'><i class='fa fa-circle-o'></i> Program Studi</a></li>
                  <li><a href='<?php echo base_url(); ?>dosen'><i class='fa fa-circle-o'></i> Dosen</a></li>
                  <li><a href='<?php echo base_url(); ?>staff'><i class='fa fa-circle-o'></i> Staff Kependidikan</a></li>
                  <!-- <li><a href='<?php echo base_url(); ?>administrator/mahasiswa'><i class='fa fa-circle-o'></i> Mahasiswa</a></li> -->
                </ul>
              </li>
            <?php
              }
            ?>
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Berita</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/listberita"><i class="fa fa-circle-o"></i> List Berita</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/kategoriberita"><i class="fa fa-circle-o"></i> Kategori Berita</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/tagberita"><i class="fa fa-circle-o"></i> Tag Berita</a></li>
              </ul>
            </li>
            
            <!-- <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-picture"></i> <span>Album</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href='<?php echo base_url(); ?>administrator/album'><i class='fa fa-circle-o'></i> Album</a></li>
                <li><a href='<?php echo base_url(); ?>administrator/gallery'><i class='fa fa-circle-o'></i> Galeri</a></li>
              </ul>
            </li> -->
            <li class="treeview">
              <a href="<?php echo base_url(); ?>administrator/pengumuman"><i class="fa fa-bullhorn"></i> <span>Pengumuman</span><i class="pull-right"></i></a>             
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>administrator/agenda"><i class="glyphicon glyphicon-pushpin"></i> <span>Agenda</span><i class="pull-right"></i></a>
              <!-- <ul class="treeview-menu"> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/logowebsite"><i class="fa fa-circle-o"></i> Logo Website</a></li> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/lowker"><i class="fa fa-circle-o"></i> Info Lowker</a></li> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/download"><i class="fa fa-circle-o"></i> File Download</a></li> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/agenda"><i class="fa fa-circle-o"></i> List Agenda</a></li> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/linkterkait"><i class="fa fa-circle-o"></i> Link Terkait</a></li> -->
                <!-- <li><a href="<?php echo base_url(); ?>administrator/pesanmasuk"><i class="fa fa-circle-o"></i> Pesan Masuk</a></li> -->
              <!-- </ul> -->
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-object-align-left"></i> <span>Manajemen Menu</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/menuwebsite"><i class="fa fa-circle-o"></i> List Menu</a></li>
                <li><a href="<?php echo base_url(); ?>administrator/halamanbaru"><i class="fa fa-circle-o"></i> List Halaman</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-play"></i> <span>Modul Media</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <!-- <li><a href='<?php echo base_url(); ?>administrator/playlist'><i class='fa fa-circle-o'></i> Playlist Video</a></li> -->
                <li><a href='<?php echo base_url(); ?>administrator/video'><i class='fa fa-circle-o'></i> Video</a></li>
                <li><a href='<?php echo base_url(); ?>administrator/foto'><i class='fa fa-circle-o'></i> Foto</a></li>
                <li><a href='<?php echo base_url(); ?>administrator/file'><i class='fa fa-circle-o'></i> File</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url(); ?>administrator/edit_info_grafis"><i class="glyphicon glyphicon-stats"></i> <span>Info Grafis</span><i class="pull-right"></i></a>             
            </li>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-cog"></i> <span>Modul Users</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>administrator/manajemenuser"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
              </ul>
            </li>
          
            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>