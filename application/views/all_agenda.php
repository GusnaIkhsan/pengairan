<!DOCTYPE html>
<html lang="en-US" class="no-js">
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- header mobile navigation -->
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <!-- header navigation -->
            <!-- <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <div class="kingster-page-caption">Caption aligned here</div>
                        <h1 class="kingster-page-title">Blog Full Right Sidebar With Frame</h1></div>
                </div>
            </div> -->
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <a href="<?php echo base_url('all-agenda'); ?>">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 29px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">AGENDA</h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                <?php
                                                    if(count($list_agenda) == 0){
                                                        echo "<div class=\"bg-danger\" style=\"padding: 10px; text-align: center;\">Tidak ada agenda dengan kata kunci <strong>". $search ."</strong></div>";
                                                    } else {
                                                        foreach($list_agenda as $key => $val){
                                                ?>                                                                                    
                                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <!-- <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_106223549-600x333.jpg'); ?>" width="900" height="500"  alt="" /></a> -->
                                                            <img src="<?php echo base_url('asset/foto_agenda/'.$val->gambar); ?>" width="900" height="500"  alt="" />
                                                        </div>
                                                        <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                            <div class="gdlr-core-blog-full-head clearfix">
                                                                <div class="gdlr-core-blog-full-head-right">
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('agenda/'.$val->id_agenda); ?>" ><?php echo $val->tema; ?></a></h3>
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <?php 
                                                                                $tgl = explode("-", $val->tgl_posting);
                                                                                echo hari_ini(date('w',strtotime($val->tgl_posting))).", $tgl[2] ".getBulan((int)$tgl[1])." ".$tgl[0];
                                                                            ?>
                                                                        </span>      
                                                                    </div>                                                                 
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><?php echo $val->username; ?></span></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="gdlr-core-blog-content"><?php echo $val->tema; ?>
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?php echo base_url('agenda/'.$val->id_agenda); ?>">Selengkapnya</a></div>
                                                        </div>
                                                    </div>
                                                <?php
                                                        }
                                                    }
                                                ?>                                                
                                            </div>
                                            <!-- <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr"><span aria-current='page' class='page-numbers current'>1</span> <a class='page-numbers' href='page/2/index.html'>2</a> <a class='page-numbers' href='page/3/index.html'>3</a>
                                                <a class="next page-numbers" href="page/2/index.html"></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col-md-10">
                                            <input type="search" class="form-control rounded" placeholder="Cari Agenda ..." aria-label="Search" aria-describedby="search-addon" id="input-search-agenda" />
                                        </div>
                                        <div class="col-md-2" style="text-align: center; margin-left: -9px">
                                            <button type="button" style="width: 50px; height: 34px;" class="btn btn-primary" id="btn-search-agenda">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Agenda Terbaru</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                        <?php
                                            foreach ($last_agenda as $key => $value) {     
                                                $tanggalAgenda = explode("-", $last_agenda[$key]->tgl_posting);                                            
                                        ?>  
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/foto_agenda/'.$last_agenda[$key]->gambar); ?>" alt="" width="150" height="150" title="shutterstock_135948689" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="<?php echo base_url('berita/'.$last_agenda[$key]->id_agenda); ?>"><?php echo $last_agenda[$key]->tema;?></a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?php echo hari_ini(date('w',strtotime($last_agenda[$key]->tgl_posting))).", ".$tanggalAgenda[2]." ".getBulan((int)$tanggalAgenda[1])." ".$tanggalAgenda[0];?></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By <?php echo $last_agenda[$key]->username; ?></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                                }
                                        ?>                                            
                                        </div>
                                    </div>
                                    <!-- <div id="tag_cloud-1" class="widget widget_tag_cloud kingster-widget">
                                        <h3 class="kingster-widget-title">Tag</h3><span class="clear"></span>
                                        
                                        <div class="tagcloud">
                                            <?php 
                                            foreach($tags as $key => $val){
                                            ?>
                                            <a href="#" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 12.2pt;"><?php echo $val->nama_tag; ?></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>