<?php

require_once('app/HabitacionModel.php');
require_once('app/HabitacionView.php');

class HabController {
    private $model_hab;
    private $view;

    public function __construct() {
        $this->model_hab = new HabModel();
        $this->view = new View();    
    }
        
    function showHome(){
        $habitaciones = $this->model_hab->getAll();
        $this->view->ShowHome($habitaciones);
    }
   
    function show(){
        $habitaciones = $this->model_hab->getAll();
        $habdisponibles=array();
    
        foreach($habitaciones as $habitacion){
            if ($habitacion->ocupada==false){
              $habdisponibles[]=$habitacion;  }     
            }
           
            $this->view->Show($habdisponibles);
        }
              


    function showCapacity(){
        $habitaciones = $this->model_hab->getAll();
        $capacidad=0;
        foreach($habitaciones as $habitacion){
            $capacidad += $habitacion->cant_camas;
        }
        
        $this->view->ShowCapacity($capacidad, $habitaciones);
    }
   
    function add(){
        $nro_habitacion = $_POST['nro_habitacion'];
        $cant_camas = $_POST['cant_camas'];
        $descripcion = $_POST['descripcion'];
        
        if (!empty($_POST['nro_habitacion'])&&isset($_POST['nro_habitacion'])&&!empty($_POST['cant_camas'])&&
        isset($_POST['cant_camas'])&&!empty($_POST['descripcion'])&&isset($_POST['descripcion'])){

        $nro_habitacion = $_POST['nro_habitacion'];
        $cant_camas = $_POST['cant_camas'];
        $descripcion = $_POST['descripcion'];
        $ocupacion = $_POST['ocupacion'];
        }
        $id = $this->model_hab->insertHab($nro_habitacion, $cant_camas, $descripcion, $ocupacion);
        header("Location: " . BASE_URL . "homenuevo"); 
        
        
    }
 }

