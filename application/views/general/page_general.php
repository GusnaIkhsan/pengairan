<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
        <!-- header mobile navigation -->
        <div class="kingster-body-outer-wrapper ">
            <div class="kingster-body-wrapper clearfix  kingster-with-frame">
                <!-- header navigation -->
                <div class="kingster-blog-title-wrap  kingster-style-custom kingster-feature-image" style="background-image: url(<?php echo base_url('asset/foto_statis/'. $page['gambar'])?>) ;">
                    <div class="kingster-header-transparent-substitute"></div>
                    <div class="kingster-blog-title-overlay" style="opacity: 0.01 ;"></div>
                    <div class="kingster-blog-title-bottom-overlay"></div>
                    <div class="kingster-blog-title-container kingster-container">
                        <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
                            <header class="kingster-single-article-head clearfix">
                                <div class="kingster-single-article-date-wrapper  post-date updated">
                                    <?php 
                                        $tempDate = strtotime($page['created_at']);
                                        $tanggalBerita = explode("-", $page['created_at']); 
                                    ?>
                                    <!-- <div class="kingster-single-article-date-day"><?php echo $tanggalBerita[2]?></div> -->
                                    <div class="kingster-single-article-date-day"><?php echo date('d',$tempDate)?></div>
                                    <div class="kingster-single-article-date-month"><?php echo date('M',$tempDate)?></div>
                                    <div class="kingster-single-article-date-year"><?php echo date('Y',$tempDate)?></div>
                                </div>
                                <div class="kingster-single-article-head-right">
                                    <h1 class="kingster-single-article-title"><?php echo $page['judul']; ?></h1>
                                    <div class="kingster-blog-info-wrapper">
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author "><span class="kingster-head">By</span><span class="fn"><a href="#" title="Posts by John Smith" rel="author"><?php echo $level; ?></a></span></div>
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-comment-number "><span class="kingster-head"></span>HALAMAN</div>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="kingster-breadcrumbs">
                    <div class="kingster-breadcrumbs-container kingster-container">
                        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Kingster." class="home"><span property="name">Halaman</span></a>
                                <meta property="position" content="1">
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name"><?php echo $page["judul"]; ?></span>
                                <meta property="position" content="3">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                    <div class="gdlr-core-page-builder-body">
                        <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                <div class="entry">
                                                    <?php echo $page["isi_halaman"]; ?>
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
    </body>
</html>