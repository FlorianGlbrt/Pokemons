<?php

/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:03
 */
class JoueursController extends AppController
{
    public $uses = array('Pokemon', 'Joueur','Type','Pokedex');
    public $helpers = array('Html','Form','Session','Js');
    public $components = array('Session','RequestHandler');
    public $layout = 'default';

    public function index(){
        $this->set('joueurs',$this->Joueur->find('all'));
        $this->set('pokedexs',$this->Pokedex->find('all'));
    }

    public function add(){
        $this->set('joueurs',$this->Joueur->find('all'));


        if ($this->request->is('post')){
            $this->Joueur->create();
            if ($this->Joueur->save($this->request->data)){
                $this->Session->setFlash(__("Joueur added successfully"));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__("failed"));
        }
    }

    public function delete($id){
        if(!$id){
            throw new NotFoundException("joueur not found");
        }elseif ($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        $joueur = $this->Joueur->findById($id);
        foreach ($joueur['Pokemon'] as $pokemon):
            $this->Pokemon->delete($pokemon['id']);
        endforeach;
        if ($this->Joueur->delete($id)){
            $this->Session->setFlash(__("joueur %s successfully deleted", h($joueur['Joueur']['pseudonyme'])));
        }else{
            $this->Session->setFlash(__("Failed"));
        }
        return $this->redirect(array('action' => 'index'));
    }

}