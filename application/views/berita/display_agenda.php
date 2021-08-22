<!DOCTYPE html>
<html lang="en-US" class="no-js">
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- header mobile navigation -->
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <!-- header navigation -->
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="kingster-blog-title-wrap  kingster-style-custom kingster-feature-image" style="background-image: url(<?php echo base_url('asset/foto_agenda/'. $agenda['gambar'])?>) ;">                
                    <div class="kingster-header-transparent-substitute"></div>
                    <div class="kingster-blog-title-overlay" style="opacity: 0.01 ;"></div>
                    <div class="kingster-blog-title-bottom-overlay"></div>
                    <div class="kingster-blog-title-container kingster-container">
                        <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
                            <header class="kingster-single-article-head clearfix">
                                <div class="kingster-single-article-date-wrapper  post-date updated">
                                    <?php $tanggalBerita = explode("-", $agenda['tgl_posting']); ?>
                                    <div class="kingster-single-article-date-day"><?php echo $tanggalBerita[2]?></div>
                                    <div class="kingster-single-article-date-month"><?php echo getBulan((int)$tanggalBerita[1])?></div>
                                    <div class="kingster-single-article-date-year"><?php echo $tanggalBerita[0]?></div>
                                </div>
                                <div class="kingster-single-article-head-right">
                                    <h1 class="kingster-single-article-title"><?php echo $agenda['tema']; ?></h1>
                                    <div class="kingster-blog-info-wrapper">
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author "><span class="kingster-head">By</span><span class="fn"><a href="#" title="Posts by John Smith" rel="author"><?php echo $agenda['username']; ?></a></span></div>
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-tag "><a href="#" rel="tag"><?php echo $mode; ?></a></div>                                        
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="kingster-breadcrumbs">
                    <div class="kingster-breadcrumbs-container kingster-container">
                        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Kingster." href="<?php echo base_url(); ?>" class="home"><span property="name">Beranda</span></a>
                            <meta property="position" content="1">                            
                            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $agenda['tema']; ?></span>
                            <meta property="position" content="3">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="kingster-content-container kingster-container">
                    <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
                        <div class=" kingster-sidebar-center kingster-column-60 kingster-line-height">
                            <div class="kingster-content-wrap kingster-item-pdlr clearfix">
                                <div class="kingster-content-area">
                                    <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                                        <div class="kingster-single-article clearfix">
                                            <div class="kingster-single-article-content">
                                                <?php echo $agenda['isi_agenda']; ?>                                                
                                                <table style="width: 400px; margin-top: 20px;">
                                                    <tr>
                                                        <th style="text-align: center;" colspan="2">Keterangan Tempat & Waktu</th>                                                        
                                                    </tr>
                                                    <tr>
                                                        <?php if(!empty($agenda['tempat'])){?>
                                                        <td>Tempat</td>
                                                        <td><?php echo $agenda['tempat']; ?></td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <?php $tgl_mulai = explode("-", $agenda['tgl_mulai']); ?> 
                                                        <?php $tgl_selesai = explode("-", $agenda['tgl_selesai']); ?> 
                                                        <?php if(!empty($agenda['tgl_mulai'])){?>
                                                        <td>Tanggal</td>
                                                        <td><?php echo "$tgl_mulai[2]-$tgl_mulai[1]-$tgl_mulai[0]"." s/d "."$tgl_selesai[2]-$tgl_selesai[1]-$tgl_selesai[0]"; ?></td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <?php if(!empty($agenda['jam'])){?>
                                                        <td>Jam</td>
                                                        <td><?php echo $agenda['jam']; ?></td>
                                                        <?php } ?>
                                                    </tr>
                                                </table>                                                                                                                                                                                       
                                            </div>
                                        </div>
                                    </article>
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