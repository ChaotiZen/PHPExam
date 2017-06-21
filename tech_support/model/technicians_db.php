<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function list_technicians()
{
    global $db;
    $query = 'SELECT firstName, lastName, email, phone, password, techID
             FROM technicians';
    $statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
    return $technicians;
   
}

function delete_technician($techID)
{
    global $db;
    $query = 'DELETE FROM technicians WHERE techID = :techID';
    $statement = $db->prepare($query);
    $statement->bindValue(':techID', $techID);
    $statement->execute();
    $statement->closeCursor();
}

?>