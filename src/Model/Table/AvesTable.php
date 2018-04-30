<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use \Cake\Validation\Validator;

class AvesTable extends Table{
    
    public function initialize(array $config) {
        
        $this->setTable('aves');
        $this->setPrimaryKey('id');
        
        $this->belongsTo('Padres', ['className' => 'Aves'])
                ->setForeignKey('padre_id')
                ->setConditions(['Padres.genero' => 'M'])
                ->setProperty('padre');
        
        $this->belongsTo('Madres', ['className' => 'Aves'])
                ->setForeignKey('madre_id')
                ->setConditions(['Madres.genero' => 'H'])
                ->setProperty('madre');
        
        $this->setDisplayField('custom_display_name');
        
    }
    
    public function validationDefault(Validator $validator) {
        
        $validator->notEmpty('genero'); // Genero no puede quedar vacío
        
        return $validator;
    }
    
}
