<?php
require ('..\model\database.php');
require ('..\model\technicians_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_technicians';
    }
}

if($action == 'show_technicians'){
    
    $technicians = list_technicians();
    include ('technician_list.php');
    
}else if ($action == 'delete_technician'){
    $techID = filter_input(INPUT_POST, 'techID');
    $technicians = delete_technician($techID);
    header("Location: .");
}