<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:05
 * @property Pokemon Pokemon
 */
class PokemonsController extends AppController
{
    public $uses = array('Pokemon','Joueur','Pokedex','Type');
    public $helpers = array('Html','Form','Session','Js');
    public $components = array('Session','RequestHandler');

    public function add($idJoueur){

        if($this->request->is('post')){
            $this->Pokemon->create();
            if ($this->Pokemon->save($this->request->data)){
                $this->Session->setFlash(__("Pokemon added successfully"));
            }else{
                //debug($this->request->data);
                //debug($this->Pokemon->validationErrors);
                //die();
                $this->Session->setFlash(__("failed"));
            }
        }
        return $this->redirect(array('controller' => 'joueurs' ,'action' => 'index'));

    }

    public function getByJoueur() {
        if($this->request->is('ajax')) {
            $joueur_id = $this->request->data['joueur_id'];

            $pokemons = $this->Pokemon->find('all', array(
                'conditions' => array('joueur_id' => $joueur_id),
                'recursive' => -1
            ));
            $this->layout = 'ajax';
            $this->set('pokemons', $pokemons);
        }
    }

    public function restrictionJoueurDeux() {

        if($this->request->is('ajax')) {
            $joueur_id = $this->request->data['joueur_id'];

            $joueurs = $this->Joueur->find('all', array(
                'conditions' => array('id !=' => $joueur_id),
                'recursive' => -1
            ));
            $this->layout = 'ajax';
            $this->set('joueurs', $joueurs);
        }
    }

    public function fight() {
        if($this->request->is('ajax')) {
            $p1 = $this->Pokemon->findById($this->request->data['P1']);
            $p2 = $this->Pokemon->findById($this->request->data['P2']);
            $this->layout = 'ajax';
            $this->set('p1' , $p1);
            $this->set('p2' , $p2);
        }
    }
}