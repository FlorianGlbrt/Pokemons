<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:04
 */
class Pokemon extends AppModel
{
    public $belongsTo = array(
        'Joueur' => array(
            'counterCache' => true,
        )
    );

    public $validate = array(
        'nom' => array(
            'rule' => 'notEmpty'
        ),
        'niveau' => array(
            'rule' => 'notEmpty'
        ),
        'pv' => array(
            'rule' => 'notEmpty'
        )
    );
}