<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 26/06/17
 * Time: 15:33
 */
class Type extends AppModel
{
    public $hasAndBelongsToMany = array(
        'Pokedex' => array(
            'ClassName' => 'Pokedex',
            'order' => 'Pokedex.id ASC'));
}