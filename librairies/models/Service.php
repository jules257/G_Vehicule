<?php

namespace Models;
class Service extends Model
{

    protected $table="service";
    protected $table_id="idService";
    function insert(string $nom_service):void{
    $query =   $this->pdo->prepare('INSERT INTO service 
    SET nom_service = :nom_service');
    $query->execute(compact('nom_service'));
    } 
    
    function update(string $nom_service,int $idService):void{
        $query =$this->pdo->prepare('UPDATE  service 
        SET nom_service = :nom_service WHERE idService=:idService');
        $query->execute(compact('nom_service','idService'));
        }
}