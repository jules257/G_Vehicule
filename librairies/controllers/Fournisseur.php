<?php
namespace Controllers;

class Fournisseur extends Controller{
protected $modelName= \Models\Fournisseur::class;

public function index(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
    $fournisseur =$this->model->findAll();   
    /**
     * 3. Affichage
     */
    $pageTitle ='LISTE DES FOURNISSEURS';
    \Renderer::render('fournisseurs/index',compact('pageTitle','fournisseur'));
    
        }
        public function new(){
            if(!empty($_GET['id'])){
                $fournisseur=$this->model->find($_GET['id']);
                if (!$fournisseur) {
                    die("Ho ! fournisseur n'existe pas boloss !");
                }
                else{

                    $pageTitle ='EDITION DU FOURNISSEUR';
                    \Renderer::render('fournisseurs/new',compact('pageTitle','fournisseur'));
  
                }
            }else{
            // Si rien n'est revenu, on fait une erreur
            
            /**
             * 3. Affichage
             */
            $pageTitle ='NOUVEAU FOURNISSEUR';
            \Renderer::render('fournisseurs/new',compact('pageTitle'));
            }
                }

public function insert(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
// On commence par l'author


$nomF = null;
if (!empty($_POST['nomF'])) 
{
$nomF = $_POST['nomF'];
}

// Ensuite le contenu
$lieu_travail = null;
if (!empty($_POST['lieu_travail'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $lieu_travail = htmlspecialchars($_POST['lieu_travail']);
}

// Enfin l'id de l'article
$telephone = null;
if (!empty($_POST['telephone'])) {
    $telephone = $_POST['telephone'];
}

// Vérification finale des infos envoyées dans le formulaire (donc dans le POST)
// Si il n'y a pas d'auteur OU qu'il n'y a pas de contenu OU qu'il n'y a pas d'identifiant d'article
if (!$nomF || !$lieu_travail || !$telephone) {
    die("Votre formulaire a été mal rempli !");
}



// 3. Insertion du commentaire
if(!isset($_POST['idF'])){
$this->model->insert($nomF,$lieu_travail,$telephone);
}
// 4. Redirection vers l'article en question :
/*header('Location: article.php?id=' . $article_id);
exit();*/

    if($_POST['idF']){
        $id=$_POST['idF'];
        $this->model->update($nomF,$lieu_travail,$telephone,$id);    
    }

    \Http::redirect('index.php');

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
$id = $commentaire['idF'];

$this->model->delete($id);

/**
 * 5. Redirection vers l'article en question
 */

\Http::redirect("index.php");

}



}