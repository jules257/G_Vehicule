<?php include('include/fonctiontime.php');?>

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
            <?php if(in_array('2-1-0',$d)){?>
            <a class="btn btn-success btn-sm " style="margin-left:900px;" href="index.php?controller=vehicule&task=new">Nouveau</a>
            <?php }?>
              <h5 class="card-title">NOS VEHICULES</h5>

			  <div class="table-responsive">
               <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Immatriculation</th>
                      <th scope="col">Marque</th>
                      <th scope="col">Type</th>
                      <th scope="col">Numero_Chassiss</th>
                      <th scope="col">Date d'achat</th>
                      <th scope="col">Duree d'ammortissement</th>
                      <th scope="col">Fournisseur</th>
                      <th style="width: 50%;">Actions</th>
                      <th style="width: 50%;">Plus</th>
                    </tr>
                  </thead>
                  <tbody>
<?php foreach ($vehicule as $article) : ?>
    <tr>
                      <th scope="row"><?= $article['idV'] ?></th>
                      <td><?= $article['immatriculation'] ?></td>
                      <td><?= $article['marque'] ?></td>
                      <td><?= $article['type'] ?></td>
                      <td><?= $article['numero_chassis'] ?></td>
                      <td><?= $article['date_achat'] ?></td>
                      <td><?= $article['dure_ammortissement'].'ans';
                      
                  date_anne($article['date_achat'],$article['dure_ammortissement']);                     
                      
                      ?></td>
                      <td><?= $article['nomF'] ?></td>
                      <td>
                      <?php if(in_array('2-2-0',$d)){?>
                   
                        <a class=" btn-info btn-sm" href="index.php?controller=vehicule&task=new&id=<?= $article['idV'] ?>"><i class="zmdi zmdi-edit"></i></a>
                        <?php }?>
                        <?php if(in_array('2-3-0',$d)){?>
                        <a class=" btn-danger btn-sm" href="index.php?controller=vehicule&task=delete&id=<?= $article['idV'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)"><i class="zmdi zmdi-delete"></i></a>
                           <?php }?>
</td>
<td>
<?php if(in_array('2-4-0',$d)){?>
      <a onclick=" myFunction(<?= $article['idV'] ?>)" data-toggle="modal" data-target="#exampleModalCenter" class="aff nav-link dropdown-toggle btn-sm  btn-warning " >
      Affecter dans une service
      </a>
      
         <?php }?>
  </td>
    </tr>
               
    <?php endforeach ?>
    </tbody>
      </table>



<!-- Modal -->
<form action="index.php?controller=vehicule&task=affectation" method="POST" id="kkk">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:black;" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Affecter dans le service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<input type="hidden" name="idV" id="idv" value="<?= $article['idV'] ?>"></li>
       <center>
     <div class="form-group" >
     <label for="input-6">Service</label>
     <select name="idService"  class="form-control col-lg-6" id="input-10" >
     <?php 
      foreach($service as $fou):?>
     <option value="<?=$fou['idService'] ?>"><?= $fou['nom_service']?></option>
     <?php endforeach ?>
     </select>
    </div>
     </center>
     <center>
     <div class="form-group" >
     <label for="input-6"> Date d'affectation</label></br>
    <input style="margin-left:20px;" class="form-control col-lg-6" type="date" name="dateaffectation" id="">
     </div>
   </center>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Affecter</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
function myFunction(element){
 $('#idv').val(element);
}



   

    </script>