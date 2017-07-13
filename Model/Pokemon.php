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
        $t2s = $p2->getTypes();
        foreach ($t1s as $t1){
            foreach ($t2s as $t2){
                if ($t1['nom'] == "eau" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "eau" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "eau" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "eau" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "eau" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "eau" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "feu" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "glace")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "insecte")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "feu" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "plante" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "insecte")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "plante" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "normal" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "normal" && ($t2['nom'] == "psy")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "normal" && ($t2['nom'] == "spectre")){
                    $multiplicateur = $multiplicateur * 0;
                }


                if ($t1['nom'] == "vol" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "vol" && ($t2['nom'] == "Combat")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "vol" && ($t2['nom'] == "electrique")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "vol" && ($t2['nom'] == "insecte")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "vol" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "vol" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "electrique" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "electrique" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "electrique" && ($t2['nom'] == "electrique")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "electrique" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "electrique" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 0;
                }
                if ($t1['nom'] == "electrique" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "roche" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "combate")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "glace")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "insecte")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "roche" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "Combat" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "fée")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "glace")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "insecte")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "normal")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "psy")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "spectre")){
                    $multiplicateur = $multiplicateur * 0;
                }
                if ($t1['nom'] == "Combat" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "insecte" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "Combat")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "fée")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "psy")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "spectre")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "insecte" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "glace" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "glace")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "glace" && ($t2['nom'] == "vol")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "dragon" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "dragon" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "dragon" && ($t2['nom'] == "fée")){
                    $multiplicateur = $multiplicateur * 0;
                }


                if ($t1['nom'] == "poison" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "fée")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "sol")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "poison" && ($t2['nom'] == "spectre")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "psy" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "psy" && ($t2['nom'] == "Combat")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "psy" && ($t2['nom'] == "plante")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "psy" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "sol" && ($t2['nom'] == "acier" )){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "electrique" )){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "feu" )){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "normal" )){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "plante" )){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "poison" )){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "roche" )){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "sol" && ($t2['nom'] == "vol" )){
                    $multiplicateur = $multiplicateur * 0;
                }


                if ($t1['nom'] == "spectre" && ($t2['nom'] == "normal")){
                    $multiplicateur = $multiplicateur * 0;
                }
                if ($t1['nom'] == "spectre" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "spectre" && ($t2['nom'] == "spectre")){
                    $multiplicateur = $multiplicateur * 2;
                }


                if ($t1['nom'] == "fée" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "fée" && ($t2['nom'] == "Combat")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "fée" && ($t2['nom'] == "dragon")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "fée" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "fée" && ($t2['nom'] == "poison")){
                    $multiplicateur = $multiplicateur * 0.5;
                }


                if ($t1['nom'] == "acier" && ($t2['nom'] == "acier")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "eau")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "electrique")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "fée")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "feu")){
                    $multiplicateur = $multiplicateur * 0.5;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "glace")){
                    $multiplicateur = $multiplicateur * 2;
                }
                if ($t1['nom'] == "acier" && ($t2['nom'] == "roche")){
                    $multiplicateur = $multiplicateur * 2;
                }
            }
        }
        return $multiplicateur;
    }
}