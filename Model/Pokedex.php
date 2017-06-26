<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 26/06/17
 * Time: 15:33
 */
class Pokedex extends AppModel
{
    public $hasAndBelongsToMany = array(
        'Type' => array(
            'ClassName' => 'Type',
            'order' => 'Type.id ASC'));

    public $hasMany = array(
        'Pokemon' => array(
            'ClassName' => 'Pokemon',
            'order' => 'Pokemon.niveau ASC'));
}