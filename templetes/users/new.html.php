<?php
  $idU=null;
  $matricule="";
  $nom="";
  $prenom="";
  $username="";
  $telephone="";
  $role="";
  $etat="";
  $photo="default.png";
  $password="";
  if(isset($user)){
    $idU=$user['id_user'];
    $matricule=$user['matricule'];
	  $nom=$user['nom'];
	  $prenom=$user['prenom'];
    $username=$user['username'];
    $telephone=$user['telephone'];
    $role=$user['role'];
    $etat=$user['etat'];
    $photo=$user['photo'];
    $password=$user['password'];
	  $button='<button type="submit" class="btn btn-info btn-round  px-5"><i class="zmdi zmdi-save"></i>MODIFIER</button>';			
	  $action='index.php?controller=user&task=insert';  
	  $edit='<input type="text" name="id" value="'.$idU.'" required id="exampleInputName" class="form-control input-shadow" placeholder="nom de la société fournisseur">';
  }
else{
$button='<button type="submit"class="btn btn-success btn-round  px-5"><i class="zmdi zmdi-save"></i>Enregistrer</button>';			
$action='index.php?controller=user&task=insert';

}
?>


<div class="col-lg-12">
        <div class="card">
           <div class="card-body">
          <center><div class="card-title"><?= $pageTitle ?></div></center> 
           <hr>
            <form action="<?= $action ?>" method="post" enctype="multipart/form-data">
           
            <div class="form-group">
            <center>
            <label hidden for="input-6">ID</label>
            </center>
            <center>
            <input  type="hidden" value="<?=$idU ?>" name="id" class="form-control col-lg-2" id="input-4">
           </center>
          </div>
            <div class="row mt-3">
            <div class="col-lg-6">
           <div class="form-group">
           <label for="input-6">matricule</label>
            <input type="text" value="<?= $matricule ?>" name="matricule" class="form-control form-control-rounded" id="input-6" placeholder="matricule">
           </div>
           <div class="form-group">
           <label for="input-6">nom</label>
            <input type="text" value="<?= $nom ?>" name="nom" class="form-control form-control-rounded" id="input-6" placeholder="nom">
           </div>
           <div class="form-group">
            <label for="input-6">Prenom</label>
            <input type="text" value="<?= $prenom ?>" name="prenom" class="form-control form-control-rounded" id="input-6" placeholder="prénom">
           </div>

           <div class="form-group">
            <label for="input-7">username</label>
            <input type="text" value="<?= $username ?>" name="username" class="form-control form-control-rounded" id="input-7" placeholder="username">
           </div>
           <div class="form-group">
            <label for="input-7">Photo</label>
            <input type="file"  
            
            accept="image/png, .jpeg, .jpg, image/gif"
            value="assets/img/<?= $photo ?>"
             name="photo" class="form-control form-control-rounded" id="imgInp">
           </div>
            </div>
            <div class="col-lg-6">
           
           <div class="form-group">
            <label for="input-8">Telephone</label>
            <input type="telephone" value="<?= $telephone ?>" name="telephone" class="form-control form-control-rounded" id="input-8" placeholder="date achat">
           </div>
           <div class="form-group">
            <label for="input-9">role</label>
            <select name="role" class="form-control col-lg-6" id="input-10" >
            <option value="Admin" <?php if($role=='Admin') echo 'selected' ?> >Admin</option>
            <option value="Simple" <?php if($role=='Simple') echo 'selected' ?>>Simple</option>
          
            </select>
           </div> 
           
           <div class="form-group">
            <label for="input-6"></label>
            <select name="etat" class="form-control col-lg-12" id="input-10" >
             
            <option value="1"  <?php if($etat=='1') echo 'selected' ?>>Activé</option>
            <option value="0"  <?php if($etat=='0') echo 'selected' ?>>Désactivé</option>
          
            </select>
           </div>
           <div class="col-lg-12">
           <div class="form-group">
            <label for="input-8">Mot de passe</label>
            <input type="password" value="<?= $telephone ?>" name="password" class="form-control form-control-rounded" id="input-8" placeholder="mot de passe">
           
           
           
           </div>
           <img id="blah" src="assets/img/<?= $photo ?>" width="60px" height="60px" alt="your image"  height="200px" width="150px"/> 
           
           </div>
           </div> </div>
           <center>
           <div class="form-group">
           <?= $button ?>
          </div>
          </center>
          </form>
         </div>
         </div>
      </div>
</div><script type='text/javascript'>//<![CDATA[

  //alert('ok');
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
             
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
             
            reader.readAsDataURL(input.files[0]);
        }
    }
     
    $("#imgInp").change(function(){
        readURL(this);
    });
//]]> 
 
</script>



