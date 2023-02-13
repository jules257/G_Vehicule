<?php  if(@$_SESSION['Profile']){
$d=array();
foreach ($_SESSION['droits'] as $ress) {
array_push($d,$ress['menu_droit']);
}
}?>

<div class="row mt-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <?php if(in_array('4-1-0',$d)){?>
            <a class="btn btn-success btn-sm " style="margin-left:900px;"  href="index.php?controller=fournisseur&task=new">Nouveau</a>
            <?php }?>
              <h5 class="card-title">NOS FOURNISSEURS</h5>

			  <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Lieu de travail</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
<?php foreach ($fournisseur as $f) : ?>
    <tr>
                      <th scope="row"><?= $f['idF'] ?></th>
                      <td><?= $f['nomF'] ?></td>
                      <td><?= $f['lieu_travail'] ?></td>
                      <td><?= $f['telephone'] ?></td>
                      <td>
                      <?php if(in_array('4-2-0',$d)){?>
    <a class="btn btn-info btn-sm" href="index.php?controller=fournisseur&task=new&id=<?= $f['idF'] ?>">Modifier</a>
    <?php }?>
    <?php if(in_array('4-3-0',$d)){?>
    <a class="btn btn-danger btn-sm" href="index.php?controller=fournisseur&task=delete&id=<?= $f['idF'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet f ?!`)">Supprimer</a>
    <?php }?>
  </td>
    </tr>
           
    <?php endforeach ?>
    </tbody>