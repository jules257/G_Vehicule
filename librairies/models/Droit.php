<?php

namespace Models;
class Droit extends Model
{

    protected $table="droit";
    protected $table_id="id_droit";
    function insert(int $user,string $menu_droit):void{
    $query =   $this->pdo->prepare('INSERT INTO droit 
    SET user = :user,menu_droit=:menu_droit');
    $query->execute(compact('user','menu_droit'));
    } 
    
    function verifierdroit(int $user,string $menu_droit){
        $query =$this->pdo->prepare("SELECT count(*) as n  from  droit WHERE user=:user and menu_droit='$menu_droit'");
        $query->execute(['user' => $user ]);
        $items = $query->fetch();
        $item=$items['n'];
        return $item;
        }


        public function  desafecter(int $id,string $menu_droit){
            $query =   $this->pdo->prepare("DELETE FROM droit WHERE user = :user and menu_droit=:menu_droit");
            $query->execute(['user' => $id,'menu_droit' => $menu_droit]);
        }
}