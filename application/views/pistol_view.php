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

    <section>
        <?php
        require_once 'xml/load.php';
        $xml = loadfile(); ?>

        <div class="container">
            <div class="row text-center">
                <?= heading($name, 1); ?>
            </div>
            <div class="row text-center weird-font-size marg-bot">
                <?php
                $pistol_path = $xml->xpath($path);

                foreach($pistol_path[0]->serial as $item): ?>
                <div class="col-md-3 padding-top-10">
                    <div class="col-md-12 divborder divbackcolor">
                        <?php
                        echo heading((strpos($item->skin,'StatTrak')!== false) ? str_replace('StatTrak', 'StatTrak<sup>TM</sup>', $item->skin) : $item->skin, 5);

                        echo '<p>';
                        echo $item->exterior.nbs(3);
                        echo($item->float < 0.04) ? '<mark>'. $item->float. '</mark>' : $item->float;
                        echo '</p>';

                        $img_attr = array(
                            'src' => base_url().'assets/'.$item->pic,
                            'alt' => $item->alternatePic,
                            'class' => 'img-responsive center-block'
                        );
                        echo img($img_attr);
                        $attr = array(
                            'target' => '_blank',
                            'title' => 'Market Price',
                            'style' => 'line-height: 2.2'
                        );
                        echo anchor($item->marketPrice, 'Check Market Price', $attr);
                        if(strpos($item->grade,'StatTrak')!== false):
                            echo '<p class="StatTrak">', str_replace('StatTrak', 'StatTrak<sup>TM</sup>', $item->grade), '</p>';
                        elseif(strpos($item->grade,'Souvenir')!== false):
                            echo '<p class="Souvenir">', $item->grade, '</p>';
                        else:
                            if($item->grade == 'Industrial Grade Pistol'):
                                echo '<p class="industrial">';
                            elseif($item->grade == 'Mil-Spec Grade Pistol'):
                                echo '<p class="MilSpec">';
                            elseif($item->grade == 'Restricted Pistol'):
                                echo '<p class="restricted">';
                            elseif($item->grade == 'Consumer Grade Pistol'):
                                echo '<p class="consumer">';
                            elseif($item->grade == 'Classified Pistol'):
                                echo '<p class="classified">';
                            elseif($item->grade == 'Covert Pistol'):
                                echo '<p class="Covert">';
                            endif;
                            echo $item->grade, '</p>';
                        endif;
                        echo '<p><a href="', base_url(), $item->collectionLink, '" target="_blank">', $item->collection, '</a></p></div>';
                        echo '</div>';
                        endforeach; ?>
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