<?php
namespace Models;
class Fournisseur extends Model
{

    protected $table="fournisseur";
    protected $table_id="idF";
    function insert(string $nomF, string $lieu_travail,string $telephone):void{
    $query =   $this->pdo->prepare('INSERT INTO fournisseur SET nomF = :nomF, lieu_travail = :lieu_travail, telephone = :telephone');
    $query->execute(compact('nomF', 'lieu_travail', 'telephone'));
    } 
    
    function update(string $nomF, string $lieu_travail,string $telephone,int $idF):void{
        $query =   $this->pdo->prepare('UPDATE fournisseur SET nomF =:nomF, lieu_travail =:lieu_travail, telephone=:telephone WHERE idF=:idF');
        $query->execute(compact('nomF', 'lieu_travail', 'telephone','idF'));
        
    }
}