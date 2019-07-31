<?php 

class Observer3 implements InterfaceObserver {

    public function notify($id){
        echo "Verificar, o pedido " . $id . " não é o meu!!!<br>";
    }

}