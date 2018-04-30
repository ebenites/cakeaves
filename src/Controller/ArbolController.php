<?php
namespace App\Controller;

class ArbolController extends AppController{
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Aves');
    }
    
    public function index() {
        $aves = $this->Aves->find();
        
        $items = [];
        foreach($aves as $ave){
            $item = [
                'id' => $ave->id,
                'title' => $ave->custom_display_name,
                'description' => "Género: $ave->genero_completo \n Nacimiento: $ave->nacimiento \n Descripción: $ave->descripcion",
                
            ];
            
            // Padre y Madre
            if(isset($ave->padre_id)){
                $item['parents'][] = $ave->padre_id;
            }
            if(isset($ave->madre_id)){
                $item['parents'][] = $ave->madre_id;
            }
            
            $items[] = $item;
        }
        
//        pj($items);
        
        $this->set('items', $items);
    }
    
}
