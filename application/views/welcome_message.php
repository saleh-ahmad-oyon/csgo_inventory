<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo doctype('html5');
?>
<html>
    <?php include_once 'includes/head.php';?>
    <body>
        <div class="cover-image"></div>
        <div class="bodytype">
            <header>
                <?php include_once 'includes/header.php';?>
            </header>
                <nav id='cssmenu'>
                    <?php include_once 'includes/navbar.php';?>
                </nav>
            <?php echo br(2); ?>
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <div id="slider1_container" class="slide-container">
                                <div data-u="loading" class="slide-loading">
                                    <div class="slide-loading-f"></div>
                                    <div style="slide-loading-s"></div>
                                </div>

                                <div data-u="slides" class="u-slides">
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/gut crimson web.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">&#9733;&nbsp;StatTrak<sup>TM</sup> Gut Knife | Crimson Web</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/Steel Disruption 2.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">P250 | Steel Disruption</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/m4a1 dark water.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div class="caption1">
                                            <div class="caption2"></div>
                                            <div class="caption3">M4A1-S | Dark Water FT</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/Safari Mesh.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">AK-47 | Safari Mesh MW</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/P2000 Ivory.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">P2000 | Ivory WW</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/m4a1 blood tiger.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div class="caption1">
                                            <div class="caption2"></div>
                                            <div class="caption3">M4A1-S | Blood Tiger FN</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/m4a1 basillisk.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2"></div>
                                            <div class="caption3">StatTrak<sup>TM</sup> M4A1-S | Basilisk MW</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/Contractor 2.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div class="caption1">
                                            <div class="caption2"> </div>
                                            <div class="caption3">Dual Berettas | Contractor MW</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/usps caiman.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">USP-S | Caiman FT</div>
                                        </div>
                                    </div>

                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/usps Serum.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">USP-S | Serum</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/Black Laminate.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">AK-47 | Black Laminate MW</div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        $img_attr = array(
                                            'data-u' => 'image',
                                            'src' => base_url('assets/images/slides/ak redline.jpg')
                                        );
                                        echo img($img_attr); ?>
                                        <div data-u="caption" data-t="MCLIP|B" data-t2="NO" class="caption1">
                                            <div class="caption2">
                                            </div>
                                            <div class="caption3">AK-47 | Redline WW FT</div>
                                        </div>
                                    </div>
                                </div>

                                <span data-u="arrowleft" class="jssora05l arrow-l"></span>
                                <span data-u="arrowright" class="jssora05r arrow-r"></span>

                                <div data-u="thumbnavigator" class="jssort02 thumb-nav">
                                    <div data-u="slides" class="thumb-nav-slides">
                                        <div data-u="prototype" class="p">
                                            <div class=w><div data-u="thumbnailtemplate" class="t"></div></div>
                                            <div class=c></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </section>
            <footer>
                <?php include_once('includes/footer.php'); ?>
            </footer>
        </div>
        <?php include_once 'includes/javascript.php';?>
    </body>
</html>