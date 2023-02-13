<?php
namespace Controllers;

class Vehicule extends Controller{
protected $modelName= \Models\Vehicule::class;

public function index(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
    $vehicule =$this->model->findVehicule_andFourn();

    $serviceK=new \Models\Service();
    $service=$serviceK->findAll('idService DESC');
    /**
     * 3. Affichage
     */
    $pageTitle ='LISTE DES Vehicule';
    \Renderer::render('vehicules/index',compact('pageTitle','vehicule','service'));
    
        }

        public function new(){
            if(!isset($_SESSION['Profile'])){ 
                \Http::redirect('index.php');
            }
            $fournisseurKey=new \Models\Fournisseur();
            $fournisseur=$fournisseurKey->findAll('idF DESC');
            if(!empty($_GET['id'])){
                $vehicule=$this->model->find($_GET['id']);
              
                if (!$vehicule) {
                    die("Ho ! vehicule n'existe pas boloss !");
                }
                else{

                    $pageTitle ='EDITION DU VEHICULE';
                    \Renderer::render('vehicules/new',compact('pageTitle','vehicule','fournisseur'));
  
                }
            }else{

        
           
         //$fournisseur=$this->fournisseurKey->findAsForeign($_GET['id']);
           
            
            /**
             * 3. Affichage
             */
            $pageTitle ='NOUVEAU VEHICULE';
            \Renderer::render('vehicules/new',compact('pageTitle','fournisseur'));
            }
                }

public function insert(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
    $immatriculation=null;
    $marque=null;
    $type=null;
    $numero_chassis=null;
    $date_achat=null;
    $dure_ammortissement=null;
    $idF=null;

    if (!empty($_POST['immatriculation'])) {
$immatriculation=$_POST['immatriculation'] ;
}
if (!empty($_POST['marque'])) {
$marque=$_POST['marque'];
}
if (!empty($_POST['type'])) {
$type=$_POST['type'];
}
if (!empty($_POST['numero_chassis'])) {
$numero_chassis=$_POST['numero_chassis'];
}
if (!empty($_POST['date_achat'])) {
$date_achat=$_POST['date_achat'] ;
}
if (!empty($_POST['dure_ammortissement'])) {
$dure_ammortissement=$_POST['dure_ammortissement'];
}
if (!empty($_POST['idF'])) {
$idF=$_POST['idF']; 
}

// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$immatriculation || !$marque || !$type|| !$numero_chassis|| !$date_achat|| !$dure_ammortissement|| !$idF) {
    die("Votre formulaire a été mal rempli !");
}


 if(!isset($_POST['id'])){
// 3. Insertion du commentaire
$this->model->insert($immatriculation,$marque,$type,$numero_chassis,$date_achat,$dure_ammortissement,$idF);
 }
// 4. Redirection vers l'article en question :
/*header('Location: article.php?id=' . $article_id);
exit();*/

    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $this->model->update($immatriculation,$marque,$type,$numero_chassis,$date_achat,$dure_ammortissement,$idF,$id);    
    }

    \Http::redirect('index.php?controller=vehicule&task=index');

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
    die("Aucun vehicule n'a l'identifiant $id !");
}
$id = $commentaire['idV'];
$this->model->delete($id);
\Http::redirect("index.php?controller=vehicule&task=index");

}


public function desafecter(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }

$id = $_GET['id'];

$this->model->desaffecter($id);
\Http::redirect("index.php?controller=vehicule&task=v_service");

}


public function affectation(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
    $idService=null;
    $idV=null;
    $dateaffectation=null;

    if (!empty($_POST['idService'])) {
$idService=$_POST['idService'] ;
}
if (!empty($_POST['idV'])) {
$idV=$_POST['idV'];
}
if (!empty($_POST['dateaffectation'])) {
$dateaffectation=$_POST['dateaffectation'];
}


// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$idService || !$idV || !$dateaffectation) {
    die("Votre formulaire a été mal rempli !");
}

// 3. Insertion du commentaire
$this->model->affecter($idService,$idV,$dateaffectation);



    \Http::redirect('index.php?controller=vehicule&task=index');

}


public function v_service(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }

    $vehicule =$this->model->findVehicule_services();

    $serviceK=new \Models\Service();
    $service=$serviceK->findAll('idService DESC');
    
    /**
     * 3. Affichage
     */
    $pageTitle ='LISTE DES VEHICULES ET LES SERVICES DANS LESQUELLES SONT AFFECTES';
    \Renderer::render('vehicules/service_vehicule',compact('pageTitle','vehicule','service'));
    
        }


}