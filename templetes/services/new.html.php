<?php
  $idS=null;
  $nomS="";
  $edit="";
  if(isset($service)){
	  $idS=$service['idService'];
	  $nomS=$service['nom_service'];
	  $button='<button type="submit" class="btn btn-info btn-block waves-effect waves-light">MODIFIER</button>';			
	  $action='index.php?controller=service&task=insert';  
	  $edit='<input type="hidden" name="idService" value="'.$idS.'" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société service">';
  }
else{
$button='<button type="submit" class="btn btn-light btn-block waves-effect waves-light">Enregistrer</button>';			
$action='index.php?controller=service&task=insert';

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
			<form method="POST" action="<?php echo $action;?>">
			  <?php echo $edit;?>
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Nom service</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="nom_service" value="<?php echo $nomS;?>" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société service">
				  <div class="form-control-position">
				  </div>
			   </div>
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
    <!--End Back To Top Butt