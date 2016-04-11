<?php
/**
 * Created by PhpStorm.
 * User: Oyon
 * Date: 3/3/2016
 * Time: 11:54 PM
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
        <div class="container">
            <?php
                require 'json/load_json.php';
                $json = loadJson();
            ?>
            <div class="row text-center">
                <?php
                    if($name == 'ak47')
                        echo heading('AK-47', 1);
                    elseif($name == 'm4a4')
                        echo heading('M4A4', 1);
                    elseif($name == 'm4a1')
                        echo heading('M4A1-S', 1);
                    elseif($name == 'aug')
                        echo heading('AUG', 1);
                    elseif($name == 'awp')
                        echo heading('AWP', 1);
                    elseif($name == 'famas')
                        echo heading('FAMAS', 1);
                    elseif($name == 'scar20')
                        echo heading('SCAR-20', 1);
                    elseif($name == 'g3sg1')
                        echo heading('G3SG1', 1);
                    elseif($name == 'sg553')
                        echo heading('SG 553', 1);
                    elseif($name == 'galil')
                        echo heading('Galil AR', 1);
                    elseif($name == 'ssg08')
                        echo heading('SSG 08', 1);
                ?>
            </div>
            <br />

            <div class="row text-center weird-font-size marg-bot fontsize11px">
                <?php
                $counter =0;

                if($name == 'ak47')
                    $rifle_path = $json['rifle'][0]['ak47'];
                elseif($name == 'm4a4')
                    $rifle_path = $json['rifle'][0]['m4a4'];
                elseif($name == 'm4a1')
                    $rifle_path = $json['rifle'][0]['m4a1'];
                elseif($name == 'aug')
                    $rifle_path = $json['rifle'][0]['aug'];
                elseif($name == 'awp')
                    $rifle_path = $json['rifle'][0]['awp'];
                elseif($name == 'famas')
                    $rifle_path = $json['rifle'][0]['famas'];
                elseif($name == 'scar20')
                    $rifle_path = $json['rifle'][0]['scar20'];
                elseif($name == 'g3sg1')
                    $rifle_path = $json['rifle'][0]['g3sg1'];
                elseif($name == 'sg553')
                    $rifle_path = $json['rifle'][0]['sg553'];
                elseif($name == 'galil')
                    $rifle_path = $json['rifle'][0]['galil'];
                elseif($name == 'ssg08')
                    $rifle_path = $json['rifle'][0]['ssg08'];

                foreach($rifle_path as $item): ?>
                <div class="col-md-3">
                    <div class="col-md-12 divborder divbackcolor">
                        <?php
                            echo heading((strpos($item['skin'],'StatTrak')!== false) ? str_replace('StatTrak', 'StatTrak<sup>TM</sup>', $item['skin']) : $item['skin'], 5);

                            echo '<p>';
                            echo $item['exterior'].nbs(3);
                            echo ($item['float'] < 0.04) ? '<mark>'. $item['float']. '</mark>' : $item['float'];
                            echo '</p>';


                            $img_attr = array(
                                'src' => base_url().$item['pic'],
                                'alt' => $item['alternatePic'],
                                'class' => 'img-responsive center-block'
                            );
                            echo img($img_attr);
                            $attr = array(
                                'target' => '_blank',
                                'title' => 'Market Price',
                                'style' => 'line-height: 2.2'
                            );
                            echo anchor($item['marketPrice'], 'Check Market Price', $attr);

                        if(strpos($item['grade'],'StatTrak')!== false):
                            echo '<p class="StatTrak">', str_replace('StatTrak', 'StatTrak<sup>TM</sup>', $item['grade']), '</p>';
                        elseif(strpos($item['grade'],'Souvenir')!== false):
                            echo '<p class="Souvenir">', $item['grade'], '</p>';
                        else:
                            if(strpos($item['grade'],'Industrial')!== false):
                                echo '<p class="industrial">';
                            elseif(strpos($item['grade'],'Mil-Spec')!== false):
                                echo '<p class="MilSpec">';
                            elseif(strpos($item['grade'],'Restricted')!== false):
                                echo '<p class="restricted">';
                            elseif(strpos($item['grade'],'Consumer')!== false):
                                echo '<p class="consumer">';
                            elseif(strpos($item['grade'],'Classified')!== false):
                                echo '<p class="classified">';
                            elseif(strpos($item['grade'],'Covert')!== false):
                                echo '<p class="Covert">';
                            endif;
                            echo $item['grade'], '</p>';
                        endif;
                        echo '<p><a href="', base_url(), $item['collectionLink'], '" target="_blank">', $item['collection'], '</a></p></div>';
                        $counter++;
                        echo '</div>';
                        if($counter % 4 == 0)
                            echo '</div><br /><div class="row text-center weird-font-size marg-bot fontsize11px">';
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