<div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <!-- <a class="" href="index.html"><img src="<?php echo base_url('asset/images/logo.png'); ?>" alt="" /></a> -->
                        <a class="" href="<?php echo base_url('beranda'); ?>"><img style="55%;" src="<?php echo base_url('asset/logo/logoAir.png'); ?>" alt="" /></a>
                    </div>
                </div>
                
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-mobile-menu" style="margin-top: 0px; margin-right: -15px;"><a href="#" class="kingster-mm-menu-button kingster-mobile-menu-button" id="btn-search-global-mobile"><i class="fa fa-search"></i><span></span></a></div>
                    <div class="kingster-mobile-menu">
                        <a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <?php
                                        //  Dynamic Menu
                                        foreach ($menu as $row){
                                            // First Level
                                            echo "<li class=\"menu-item menu-item-has-children kingster-normal-menu\"><a href=\"" . $row['link'] . "\" class=\"sf-with-ul-pre\">" . $row['nama_menu'] . "</a>";
                                            if(count($row["child"]) > 0){
                                                echo "<ul class=\"sub-menu\">";
                                                foreach ($row["child"] as $child){
                                                    // Second Level
                                                    if(count($child["child"]) > 0){
                                                        echo "<li class=\"menu-item menu-item-has-children\" data-size=\"60\"><a href=\"" . $child['link'] . "\">" . $child['nama_menu'] . "</a>";
                                                        echo "<ul class=\"sub-menu\">";
                                                        foreach ($child["child"] as $grand_child){
                                                            // Third Level
                                                            echo "<li class=\"menu-item\" data-size=\"60\"><a href=\"" . $grand_child['link'] . "\">" . $grand_child['nama_menu'] . "</a></li>";
                                                        }
                                                        echo "</ul>";
                                                        echo "</li>";
                                                    } else {
                                                        echo "<li class=\"menu-item\" data-size=\"60\"><a href=\"" . $child['link'] . "\">" . $child['nama_menu'] . "</a></li>";
                                                    }
                                                }
                                                echo "</ul>";
                                            }
                                            echo "</li>";
                                        }
                                    ?>                                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
                            <div class="kingster-main-menu-right-wrap clearfix" style="display: none;">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap kingster" id="modal-search-mobile">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="<?php echo base_url('search'); ?>">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="search">
                                                <div style="margin-top: 8px;" class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>