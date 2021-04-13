            <!-- <div id="loadingku"></div> -->       
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">                        
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a target="blank" href="https://ub.ac.id/">UB Official</a></li>
                                <li class="menu-item kingster-normal-menu"><a target="blank" href="https://bits.ub.ac.id/">BITS</a></li>
                                <li class="menu-item kingster-normal-menu"><a target="blank" href="http://mail.ub.ac.id">Webmail</a></li>
                                <li class="menu-item kingster-normal-menu"><a target="blank" href="https://prasetya.ub.ac.id/">UB News</a></li>
                                <li class="menu-item kingster-normal-menu"><a target="blank" href="http://old.pengairan.ub.ac.id/">Old Website</a></li>
                                <li class="menu-item kingster-normal-menu" id="btn-search-global"><a href="#"><i class="fa fa-search"></i></a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">Apps</a></div>
                    </div>
                </div>
            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr" style="margin: 0 0 0 0;">
                            <div class="kingster-logo-inner">
                                <a class="" href="<?php echo base_url('beranda'); ?>"><img style="width:55%;" src="<?php echo base_url('asset/logo/logoAir.png'); ?>" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix">
                            <div class="kingster-main-menu" id="kingster-main-menu" >
                                <ul id="menu-main-navigation-1" class="sf-menu">
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
                            <div class="kingster-main-menu-right-wrap clearfix" style="display: none;">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap kingster" id="modal-search">
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
                        </div>
                    </div>
                </div>
            </header>