<?php
  $idV=null;
  $immatriculation="";
  $marque="";
  $type="";
  $nmumero_chassis="";
  $date_achat="";
  $dure_ammortissement="";
  $idF="";
  $edit='';
  if(isset($vehicule)){
    $idV=$vehicule['idV'];
    $immatriculation=$vehicule['immatriculation'];
	  $marque=$vehicule['marque'];
	  $type=$vehicule['type'];
    $nmumero_chassis=$vehicule['numero_chassis'];
    $date_achat=$vehicule['date_achat'];
    $dure_ammortissement=$vehicule['dure_ammortissement'];
    $idF=$vehicule['idF'];
	  $button='<button type="submit" class="btn btn-info btn-round  px-5"><i class="zmdi zmdi-save"></i>MODIFIER</button>';			
	  $action='index.php?controller=vehicule&task=insert';  
	  $edit='<input type="hidden" name="id" value="'.$idV.'" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société fournisseur">';
  }
else{
$button='<button type="submit"class="btn btn-success btn-round  px-5"><i class="zmdi zmdi-save"></i>Enregistrer</button>';			
$action='index.php?controller=vehicule&task=insert';

}
?>


<div class="col-lg-12">
        <div class="card">
           <div class="card-body">
          <center><div class="card-title"><?= $pageTitle ?></div></center> 
           <hr>
            <form action="<?= $action ?>" method="post">
           
            <div class="form-group">
            <center>
            <label for="input-6">ID</label>
            </center>
            <center>
            <?php echo $edit;?>           
            </center>
          </div>
         
            <div class="row mt-3">

           
            <div class="col-lg-6">
           <div class="form-group">
           <label for="input-6">Immatriculation</label>
            <input type="text" value="<?= $immatriculation ?>" name="immatriculation" class="form-control form-control-rounded" id="input-6" placeholder="numero d'imatriculation">
           </div>
           <div class="form-group">
           <label for="input-6">Marque</label>
            <input type="text" value="<?= $marque ?>" name="marque" class="form-control form-control-rounded" id="input-6" placeholder="marque du vehicule">
           </div>
           <div class="form-group">
            <label for="input-6">Type</label>
            <input type="text" value="<?= $type ?>" name="type" class="form-control form-control-rounded" id="input-6" placeholder="type du vehicule">
           </div>
            </div>
            <div class="col-lg-6">
           <div class="form-group">
            <label for="input-7">Numéro Chassis</label>
            <input type="text" value="<?= $nmumero_chassis ?>" name="numero_chassis" class="form-control form-control-rounded" id="input-7" placeholder="numero chassis">
           </div>
           <div class="form-group">
            <label for="input-8">Date d'achat</label>
            <input type="date" value="<?= $date_achat ?>" name="date_achat" class="form-control form-control-rounded" id="input-8" placeholder="date achat">
           </div>
           <div class="form-group">
            <label for="input-9">Dure d'ammortissement</label>
            <input type="text" value="<?= $dure_ammortissement ?>" name="dure_ammortissement" class="form-control form-control-rounded" id="input-9" placeholder="dure d'ammortissement">
           </div> </div> </div>
           <center>
           <div class="form-group">
            <label for="input-6">Fournisseur</label>
            <select name="idF" class="form-control col-lg-6" id="input-10" >
            
            <?php 
             foreach($fournisseur as $fou):?>
            <option value="<?=$fou['idF'] ?>" <?php if($fou['idF']==$idF) echo'selected' ?>><?= $fou['nomF']?></option>
            <?php endforeach ?>
            </select>
           </div>
           </center>
           </div>
           <center>
           <div class="form-group">
           <?= $button ?>
          </div>
          </center>
          </form>
         </div>
         </div>
      </div>
    </div>