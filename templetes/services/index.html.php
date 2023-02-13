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
            <?php if(in_array('3-1-0',$d)){?>
            <a class="btn btn-success btn-sm " style="margin-left:900px;"  href="index.php?controller=service&task=new">Nouveau</a>
            <?php }?>
              <h5 class="card-title">NOS SERVICES</h5>

			  <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom du service</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
<?php foreach ($service as $serv) : ?>
                     <tr>
                      <th scope="row"><?= $serv['idService'] ?></th>
                      <td><?= $serv['nom_service'] ?></td>
                      <td>
                      <?php if(in_array('3-2-0',$d)){?>
    <a class="btn btn-info btn-sm" href="index.php?controller=service&task=new&id=<?= $serv['idService'] ?>">Modifier</a>
    <?php }?>
      <?php if(in_array('3-3-0',$d)){?>
    <a class="btn btn-danger btn-sm" href="index.php?controller=service&task=delete&id=<?= $serv['idService'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet serv ?!`)">Supprimer</a>
    <?php }?>
  </td>
    </tr>
 
    <?php endforeach ?>  
     </tbody>