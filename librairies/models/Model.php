<?php
namespace Models;

abstract class Model{
    
    protected $pdo;
    protected $table;
    protected $table_id;

    public function __construct(){
        $this->pdo=\Database::getPdo();

    }


    public function findAll(?string $order=""):array{
        $sql="SELECT * FROM {$this->table}";
        if($order){
            $sql .= " ORDER BY ".$order;
        }
        $resultats =   $this->pdo->query($sql);
        $item = $resultats->fetchAll();
        return $item;
        }
    /** 
        *trouver l'article par son id
        *
      *@param integer $article_id
       *
       */
  public function find(int $id){
    $query =   $this->pdo->prepare("SELECT * FROM {$this->table} WHERE {$this->table_id} = :id");
    $query->execute(['id' => $id]);
    $item = $query->fetch();
    return $item;
    }
    public function auth(){

     
        \Http::redirect('index.php');
    }




    /** 
        *supprimer l'article par son id
        *
      *@param integer $article_id
       *
       */
      public function delete(int $id):void{
        $query =   $this->pdo->prepare("DELETE FROM {$this->table} WHERE {$this->table_id} = :id");
        $query->execute(['id' => $id]);
    
    }

}