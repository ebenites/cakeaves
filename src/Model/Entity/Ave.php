<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Ave extends Entity{
    
    /*
     * Attributo personalizado: _getNombreCompleto == nombre_completo
     */
    public function _getNombreCompleto() {
        return isset($this->nombre)?$this->nombre:'Sin nombre';
    }
    
    /*
     * Attributo personalizado: _getPadreNombre == padre_nombre
     */
    public function _getPadreNombre() {
        return isset($this->padre)?$this->padre->id.': '.$this->padre->nombre_completo:'No definido';
    }
    
    /*
     * Attributo personalizado: _getMadreNombre == madre_nombre
     */
    public function _getMadreNombre() {
        return isset($this->madre)?$this->madre->id.': '.$this->padre->nombre_completo:'No definido';
    }
    
    /*
     * Attributo personalizado: _getGeneroCompleto == genero_completo
     */
    public function _getGeneroCompleto() {
        return ($this->genero == 'M')?'Macho':'Hembra';
    }
    
    /*
     * Attributo personalizado: _getCustomDisplayName == custom_display_name
     */
    public function _getCustomDisplayName() {
        return $this->id . ': ' . $this->nombre_completo;
    }
}
