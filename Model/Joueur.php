<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:04
 */
class Joueur extends AppModel
{
    public $hasMany = array(
        'Pokemon' => array(
            'ClassName' => 'Pokemon',
            'order' => 'Pokemon.niveau ASC'));

    public $validate = array(
        'identifiant' => array(
            'rule' => 'notEmpty'
        ),
        'mdp' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'email'
        ),
        'sexe' => array(
            'rule' => 'notEmpty'
        ),
        'pseudonyme' => array(
            'rule' => 'notEmpty'
        ),
        'niveau' => array(
            'rule' => 'numeric'
        )
    );
}