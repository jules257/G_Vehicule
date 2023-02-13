<?php

namespace Models;
class Vehicule extends Model
{

    protected $table="vehicule";
    protected $table_id="idV";
    function insert(string $immatriculation, string $marque,string $type,string $numero_chassis,string $date_achat,string $dure_ammortissement,int $idF):void{
    $query =   $this->pdo->prepare('INSERT INTO vehicule 
    SET immatriculation = :immatriculation, marque = :marque, type = :type, numero_chassis = :numero_chassis,date_achat = :date_achat, dure_ammortissement = :dure_ammortissement,idF=:idF');
    $query->execute(compact('immatriculation', 'marque','type', 'numero_chassis','date_achat','dure_ammortissement','idF'));
    } 
    
    function update(string $immatriculation, string $marque,string $type,string $numero_chassis,string $date_achat,string $dure_ammortissement,int $idF,string $idV):void{
        $query =$this->pdo->prepare('UPDATE  vehicule 
        SET immatriculation = :immatriculation, marque = :marque, type = :type, numero_chassis = :numero_chassis,date_achat = :date_achat, dure_ammortissement = :dure_ammortissement,idF=:idF WHERE idV=:idV');
        $query->execute(compact('immatriculation', 'marque','type', 'numero_chassis','date_achat','dure_ammortissement','idF','idV'));
        }


        function affecter(int $idService, int $idV,string $dateaffectation):void{
            $query =   $this->pdo->prepare('INSERT INTO affecter 
            SET idService = :idService, idV = :idV, dateaffectation = :dateaffectation');
            $query->execute(compact('idService','idV','dateaffectation'));
            } 




            
    public function findVehicule_services():array{
        $sql="SELECT * FROM vehicule inner join affecter on vehicule.idV=affecter.idV inner join service on service.idService=affecter.idService";
        
        $resultats =$this->pdo->query($sql);
        $item = $resultats->fetchAll();
        return $item;
        }



      




         
public function findVehicule_andFourn():array{
    $sql="SELECT * FROM vehicule inner join fournisseur on fournisseur.idF=vehicule.idF";
    $resultats =$this->pdo->query($sql);
    $item = $resultats->fetchAll();
    return $item;
    }
    public function desaffecter(int $id):void{
        $query = $this->pdo->prepare("DELETE FROM affecter WHERE idaff = :id");
        $query->execute(['id'=> $id]);
    
    }

}