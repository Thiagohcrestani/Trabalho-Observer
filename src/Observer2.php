<?php 

class Observer2 implements InterfaceObserver {

    private $id = 40;

    public function notify($id){
        if($this->id == $id) {
            echo "Pedido " . $this->id . " está pronto!<br>";
        }
    }

}