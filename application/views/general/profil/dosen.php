<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
        <!-- header mobile navigation -->
        <div class="kingster-body-outer-wrapper ">
            <div class="kingster-body-wrapper clearfix  kingster-with-frame">
                <!-- header navigation -->
                <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(<?php echo base_url('asset/foto_statis/default_halaman.jpg');?>) ;">
                    <div class="kingster-header-transparent-substitute"></div>
                    <div class="kingster-page-title-overlay"></div>
                    <div class="kingster-page-title-bottom-gradient"></div>
                    <div class="kingster-page-title-container kingster-container">
                        <div class="kingster-page-title-content kingster-item-pdlr" id="div_983a_1">                     
                            <h1 class="kingster-page-title" id="h1_983a_0">Dosen</h1>
                        </div>
                    </div>
                </div>
                <div class="kingster-breadcrumbs">
                    <div class="kingster-breadcrumbs-container kingster-container">
                        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Kingster." href="<?php echo base_url('beranda'); ?>" class="home"><span property="name">Beranda</span></a>
                                <meta property="position" content="1">
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name">SDM</span>
                                <meta property="position" content="2">
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name">Dosen</span>
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
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 29px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">DAFTAR DOSEN</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th width=50 style="text-align:center">No</td>
                                                        <th style="text-align:center">Nama</th>
                                                        <th style="text-align:center">Email</th>
                                                        <th style="text-align:center">Bidang Ilmu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $count= 1;
                                                        foreach($record as $key => $val){                                                                               
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count?></td>
                                                        <td style="text-align:left; padding-left:1%"><a href="<?php echo base_url('dosen').'/'.$val['id_dosen']; ?>"><?php echo $val['nm_dosen']?></a></td>
                                                        <td style="text-align:left; padding-left:1%"><?php echo $val['email']?></td>
                                                        <td style="text-align:left; padding-left:1%"><?php echo $val['bidang']?></td>
                                                    </tr>

                                                    <?php
                                                            $count++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
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