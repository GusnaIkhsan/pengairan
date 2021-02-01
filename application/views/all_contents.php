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
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 29px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">HASIL PENCARIAN - <?php echo $search;?> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                                                <?php
                                                    if(count($news) == 0){
                                                        echo "<div class=\"bg-danger\" style=\"padding: 10px; text-align: center;\">Tidak ada konten dengan kata kunci <strong>". $search ."</strong></div>";
                                                    } else {
                                                        foreach($news as $key => $val){
                                                            if($val->type == 'Agenda'){
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
                                                                    <button type="button" class="btn btn-info">Agenda</button>
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
                                                            } else {
                                                ?>                                     
                                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                            <!-- <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_106223549-600x333.jpg'); ?>" width="900" height="500"  alt="" /></a> -->
                                                            <img src="<?php echo base_url('asset/foto_berita/'.$val->gambar); ?>" width="900" height="500"  alt="" />
                                                        </div>
                                                        <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                            <div class="gdlr-core-blog-full-head clearfix">
                                                                <div class="gdlr-core-blog-full-head-right">
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('berita/'.$val->id_berita); ?>" ><?php echo $val->judul; ?></a></h3>
                                                                    <?php 
                                                                        if($val->type == 'Berita'){
                                                                            echo "<button type=\"button\" class=\"btn btn-success\">Berita</button>";
                                                                        } else {
                                                                            echo "<button type=\"button\" class=\"btn btn-primary\">Pengumuman</button>";
                                                                        }
                                                                    ?>
                                                                    
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <?php 
                                                                                $tgl = explode("-", $val->tanggal);
                                                                                echo hari_ini(date('w',strtotime($val->tanggal))).", $tgl[2] ".getBulan((int)$tgl[1])." ".$tgl[0];
                                                                            ?>
                                                                        </span>      
                                                                    </div>                                                                 
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><?php echo $val->username; ?></span></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="gdlr-core-blog-content"><?php echo $val->sub_judul; ?>
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="
                                                                <?php 
                                                                    if($val->type == 'Berita'){
                                                                        echo base_url('berita/'.$val->id_berita); 
                                                                    } else if($val->type == 'Pengumuman'){
                                                                        echo base_url('pengumuman/'.$val->id_berita); 
                                                                    }
                                                                ?>">Selengkapnya</a></div>
                                                        </div>
                                                    </div>
                                                <?php
                                                            }
                                                        }
                                                    }
                                                ?>

                                                <!-- <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_135948689-600x333.jpg'); ?>" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Albert joint research on mobile money in Tanzania</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">2 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>

                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_218235004-600x333.jpg'); ?>" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >A Global MBA for the next generation of business leaders</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Masonry</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">1 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_481869205-600x333.jpg'); ?>" width="900" height="500"  alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Tom comments on voluntary recalls by snack brands</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">1 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_361397258-600x333.jpg'); ?>" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Alexa is interviewed about Twitter&#8217;s valuation</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Masonry</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">3 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_213333985-600x333.jpg'); ?>" width="900" height="500"  alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Kingster Public Safety Survey open through Nov. 30</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">0 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div> -->

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
                                    <!-- <div id="text-5" class="widget widget_text kingster-widget">
                                        <h3 class="kingster-widget-title">Text Widget</h3><span class="clear"></span>
                                        <div class="textwidget">Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Etiam porta sem malesuada.</div>
                                    </div> -->
                                    <!-- <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Recent News</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/shutterstock_135948689-150x150.jpg'); ?>" alt="" width="150" height="150" title="shutterstock_135948689" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">Professor Albert joint research on mobile money in Tanzania</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/shutterstock_218235004-150x150.jpg'); ?>" alt="" width="150" height="150" title="Student" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">A Global MBA for the next generation of business leaders</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/shutterstock_481869205-150x150.jpg'); ?>" alt="" width="150" height="150" title="shutterstock_481869205" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">Professor Tom comments on voluntary recalls by snack brands</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row" style="margin-bottom: 30px">
                                        <div class="col-md-10">
                                            <input type="search" class="form-control rounded" placeholder="Cari Berita ..." aria-label="Search" aria-describedby="search-addon" id="input-search-news" />
                                        </div>
                                        <div class="col-md-2" style="text-align: center; margin-left: -9px">
                                            <button type="button" style="width: 50px; height: 34px;" class="btn btn-primary" id="btn-search-news">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div id="tag_cloud-1" class="widget widget_tag_cloud kingster-widget">
                                        <h3 class="kingster-widget-title">Tag</h3><span class="clear"></span>
                                        
                                        <div class="tagcloud">
                                            <a href="<?php echo base_url('all-news'); ?>" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 12.2pt;">ALL</a>
                                            <?php 
                                            foreach($tags as $key => $val){
                                                if("Pengumuman"!=$val->nama_tag){
                                            ?>
                                                    <a href="<?php echo base_url('tag/'.strtolower($val->nama_tag)); ?>" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 12.2pt;"><?php echo $val->nama_tag; ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    
                                    <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Berita Terbaru</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                        <?php
                                            foreach ($last_news as $key => $value) {     
                                                $tanggalBerita = explode("-", $last_news[$key]->tanggal);                                            
                                        ?>  
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/foto_berita/'.$last_news[$key]->gambar); ?>" alt="" width="150" height="150" title="shutterstock_135948689" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="<?php echo base_url('berita/'.$last_news[$key]->id_berita); ?>"><?php echo $last_news[$key]->judul;?></a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?php echo hari_ini(date('w',strtotime($last_news[$key]->tanggal))).", ".$tanggalBerita[2]." ".getBulan((int)$tanggalBerita[1])." ".$tanggalBerita[0];?></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By <?php echo $val->username; ?></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                                }
                                        ?>
                                            <!-- <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/shutterstock_135948689-150x150.jpg');?>" alt="" width="150" height="150" title="Student" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">A Global MBA for the next generation of business leaders</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/shutterstock_135948689-150x150.jpg');?>" alt="" width="150" height="150" title="shutterstock_481869205" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">Professor Tom comments on voluntary recalls by snack brands</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div id="gdlr-core-recent-portfolio-widget-1" class="widget widget_gdlr-core-recent-portfolio-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Recent Works</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/shutterstock_53600224-150x150.jpg'); ?>" alt="" width="150" height="150" title="shutterstock_53600224" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/rawpixel-577480-unsplash-1-150x150.jpg'); ?>" alt="" width="150" height="150" title="rawpixel-577480-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/pexels-photo-150x150.jpg'); ?>" alt="" width="150" height="150" title="pexels-photo" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/training-train-lime-barbell-39688-150x150.jpg'); ?>" alt="" width="150" height="150" title="training-train-lime-barbell-39688" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/joshua-fuller-368384-unsplash-150x150.jpg'); ?>" alt="" width="150" height="150" title="joshua-fuller-368384-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?php echo base_url('asset/upload/austin-neill-247047-unsplash-150x150.jpg'); ?>" alt="" width="150" height="150" title="austin-neill-247047-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
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