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

    public function delete($id){
        if(!$id){
            throw new NotFoundException("pokemon not found");
        }elseif ($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if ($this->Pokemon->delete($id)){
            $this->Session->setFlash(__("Pokemon %s successfully deleted", h($joueur['Joueur']['pseudonyme'])));
        }else{
            $this->Session->setFlash(__("Failed"));
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
            $p1 = new Pokemon();
            $p1->data = $this->Pokemon->findById($this->request->data['P1']);
            $p2 = new Pokemon();
            $p2->data = $this->Pokemon->findById($this->request->data['P2']);
            $m1 = $p1->getMultiplicateur($p2);
            $m2 = $p1->getMultiplicateur($p2);
            $this->layout = 'ajax';
            $this->set('p1' , $p1->data);
            $this->set('p2' , $p2->data);
        }
    }
}