<?php
namespace App\Controller;

class AvesController extends AppController{
    
    public function index() {
        $aves = $this->Aves->find()->contain(['Padres', 'Madres']);
        //pj($aves);
        $this->set('aves', $aves);
    }
    
    public function registrar() {
        $ave = $this->Aves->newEntity();
        
        if($this->getRequest()->is('post')){
            $ave = $this->Aves->patchEntity($ave, $this->getRequest()->getData());
            if($this->Aves->save($ave)){
                $this->Flash->success('Registro guardado satisfactoriamente');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Registro no pudo ser guardado');
        }
        
        $padres = $this->Aves->Padres->find('list');
        $this->set('padres', $padres);
        
        $madres = $this->Aves->Madres->find('list');
        $this->set('madres', $madres);
        
        $this->set('ave', $ave);
    }
    
    public function editar($id) {
        $ave = $this->Aves->get($id);
        
        if($this->getRequest()->is('put')){
            $ave = $this->Aves->patchEntity($ave, $this->getRequest()->getData());
            if($this->Aves->save($ave)){
                $this->Flash->success('Registro guardado satisfactoriamente');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Registro no pudo ser guardado');
        }
        
        $padres = $this->Aves->Padres->find('list');
        $this->set('padres', $padres);
        
        $madres = $this->Aves->Madres->find('list');
        $this->set('madres', $madres);
        
        $this->set('ave', $ave);
    }
    
    public function eliminar($id) {
        $ave = $this->Aves->get($id);
        if($this->Aves->delete($ave)){
            $this->Flash->success('Registro eliminado satisfactoriamente');
        }else{
            $this->Flash->error('Registro no pudo ser eliminado');
        }
        return $this->redirect(['action' => 'index']);
    }
    
}
