<?php
namespace Controllers;

class Service extends Controller{
protected $modelName= \Models\Service::class;

public function index(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
    $service =$this->model->findAll();
    
    /**
     * 3. Affichage
     */
    $pageTitle ='LISTE DES SERVICES';
    \Renderer::render('services/index',compact('pageTitle','service'));
    
        }
        public function new(){
            if(!isset($_SESSION['Profile'])){ 
                \Http::redirect('index.php');
            }
            if(!empty($_GET['id'])){
                $service=$this->model->find($_GET['id']);
                if (!$service) {
                    die("Ho ! service n'existe pas boloss !");
                }
                else{

                    $pageTitle ='EDITION DU SERVICE';
                    \Renderer::render('services/new',compact('pageTitle','service'));
  
                }
            }else{

        
           
            // Si rien n'est revenu, on fait une erreur
           
            
            /**
             * 3. Affichage
             */
            $pageTitle ='NOUVEAU SERVICE';
            \Renderer::render('services/new',compact('pageTitle'));
            }
                }

public function insert(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
// On commence par l'author


$nom_service = null;
if(!empty($_POST['nom_service'])) 
{
$nom_service = $_POST['nom_service'];
}


// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$nom_service){
    die("Votre formulaire a été mal rempli !");
}



if(!isset($_POST['idS'])){
// 3. Insertion du commentaire
$this->model->insert($nom_service);
}
// 4. Redirection vers l'article en question :
/*header('Location: article.php?id=' . $article_id);
exit();*/

    if(isset($_POST['idService'])){
        $id=$_POST['idService'];
        $this->model->update($nom_service,$id);    
    }

    \Http::redirect('index.php?controller=service&task=index');

}

public function delete(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
/**
 * DANS CE FICHIER ON CHERCHE A SUPPRIMER LE COMMENTAIRE DONT L'ID EST PASSE EN PARAMETRE GET !
 * 
 * On va donc vérifier que le paramètre "id" est bien présent en GET, qu'il correspond bien à un commentaire existant
 * Puis on le supprimera !
 */

/**
 * 1. Récupération du paramètre "id" en GET
 */
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ! Fallait préciser le paramètre id en GET !");
}

$id = $_GET['id'];



/**
 * 3. Vérification de l'existence du commentaire
 */
$commentaire =$this->model->find($id);
if (!$commentaire) {
    die("Aucun fournisseur n'a l'identifiant $id !");
}

/**
 * 4. Suppression réelle du commentaire
 * On récupère l'identifiant de l'article avant de supprimer le commentaire
 */
$id = $commentaire['idService'];

$this->model->delete($id);

/**
 * 5. Redirection vers l'article en question
 */

\Http::redirect("index.php?controller=service&task=index");

}



}