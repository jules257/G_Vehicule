<?php
namespace Controllers;

class Droit extends Controller{
protected $modelName= \Models\Droit::class;

public function insert(){
    if(!isset($_SESSION['Profile'])){ 
        \Http::redirect('index.php');
    }
// On commence par l'author


if($_POST['affecter']){
    $user=$_POST['user'];
    for($i=0;$i<count($_POST['droit']);$i++){
    $droit=$_POST['droit'][$i];
    echo $droit.'<br>';
   $n =$this->model->verifierdroit($user,$droit);
    if($n==0){
    $this->model->insert($user,$droit);  
    }
}

\Http::redirect('index.php?controller=user&task=index');

}
else if($_POST['desafecter']){
    $user=$_POST['user'];
    for($i=0;$i<count($_POST['droit']);$i++){
    $droit=$_POST['droit'][$i];
    $this->model->desafecter($user,$droit);  
}
\Http::redirect('index.php?controller=user&task=index');
}
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