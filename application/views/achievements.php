<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo doctype('html5');
?>
<html lang="en">
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
            <div class="row text-center">
                <h1>Achievements</h1>
            </div>
            <?= str_repeat('<br/>',3); ?>
            <div>
                <div class="row">
                    <h1 style="font-size: 30px">&nbsp;&nbsp;Operation Challenge Coin</h1>
                </div>
                <?= str_repeat('<br/>',2); ?>
                <div class="row text-center">
                    <?php foreach ($type1 as $i => $t): ?>
                    <div class="col-md-3">
                        <div class="col-md-12 divborder divbackcolor">
                            <h6><?= $t['name']; ?></h6>
                            <p class="<?= strtolower($t['a_condition']); ?>"><?= $t['a_condition']; ?></p>
                            <a href="<?= $t['url']; ?>" target="_blank">
                                <img src="<?= base_url('assets/images/'.$t['image']) ?>" alt="<?= $t['name']; ?>" class="img-responsive center-block"/>
                            </a>
                            <br />
                        </div>
                    </div>
                    <?php
                        if(($i+1) % 4 == 0)
                            echo '</div><br /><div class="row text-center">';
                    endforeach; ?>
                </div>
            </div>
            <?= str_repeat('<br/>',3); ?>
            <div>
                <div class="row">
                    <h1 style="font-size: 30px">&nbsp;&nbsp;Pick'Em Challenge Trophy</h1>
                </div>
                <br /><br />
                <div class="row text-center">
                    <?php foreach ($type2 as $i => $t): ?>
                    <div class="col-md-3">
                        <div class="col-md-12 divborder divbackcolor">
                            <h6><?= $t['name']; ?></h6>
                            <p class="<?= strtolower($t['a_condition']); ?>"><?= $t['a_condition']; ?></p>
                            <a href="<?= $t['url']; ?>" target="_blank">
                                <img src="<?= base_url('assets/images/'.$t['image']) ?>" alt="<?= $t['name']; ?>" class="img-responsive center-block" />
                            </a>
                        </div>
                    </div>
                        <?php
                        if(($i+1) % 4 == 0)
                            echo '</div><br /><div class="row text-center">';
                    endforeach; ?>
                </div>
            </div>
            <?= str_repeat('<br/>',3); ?>
            <div>
                <div class="row">
                    <h1 style="font-size: 30px">&nbsp;&nbsp;Service Medal</h1>
                </div>
                <?= str_repeat('<br/>',2); ?>
                <div class="row text-center">
                    <?php foreach ($type3 as $i => $t): ?>
                    <div class="col-md-3">
                        <div class="col-md-12 divborder divbackcolor">
                            <h6><?= $t['name']; ?></h6>
                            <img src="<?= base_url('assets/images/'.$t['image']) ?>" alt="<?= $t['name']; ?>" class="img-responsive center-block" />
                        </div>
                    </div>
                        <?php
                        if(($i+1) % 4 == 0)
                            echo '</div><br /><div class="row text-center">';
                    endforeach; ?>
                </div>
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
