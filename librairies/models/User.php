<?php

namespace Models;
class User extends Model
{

    protected $table="user";
    protected $table_id="id_user";
    function insert(string $matricule, string $nom,string $prenom,string $username,string $telephone,string $role,int $etat,string $password,string $photo):void{
    $query =   $this->pdo->prepare('INSERT INTO user 
    SET matricule = :matricule, nom = :nom, prenom = :prenom, username = :username,telephone = :telephone, role = :role,etat = :etat,password=:password,photo=:photo' );
    $query->execute(compact('matricule', 'nom','prenom', 'username','telephone','role', 'etat','password','photo'));
    } 
    
    function update(string $matricule, string $nom,string $prenom,string $username,string $telephone,string $role,int $etat,string $password,string $photo,int $id_user):void{
        $query =$this->pdo->prepare('UPDATE  user
        SET matricule = :matricule, nom = :nom, prenom = :prenom, username = :username,telephone = :telephone, role = :role,etat = :etat,password=:password ,photo=:photo WHERE id_user=:id_user');
        $query->execute(compact('matricule', 'nom','prenom', 'username','telephone','role', 'etat','password','photo','id_user'));
        }
    function login($username,$password){
            $query =   $this->pdo->prepare("SELECT * FROM user WHERE
             username ='$username'AND password='$password'");
            $query->execute();
            $item = $query->fetch();
            return $item;
        }


            function droits($u){
            $resultats =   $this->pdo->query("SELECT * from  droit Where user='$u'");
                $item = $resultats->fetchAll();
                return $item;
                }
         


    }