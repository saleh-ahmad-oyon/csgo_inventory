<?php
/**
 * Created by PhpStorm.
 * User: Oyon
 * Date: 3/3/2016
 * Time: 2:10 AM
 */
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
                <?php
                if($name == 'usps')
                    echo '<h1>USP-S</h1>';
                elseif($name == 'p2000')
                    echo '<h1>P2000</h1>';
                elseif($name == 'glock18')
                    echo '<h1>Glock-18</h1>';
                elseif($name == 'dualBerettas')
                    echo '<h1>Dual Berettas</h1>';
                elseif($name == 'fiveSeven')
                    echo '<h1>Five-Seven</h1>';
                elseif($name == 'cz75Auto')
                    echo '<h1>CZ75-Auto</h1>';
                elseif($name == 'tec9')
                    echo '<h1>Tec-9</h1>';
                elseif($name == 'p250')
                    echo '<h1>P250</h1>';
                elseif($name == 'deagle')
                    echo '<h1>Desert Eagle</h1>';
                elseif($name == 'revolver')
                    echo heading('R8 Revolver', 1);
                ?>
            </div>
            <br />
            <div class="row text-center weird-font-size marg-bot">
                <?php
                $counter =0;

                if($name == 'usps')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="usps"]');
                elseif($name == 'p2000')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="p2000"]');
                elseif($name == 'glock18')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="glock18"]');
                elseif($name == 'dualBerettas')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="dualBerettas"]');
                elseif($name == 'fiveSeven')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="fiveSeven"]');
                elseif($name == 'cz75Auto')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="cz75Auto"]');
                elseif($name == 'tec9')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="tec9"]');
                elseif($name == 'p250')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="p250"]');
                elseif($name == 'deagle')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="dEagle"]');
                elseif($name == 'revolver')
                    $pistol_path = $xml->xpath('/items/pistols/pistol[@name="revolver"]');

                foreach($pistol_path[0]->serial as $item): ?>
                <div class="col-md-3">
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
                        $counter++;
                        echo '</div>';
                        if($counter % 4 == 0)
                            echo '</div><br /><div class="row text-center weird-font-size marg-bot">';
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