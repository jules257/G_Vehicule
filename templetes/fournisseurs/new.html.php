<?php
  $idf=null;
  $nomF="";
  $lieu="";
  $tel="";
  $edit="";
  if(isset($fournisseur)){
	  $idf=$fournisseur['idF'];
	  $nomF=$fournisseur['nomF'];
	  $lieu=$fournisseur['lieu_travail'];
	  $tel=$fournisseur['telephone'];
	  $button='<button type="submit" class="btn btn-light btn-block waves-effect waves-light">MODIFIER</button>';			
	  $action='index.php?controller=fournisseur&task=insert';  
	  $edit='<input type="hidden" name="idF" value="'.$idf.'" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société fournisseur">';
  }
else{
$button='<button type="submit" class="btn btn-light btn-block waves-effect waves-light">Enregistrer</button>';			
$action='index.php?controller=fournisseur&task=insert';

}
?>

<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>

 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3"><?= $pageTitle ?></div>
			<form method="POST" action="<?= $action;?>">
			  <?= $edit;?>
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Nom Fournisseur</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="nomF" value="<?php echo $nomF;?>" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société fournisseur">
				  <div class="form-control-position">
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Lieu de travail</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" value="<?php echo $lieu;?>" name="lieu_travail"  required class="form-control input-shadow" placeholder="lieu de travail">
				  <div class="form-control-position">
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputPassword"  class="sr-only">Telephone</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" value="<?php echo $tel;?>" name="telephone" required id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-phone"></i>
				  </div>
			   </div>
			  </div>
			  
			   <?php echo $button ?>
			  
			 </form>
		   </div>
		  </div>
		 
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Butt-->
	<script>


	
	</script>