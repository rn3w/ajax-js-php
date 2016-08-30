<?php
if(isset($_POST) && isset($_POST['keystrokes'])){

    header('Content-Type: application/json');
 
    $resultado = $_POST['keystrokes'];
    
	echo json_encode(array(
        'status' => 1,
        'result' => $resultado,
		'message' => "Todo bien"
    ), true);
}