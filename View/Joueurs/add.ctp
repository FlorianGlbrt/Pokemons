<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 17:40
 */

$this->start('head');
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>";
echo $this->Html->css('cake.generic');
echo $this->Html->script('bootstrap.min.js');
echo $this->Html->script('validator.min.js');
echo $this->Html->css('bootstrap.min.css');
echo $this->Html->css('default-background.css');
$this->end();
?>
<form class ="form-horizontal" action="/joueurs/add" id="JoueurAddForm" method="post" accept-charset="utf-8" data-toggle="validator">
    <div style="display:none;">
        <input name="_method" value="POST" type="hidden" >
    </div>
    <div class="container-fluid">
        <div class="input text form-group input-group has-feedback">
            <span class="input-group-addon control-label" for="JoueurIdentifiant">Identifiant</span>
            <input required name="data[Joueur][identifiant]" id="JoueurIdentifiant" type="text" class="form-control">
        </div>

        <div class="input password form-group input-group has-feedback">
            <span class="input-group-addon control-label" for="JoueurMdp">Mot de passe</span>
            <input required name="data[Joueur][mdp]" id="JoueurMdp" type="password" class="form-control">
        </div>

        <div class="input password form-group input-group has-feedback">
            <span class="input-group-addon control-label" for="mdp2">Vérif. mot de passe</span>
                <input class="form-control {$borderColor}" id="mdp2" type="password"
                       name="mdp2" data-match="#JoueurMdp"
                       data-match-error="passwords don't match"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
        </div>

        <div class="input email form-group input-group has-feedback">
            <span class="input-group-addon control-label" for="JoueurEmail">Email</span>
            <input required name="data[Joueur][email]" id="JoueurEmail" type="email" class="form-control">
        </div>

        <div class="input text form-group input-group has-feedback">
            <span class="input-group-addon control-label" for="JoueurPseudonyme">Pseudonyme</span>
            <input required name="data[Joueur][pseudonyme]" id="JoueurPseudonyme" type="text" class="form-control">
        </div>

        <div class="form-group has-feedback">
            <div class="col-sm-offset-2 col-sm-10">
                <input name="data[Joueur][sexe]" id="JoueurSexe_" value="" type="hidden">
                <div class="radio">
                    <input name="data[Joueur][sexe]" id="JoueurSexeM" value="M" type="radio" required ><label for="JoueurSexeM">Male</label>
                </div>
                <div class="radio">
                    <input name="data[Joueur][sexe]" id="JoueurSexeF" value="F" type="radio" required ><label for="JoueurSexeF">Female</label>
                </div>
            </div>
        </div>



        <div class="input number form-group input-group has-feedback">
            <input required name="data[Joueur][niveau]" id="JoueurNiveau" type="number" value="1" hidden>
        </div>


        <div class="submit form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Ajouter ce joueur</button>
            </div>
        </div>
    </div>
</form>