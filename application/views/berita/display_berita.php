<!DOCTYPE html>
<html lang="en-US" class="no-js">
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- header mobile navigation -->
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <!-- header navigation -->
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="kingster-blog-title-wrap  kingster-style-custom kingster-feature-image" style="background-image: url(<?php echo base_url('asset/foto_berita/'. $berita['gambar'])?>) ;">
                    <div class="kingster-header-transparent-substitute"></div>
                    <div class="kingster-blog-title-overlay" style="opacity: 0.01 ;"></div>
                    <div class="kingster-blog-title-bottom-overlay"></div>
                    <div class="kingster-blog-title-container kingster-container">
                        <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
                            <header class="kingster-single-article-head clearfix">
                                <div class="kingster-single-article-date-wrapper  post-date updated">
                                    <?php $tanggalBerita = explode("-", $berita['tanggal']); ?>
                                    <div class="kingster-single-article-date-day"><?php echo $tanggalBerita[2]?></div>
                                    <div class="kingster-single-article-date-month"><?php echo getBulan((int)$tanggalBerita[1])?></div>
                                    <div class="kingster-single-article-date-year"><?php echo $tanggalBerita[0]?></div>
                                </div>
                                <div class="kingster-single-article-head-right">
                                    <h1 class="kingster-single-article-title"><?php echo $berita['judul']; ?></h1>
                                    <div class="kingster-blog-info-wrapper">
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author "><span class="kingster-head">By</span><span class="fn"><a href="#" title="" rel="author"><?php echo $berita['username']; ?></a></span></div>
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-tag "><a href="#" rel="tag"><?php echo $mode; ?></a></div>
                                        <!-- <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-comment-number "><span class="kingster-head"><i class="fa fa-comments-o" ></i></span><?php echo $berita['dibaca']; ?></div> -->
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
                            <!-- </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the Blog category archives." href="<?php echo base_url('all-news'); ?>" class="taxonomy category"><span property="name"><?php echo ucwords($mode); ?></span></a>
                            <meta property="position" content="2"> -->
                            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $berita['judul']; ?></span>
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
                                                <?php echo $berita['isi_berita']; ?>
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