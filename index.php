<!-- vorrei che definiste una classe PHP che modella il concetto di una "Stanza di Hotel"; 
oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore 
che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. 
Infine, implementate anche una funzione che, quando invocata sull'oggetto, 
stampi il contenuto di tutte le sue proprieta'. 
Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto -->




<?php
 
 class Hotel{

    public $room;
    public $bagno_options;
    public $room_view;

    function __construct($room,$bagno_options,$room_view) {
        $this->room = $room;
        $this->bagno_options = $bagno_options;
        $this->room_view = $room_view;
        }
        

        public function getRoom() {
            return $this->room;
        }

        public function getBagno_options() {
            return $this->bagno_options;
        }

        public function getRoom_view() {
            return $this->room_view;
        }
        
        
 }
 $room_one = new Hotel('01', 'doccia in camera', 'vista sul parcheggio');

    echo '<p> La stanza è la numero: ' . $room_one->getRoom() . '</p>';
    echo '<p> La stanza ha una ' . $room_one->getBagno_options() . '</p>';
    echo '<p> La stanza ha una: ' . $room_one->getRoom_view() . '</p>';

    echo '<br>';

    $room_two = new Hotel('02', 'doccia in camera e una vasca idromassaggio', 'vista sul mare');

    echo '<p> La stanza è la numero: ' . $room_two->getRoom() . '</p>';
    echo '<p> La stanza ha una ' . $room_two->getBagno_options() . '</p>';
    echo '<p> La stanza ha una ' . $room_two->getRoom_view() . '</p>';

    
  
     
  
?>