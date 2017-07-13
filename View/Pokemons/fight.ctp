<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 22/06/17
 * Time: 11:29
 */

if($m1 > 1){
    $efficace1 = "C'est super efficace !";
}else if($m1 < 1){
    $efficace1 = "Pas très efficace !";
}else{
    $efficace1 = "";
}

if($m2 > 1){
    $efficace2 = "C'est super efficace !";
}else if($m2 < 1){
    $efficace2 = "Pas très efficace !";
}else{
    $efficace2 = "";
}


?>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-6 text-center">
            <?php
            echo "----- ".$p1['Pokemon']['nom']." ---> ".$p1['Pokemon']['pv']." PV, ".$p1['Pokemon']['niveau']." ATQ de base -----";
            ?>
        </div>
        <div class="col-md-6 text-center">
            <?php
            echo "----- ".$p2['Pokemon']['nom']." ---> ".$p2['Pokemon']['pv']." PV, ".$p2['Pokemon']['niveau']." ATQ de base -----";
            ?>
        </div>

    </div>
    <br><br>
    <?php
    while($p1['Pokemon']['pv'] > 0 && $p2['Pokemon']['pv'] > 0){
        $p1['Pokemon']['pv'] = $p1['Pokemon']['pv'] - $p2['Pokemon']['niveau']*$m2;
        $p2['Pokemon']['pv'] = $p2['Pokemon']['pv'] - $p1['Pokemon']['niveau']*$m1;
        if ($p1['Pokemon']['pv'] <= 0){
            $p1['Pokemon']['pv'] = 0;
        }
        if ($p2['Pokemon']['pv'] <= 0){
            $p2['Pokemon']['pv'] = 0;
        }
        ?>
        <div class="row text-center">
            <?php
               echo "----- ".$p1['Pokemon']['nom']." attaque ".$p2['Pokemon']['nom']." ! ".$efficace1." -".$p1['Pokemon']['niveau']*$m1." PV ----->"
            ?>
        </div>
        <div class="row text-center">
            <?php
                echo "<----- ".$p2['Pokemon']['nom']." attaque ".$p1['Pokemon']['nom']." ! ".$efficace2." -".$p2['Pokemon']['niveau']*$m2." PV -----"
            ?>
        </div>
        <div class="row text-center">
            <div class="col-md-6 text-center">
                <?php
                echo "----- ".$p1['Pokemon']['nom']." ---> ".$p1['Pokemon']['pv']." PV -----";
                ?>
            </div>
            <div class="col-md-6 text-center">
                <?php
                echo "----- ".$p2['Pokemon']['nom']." ---> ".$p2['Pokemon']['pv']." PV -----";
                ?>
            </div>

        </div>
        <br><br>
        <?php
    }
    if ($p1['Pokemon']['pv'] <= 0 && $p2['Pokemon']['pv'] <= 0){
        ?>
        <div class="row text-center">
            <h3> Egalité </h3>
        </div>
        <?php
    }elseif ($p1['Pokemon']['pv'] <= 0){
        ?>
        <div class="row text-center">
            <h3> <?php echo $p2['Pokemon']['nom'];?> a gagné </h3>
        </div>
        <?php
    }else{
        ?>
        <div class="row text-center">
            <h3> <?php echo $p1['Pokemon']['nom'];?> a gagné </h3>
        </div>
        <?php
    }?>
    </div>
