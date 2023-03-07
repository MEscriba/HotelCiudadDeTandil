<?php

require_once('libs/smarty/Smarty.class.php');

class View {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function ShowHome($habitaciones) {
        // asigno variables al tpl smarty
     
        $this->smarty->assign('habitaciones', $habitaciones); 
        // mostrar el tpl
        $this->smarty->display('homenuevo.tpl');
                
    }

    public function Show($habdisponibles) {
        // asigno variables al tpl smarty
        $this->smarty->assign('habdisponibles', $habdisponibles); 
        // mostrar el tpl
        $this->smarty->display('habdisponibles.tpl');
                
    }

    public function ShowCapacity($capacidad, $habitaciones) {
        $this->smarty->assign('capacidad', $capacidad); 
        $this->smarty->assign('habitaciones', $habitaciones); 
        // mostrar el tpl
        $this->smarty->display('capacidad.tpl');

    }
   
    
    public function showError(){

    }
}