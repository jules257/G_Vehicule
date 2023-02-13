<?php
namespace Controllers;

class User extends Controller{
protected $modelName= \Models\User::class;

public function index(){
    if(!isset($_SESSION['Profile'])){ 
        \Renderer::render('users/index');
    }else{
    $user =$this->model->findAll();
    /**
     * 3. Affichage
     */
    $pageTitle ='LISTE DES UTILISATEURS';
    \Renderer::render('users/liste',compact('pageTitle','user'));
    }
        }

        public function login(){
            session_start();
            $username=null;
            $password=null;
        
            if (!empty($_POST['username'])) {
        $username=$_POST['username'] ;
        }
        if (!empty($_POST['password'])) {
        $password=$_POST['password'];
        }
        
        // Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
        // Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
        if (!$username || !$password) {
            die("Votre formulaire a été mal rempli !");
        }
        // 3. Insertion du user
        $user =$this->model->login($username,$password);
        if($user){

            $_SESSION['Profile']=$user;
            $_SESSION['droits']=$this->model->droits($_SESSION['Profile']['id_user']);

            \Http::redirect('index.php?controller=vehicule&task=index');
        }
        else{
        $_SESSION['message']='<div class="alert alert-danger">Wapi vyase subira ugerageze washizemwo ibikuranga atarivyo!!!</div>';
        \Http::redirect('index.php?controller=user&task=index');
        
        }
        
        
        
        }
        
        
        public function new(){

            if(!empty($_GET['id'])){
                $user=$this->model->find($_GET['id']);
              
                if (!$user) {
                    die("Ho ! utilisateur n'existe pas boloss !");
                }
                else{

                    $pageTitle ="EDITION D'UN UTILISATEURS";
                    \Renderer::render('users/new',compact('pageTitle','user'));
  
                }
            }else{

        
           
         //$fournisseur=$this->fournisseurKey->findAsForeign($_GET['id']);
           
            
            /**
             * 3. Affichage
             */
            $pageTitle ='NOUVEL UTILISATEUR';
            \Renderer::render('users/new',compact('pageTitle'));
            }
                }

public function insert(){
    $matricule=null;
    $nom=null;
    $prenom=null;
    $username=null;
    $telephone=null;
    $role=null;
    $etat=null;
    $password=null;

if (!empty($_POST['matricule'])) {
$matricule=$_POST['matricule'] ;
}
if (!empty($_POST['nom'])) {
$nom=$_POST['nom'];
}
if (!empty($_POST['prenom'])) {
$prenom=$_POST['prenom'];
}
if (!empty($_POST['username'])) {
$username=$_POST['username'];
}
if (!empty($_POST['telephone'])) {
$telephone=$_POST['telephone'] ;
}
if (!empty($_POST['role'])) {
$role=$_POST['role'];
}
if (!empty($_POST['etat'])) {
$etat=$_POST['etat']; 
}
if (!empty($_POST['password'])) {
    $password=$_POST['password']; 
    }

    $filename = $_FILES['photo']['name'];
    if(!empty($_FILES['photo']['name'])){
    // Upload file
    move_uploaded_file($_FILES['photo']['tmp_name'],'assets/img/'.$filename);// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
    }
    // Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$matricule || !$nom || !$prenom|| !$username|| !$telephone|| !$role|| !$etat|| !$password) {
    die("Votre formulaire a été mal rempli !");
}



 if(empty($_POST['id'])){
// 3. Insertion du user
$this->model->insert($matricule,$nom,$prenom,$username,$telephone,$role,$etat,$password,$filename);
\Http::redirect('index.php?controller=user&task=new');

}


// 4. Redirection vers l'article en question :
/*header('Location: article.php?id=' . $article_id);
exit();*/

    elseif(!empty($_POST['id'])){
        if($filename==""){
            $filename =$_SESSION['Profile']['photo'];
        }
        $id=$_POST['id'];

        $this->model->update($matricule,$nom,$prenom,$username,$telephone,$role,$etat,$password,$filename,$id);    
    
        \Http::redirect('index.php?controller=user&task=index');
    
    }

  

}







public function connexion(){
    /**
     * 3. Affichage
     */
    $pageTitle ='AUTHENTIFICATION';
    \Renderer::render('users/index',compact('pageTitle'));
    
        }
        public function logout(){
            $pageTitle ='AUTHENTIFICATION';
           // session_start();
            session_destroy();
            \Http::redirect('index.php');   
    
    
    }





    public function delete(){
        if(!isset($_SESSION['Profile'])){ 
            \Http::redirect('index.php');
        }
   
    if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
        die("Ho ! Fallait préciser le paramètre id en GET !");
    }
    
    $id = $_GET['id'];
    $commentaire =$this->model->find($id);
    if (!$commentaire) {
        die("Aucun fournisseur n'a l'identifiant $id !");
    }
    
    $id = $commentaire['id_user'];
    
    $this->model->delete($id);
    \Http::redirect("index.php");
    
    }

    public function droits(){
        if(!isset($_SESSION['Profile'])){ 
            \Renderer::render('users/index');
        }else{
            $id = $_GET['id'];
        $user =$this->model->find($id);
        $droits=$this->model->droits($id);
        /**
         * 3. Affichage
         */
        $pageTitle ='LISTE DES UTILISATEURS';
        \Renderer::render('users/droit',compact('pageTitle','user','droits'));
        }
            }
             


}