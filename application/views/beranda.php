<!DOCTYPE html>
<html lang="en-US" class="no-js">
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- header mobile navigation -->
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <!-- header navigation -->
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>
                                                    <?php
                                                        foreach ($headline as $key => $value) {                                                      
                                                            if(0==$key){
                                                    ?> 
                                                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" alt="" title="slider-1-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <!-- <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="38" data-y="center" data-voffset="-146" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;"><?php echo $headline[$key]->judul; ?></div>                                                         -->
                                                        <!-- <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Pengairan Brawijaya</div> -->
                                                        <a href="<?php echo base_url('berita/'.$headline[$key]->id_berita); ?>">
                                                            <div class="tp-caption rev-btn rev-hiddenicon" id="slide-3-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Selengkapnya</div>
                                                        </a>
                                                    </li>

                                                    <?php
                                                        }elseif(1==$key){
                                                    ?>

                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" alt="" title="slider-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="36" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;"><?php echo $headline[$key]->judul; ?></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Pengairan Brawijaya</div>
                                                        <a href="<?php echo base_url('berita/'.$headline[$key]->id_berita); ?>">
                                                            <div class="tp-caption rev-btn rev-hiddenicon" id="slide-3-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Selengkapnya</div>
                                                        </a>
                                                    </li>   

                                                    <?php
                                                        }else{
                                                    ?>

                                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="<?php echo base_url('asset/foto_berita/'.$headline[$key]->gambar); ?>" alt="" title="slider-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="36" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;"><?php echo $headline[$key]->judul; ?></div>
                                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">Pengairan Brawijaya</div>
                                                        <a href="<?php echo base_url('berita/'.$headline[$key]->id_berita); ?>">
                                                            <div class="tp-caption rev-btn rev-hiddenicon" id="slide-3-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Selengkapnya</div>
                                                        </a>
                                                    </li>
                                                    
                                                    <?php  
                                                            }
                                                        }
                                                    ?>
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-wrapper  hp1-col-services"  data-skin="Blue Title" id="gdlr-core-wrapper-1">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" id="div_1dd7_0">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_1">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/trophy.png'); ?>" alt="" width="41" height="41" title="icon-4" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">Prestasi</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Prestasi & Penghargaan</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-1">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_4">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_5">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/icon-2.png'); ?>" alt="" width="44" height="40" title="icon-2" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_1">Tracer Study</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_6">Record Alumni</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-2">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_7">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_8">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/clipboard.png'); ?>" alt="" width="44" height="39" title="icon-3" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_2">Program Kerja</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_9">Renstra & Program Kerja</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-3">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_10">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_2">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/icon-1.png'); ?>" alt="" width="40" height="40" title="icon-1" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_0">SOP</h3>
                                                                <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_3">Peraturan</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <br><br><br>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 37px ;">
                                            <div class="gdlr-core-block-item-title-inner clearfix">
                                                <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">Berita terbaru</h3>
                                                <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-color: #dcdcdc ;border-bottom-width: 2px ;"></div>
                                            </div><a class="gdlr-core-block-item-read-more" href="<?php echo base_url('all-news'); ?>" target="_self" style="color: #3db166 ;">Selengkapnya</a></div>
                                            <!-- </div><a class="gdlr-core-block-item-read-more" href="#" target="_self" style="color: #3db166 ;">Selengkapnya</a></div> -->
                                        <div class="gdlr-core-event-item-holder clearfix">
                                            <?php
                                                foreach ($news as $key => $value) {                                                      
                                                    if(0==$key){
                                            ?>  
                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20 gdlr-core-column-first  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('asset/foto_berita/'.$news[$key]->gambar); ?>" width="900" height="500"  alt="" /></a>
                                                </div>                                                    
                                                </span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('berita/'.$news[$key]->id_berita); ?>" ><?php echo $news[$key]->judul;?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <p style="color: green;">
                                                            <?php
                                                              $exp = explode("<p>", $news[$key]->isi_berita);
                                                              $lengthStr = strlen($news[$key]->isi_berita);                                                      
                                                              $txt = substr($exp[1],0,100);
                                                              echo $txt.' . . .';
                                                            ?>
                                                        </p>                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                    }elseif(1==$key){
                                            ?>

                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('asset/foto_berita/'.$news[$key]->gambar); ?>" width="900" height="500" alt="" /></a>
                                                </div>                                                   
                                                </span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('berita/'.$news[$key]->id_berita); ?>" ><?php echo $news[$key]->judul;?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <p style="color: green;">
                                                        <?php
                                                              $exp = explode("<p>", $news[$key]->isi_berita);
                                                              $lengthStr = strlen($news[$key]->isi_berita);                                                      
                                                              $txt = substr($exp[1],0,100);
                                                              echo $txt.' . . .';
                                                            ?>
                                                        </p>                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                    }else{
                                            ?>   

                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('asset/foto_berita/'.$news[$key]->gambar); ?>" width="900" height="500" alt="" /></a>
                                                </div>                                                  
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('berita/'.$news[$key]->id_berita); ?>" ><?php echo $news[$key]->judul;?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <p style="color: green;">
                                                            <?php
                                                              $exp = explode("<p>", $news[$key]->isi_berita);
                                                              $lengthStr = strlen($news[$key]->isi_berita);                                                      
                                                              $txt = substr($exp[1],0,100);
                                                              echo $txt.' . . .';
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php  
                                                    }
                                                }
                                            ?>
                                                                                                                             
                                            
                                            <!-- <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[1]->gambar); ?>" width="900" height="500" alt="" /></a>
                                                    </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                    <?php $tanggalBerita = explode("-", $agenda[1]->tgl_posting); ?>
                                                    <span class="gdlr-core-date" ><?php echo $tanggalBerita[2]?></span>
                                                    <span class="gdlr-core-month"><?php echo getBulan((int)$tanggalBerita[1])?></span>
                                                    <span class="gdlr-core-year"><?php echo $tanggalBerita[0]?></span>
                                                </span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('agenda/'.$agenda[1]->id_agenda); ?>" ><?php echo $agenda[1]->tema;?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                            <span class="gdlr-core-head" >
                                                                <i class="icon_clock_alt" ></i>
                                                            </span>
                                                            <span class="gdlr-core-tail"><?php echo $agenda[1]->jam;?></span>
                                                        </span>
                                                        <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                            <span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span>
                                                            <span class="gdlr-core-tail"><?php echo $agenda[1]->tempat;?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[2]->gambar); ?>" width="900" height="500" alt="" /></a>
                                                    </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                    <?php $tanggalBerita = explode("-", $agenda[2]->tgl_posting); ?>
                                                    <span class="gdlr-core-date" ><?php echo $tanggalBerita[2]?></span>
                                                    <span class="gdlr-core-month"><?php echo getBulan((int)$tanggalBerita[1])?></span>
                                                    <span class="gdlr-core-year"><?php echo $tanggalBerita[0]?></span>
                                                </span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('agenda/'.$agenda[2]->id_agenda); ?>" ><?php echo $agenda[2]->tema;?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                            <span class="gdlr-core-head" >
                                                                <i class="icon_clock_alt" ></i>
                                                            </span>
                                                            <span class="gdlr-core-tail"><?php echo $agenda[2]->jam;?></span>
                                                        </span>
                                                        <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                            <span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span>
                                                            <span class="gdlr-core-tail"><?php echo $agenda[2]->tempat;?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first" style="margin-top: -50px;">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 35px ;">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">Agenda</h3>
                                                            <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-width: 3px ;"></div>
                                                        </div><a class="gdlr-core-block-item-read-more" href="<?php echo base_url('all-agenda'); ?>" target="_self" style="color: #3db166 ;">Selengkapnya</a></div>
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list-inner gdlr-core-item-mglr">
                                                                <div class="gdlr-core-blog-grid ">
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">                                                                        
                                                                        <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[0]->gambar); ?>" width="700" height="430"  alt="" /></a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 19px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('agenda/'.$agenda[0]->id_agenda); ?>" ><?php echo $agenda[0]->tema;?></a></h3></div>
                                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <!-- <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <a href="#"><?php echo $news[0]->tanggal; ?></a>
                                                                                </span> -->
                                                                                <!-- <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                    <a href="#" rel="tag">Admission</a>
                                                                                    <span class="gdlr-core-sep">,</span>
                                                                                    <a href="#" rel="tag">Student</a>
                                                                                </span> -->
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[1]->gambar); ?>" alt="" width="150" height="150" title="Student" /></a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <!-- <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#"><?php echo $agenda[1]->tgl_posting; ?></a>
                                                                        </span>                                                                        
                                                                    </div> -->
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('agenda/'.$agenda[1]->id_agenda); ?>" ><?php echo $agenda[1]->tema;?></a></h3></div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[2]->gambar); ?>" alt="" width="150" height="150" title="shutterstock_481869205" /></a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('agenda/'.$agenda[2]->id_agenda); ?>" ><?php echo $agenda[2]->tema;?></a></h3></div>
                                                                        <!-- <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#"><?php echo $agenda[2]->tgl_posting; ?></a></span>                                                                            
                                                                        </div> -->
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#"><img src="<?php echo base_url('asset/foto_agenda/'.$agenda[3]->gambar); ?>" alt="" width="150" height="150" title="shutterstock_361397258" /></a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <!-- <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#"><?php echo $agenda[3]->tgl_posting; ?></a>
                                                                        </span>                                                                       
                                                                    </div> -->
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 16px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?php echo base_url('agenda/'.$agenda[3]->id_agenda); ?>" ><?php echo $agenda[3]->tema;?></a></h3></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-20" style="margin-top: -50px;">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 58px ;">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" style="font-size: 22px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #182847 ;">Pengumuman</h3>
                                                            <div class="gdlr-core-block-item-title-divider" style="font-size: 22px ;border-bottom-color: #dcdcdc ;border-bottom-width: 2px ;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-event-item-holder clearfix">
                                                        <?php
                                                            foreach ($announc as $key => $value) {                                                                                                                  
                                                        ?>  
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" style="margin-bottom: 38px ;">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <?php $tanggalBerita = explode("-", $announc[$key]->tanggal); ?>
                                                                <span class="gdlr-core-date" ><?php echo $tanggalBerita[2]?></span>
                                                                <span class="gdlr-core-month"><?php echo getBulan((int)$tanggalBerita[1])?></span>
                                                                <span class="gdlr-core-year"><?php echo $tanggalBerita[0]?></span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('pengumuman/'.$announc[$key]->id_berita); ?>" ><?php echo $announc[$key]->judul;?></a></h3>
                                                                <!-- <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span></span>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <?php
                                                            }                                                                                                            
                                                        ?>  
                                                        <!-- <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" style="margin-bottom: 38px ;">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <?php $tanggalBerita = explode("-", $announc[1]->tanggal); ?>
                                                                <span class="gdlr-core-date" ><?php echo $tanggalBerita[2]?></span>
                                                                <span class="gdlr-core-month"><?php echo getBulan((int)$tanggalBerita[1])?></span>
                                                                <span class="gdlr-core-year"><?php echo $tanggalBerita[0]?></span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('pengumuman/'.$announc[1]->id_berita); ?>" ><?php echo $announc[1]->judul;?></a></h3>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" style="margin-bottom: 38px ;">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <?php $tanggalBerita = explode("-", $announc[2]->tanggal); ?>
                                                                <span class="gdlr-core-date" ><?php echo $tanggalBerita[2]?></span>
                                                                <span class="gdlr-core-month"><?php echo getBulan((int)$tanggalBerita[1])?></span>
                                                                <span class="gdlr-core-year"><?php echo $tanggalBerita[0]?></span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title"><a href="<?php echo base_url('pengumuman/'.$announc[2]->id_berita); ?>" ><?php echo $announc[2]->judul;?></a></h3>                                                                
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="<?php echo base_url('all-announcement'); ?>" style="font-size: 14px ;letter-spacing: 1px ;color: #475c87 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Selengkapnya</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #475c87 ;"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                            
                            </div>
                        </div>
                    </div>
                    <br><br>
                    
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        
                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix" style="width: 620px;">
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="#">
                                                <!-- <span><img src="<?php echo base_url('asset/img_galeri/back-vid.png'); ?>" width="800" height="800"  alt="" /></span> -->
                                                    <!-- <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span> -->
                                                    <!-- <iframe width="420" height="420"
                                                    src="hhttps://www.youtube.com/embed/zS1YNfm4M40">
                                                    </iframe> -->                                                    
                                                    <!-- <iframe width="560" height="560" src="https://www.youtube.com/embed/bsbMNhYV5_o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                                    <iframe width="560" height="560" src="<?php echo $video[0]['youtube']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <!-- <i class="fa fa-play" ></i> -->
                                                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/zS1YNfm4M40" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                                </a>
                                            </div>                                            
                                        </div>

                                        <div class="gdlr-core-tab-item-wrap" style="height: 490px;">                                           
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                <div class="gdlr-core-tab-item-content  gdlr-core-active">    
                                                    <div style="margin-top: -20px; text-align: center;">
                                                        <h4 class="gdlr-core-event-item-title">Jurusan Teknik Pengairan</h4>                             
                                                    </div>
                                                    <br>
                                                    <!-- <p> Departemen Teknik Pengairan </p> -->
                                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                                        <!-- <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 45px ;">
                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">The Application Process</h3></div>
                                                            </div>
                                                        </div> -->
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" data-skin="Blut Title Column Service">
                                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                                    <div class="gdlr-core-pbf-element">
                                                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">                                                                            
                                                                            <div class="gdlr-core-pbf-element">
                                                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/reading-book.png'); ?>" alt="" width="75" height="75" title="icon-4" /></div>
                                                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                                                        <div class="gdlr-core-column-service-title-wrap">
                                                                                            <!-- <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">500</h3> -->
                                                                                            <div style="margin: -10px 0px;font-size: 40px ;color: #3db166 ;" id="h3_1dd7_3"><?php echo $infografis[0]["mahasiswa"]; ?></div>
                                                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Mahasiswa</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30" data-skin="Blut Title Column Service">
                                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                                    <div class="gdlr-core-pbf-element">
                                                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                                            <div class="gdlr-core-pbf-element">
                                                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/icon-1.png'); ?>" alt="" width="75" height="75" title="icon-4" /></div>
                                                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                                                        <div class="gdlr-core-column-service-title-wrap">                                                                                            
                                                                                            <div style="margin: -10px 0px;font-size: 40px ;color: #3db166 ;" id="h3_1dd7_3"><?php echo $infografis[0]["program"]; ?></div>
                                                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Program Studi</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                       
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" data-skin="Blut Title Column Service">
                                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                                    <div class="gdlr-core-pbf-element">
                                                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">                                                                            
                                                                            <div class="gdlr-core-pbf-element">
                                                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/press-conference.png'); ?>" alt="" width="75" height="75" title="icon-4" /></div>
                                                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                                                        <div class="gdlr-core-column-service-title-wrap">
                                                                                            <!-- <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">500</h3> -->
                                                                                            <div style="margin: -10px 0px;font-size: 40px ;color: #3db166 ;" id="h3_1dd7_3"><?php echo $infografis[0]["tendik"]; ?></div>
                                                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Tenaga Pendidik</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30" data-skin="Blut Title Column Service">
                                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                                    <div class="gdlr-core-pbf-element">
                                                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 20px;">
                                                                            <div class="gdlr-core-pbf-element">
                                                                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                                                                    <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="<?php echo base_url('asset/upload/icon-2.png'); ?>" alt="" width="75" height="75" title="icon-4" /></div>
                                                                                    <div class="gdlr-core-column-service-content-wrapper">
                                                                                        <div class="gdlr-core-column-service-title-wrap">
                                                                                            <!-- <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">500</h3> -->
                                                                                            <div style="margin: -10px 0px;font-size: 40px ;color: #3db166 ;" id="h3_1dd7_3"><?php echo $infografis[0]["alumni"]; ?></div>
                                                                                            <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Alumni</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                
                </div>
            </div>
            <!-- footer -->
        </div>
    </div>
</body>
</html>