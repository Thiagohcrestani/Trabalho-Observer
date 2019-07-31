<?php 

class Observer1 implements InterfaceObserver {

    private $id = 20;

    public function notify($id) {
        if($this->id == $id) {
            echo "O Pedido " . $this->id . " está pronto!!!<br>";
        }
    }

}