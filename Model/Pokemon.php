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
        ),
        'Pokedex' => array(
            'CounterCache' => true,
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
        ),
    );

    public function getTypes(){
        $pokedex = new Pokedex();
        $pokedex = $pokedex->findById($this->data['Pokedex']['id']);
        $types = $pokedex['Type'];
        return $types;
    }

    public function getMultiplicateur(Pokemon $p2){
        $multiplicateur = 1;
        $t1s = $this->getTypes();
        $t2s = $this->getTypes();
        foreach ($t1s as $t1){
            foreach ($t2s as $t2){

            }
        }
        return $multiplicateur;
    }
}