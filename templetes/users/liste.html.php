
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
            <?php if(in_array('1-1-0',$d)){?>
            <a class="btn btn-success btn-sm " style="margin-left:900px;" href="index.php?controller=user&task=new">Nouveau</a>
            <?php }?>
              <h5 class="card-title">LISTE DES UTILISATEURS</h5>

			  <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Matricule</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">User_name</th>
                      <th scope="col">Image_profile</th>
                      <th style="width: 50%;">Actions</th>
                   
                    </tr>
                  </thead>
                  <tbody>
<?php foreach ($user as $users) : ?>
    <tr>
                      <th scope="row"><?= $users['id_user'] ?></th>
                      <td><?= $users['matricule'] ?></td>
                      <td><?= $users['nom'] ?></td>
                      <td><?= $users['prenom'] ?></td>
                      <td><?= $users['telephone'] ?></td>
                      <td><?= $users['username'] ?></td>
                      <td> <img src="assets/img/<?= $users['photo'] ?>" width="50px" height="50px" alt="" srcset="" class="img-thumbnail"></td>
                      <td>
                      <?php if(in_array('1-2-0',$d)){?>
                      <a class=" btn-info btn-sm" href="index.php?controller=user&task=new&id=<?= $users['id_user'] ?>"><i class="zmdi zmdi-edit"></i></a>
                      <?php }?>
                        <?php if(in_array('1-3-0',$d)){?>
                      <a class=" btn-danger btn-sm" href="index.php?controller=user&task=delete&id=<?= $users['id_user'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet users ?!`)"><i class="zmdi zmdi-delete"></i></a>
                      <?php }?>
                        <?php if(in_array('1-4-0',$d)){?>
                      <a title="Donnees droit" class=" btn-success btn-sm" href="index.php?controller=user&task=droits&id=<?= $users['id_user'] ?>"><i class="zmdi zmdi-account"></i><i class="zmdi zmdi-edit"></i></a>
                      <?php }?>
</td>

    </tr>
               
    <?php endforeach ?>
    </tbody>
               </table>
    <script>
function myFunction(){
  var kkk=document.getElementById('kkk');
  kkk.style.display="block";
}



   

    </script>