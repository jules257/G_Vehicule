<?php 
$users=$user;
$user_id= $users['id_user'];
                 $photo= $users['photo'];
                 $mat= $users['matricule'] ;
                  $nom=$users['nom'] ;
                  $prenom= $users['prenom'] ;
                   $users['role'] ;
$a=array();
foreach ($droits as $ress) {
array_push($a,$ress['menu_droit']);
}
?>
<form action="index.php?controller=droit&task=insert" method="post">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<fieldset class="scheduler-border form-inline">
<legend class="scheduler-border">AFFECTER LES DROITS A:<?php echo $nom.'  '.$prenom ?> 
<?php if($photo!=null){ ?>
<img src="assets/img/<?php echo $photo; ?>" height="60" width="60px" class="img-circle" alt="">
<?php } else {?>

    <img src="assets/img/user.png" height="60" width="60px" class="img-circle" alt="">
    <?php }?>
</legend>
<input  type="hidden" name="user" value="<?php echo $user_id?>" id="">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<center style="margin-top:-1px;"><h5>
  <label for=""> <input type="checkbox"  id="alldroits">Affecter Tous les droits
</h5></label> </center>
</div>
<?php if(isset($_GET['message'])){ echo $_GET['message']; }?>
<div class="col-lg-6 col-md-6 col-sm-4 card" >
<fieldset class="scheduler-border">
    <legend class="scheduler-border"><label class="btn btn-sm" onclick="hideshowinfoUser()"   id="labinfoUser"  for="">+</label>
   <input type="checkbox" name="droit[]" value="1-0" <?php if(in_array('1-0',$a)) echo 'checked' ?>  id="droit_user">
   Utilisateurs</legend>
    <div id="infoUser" style="display: none;">
    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" value="1-1-0" <?php if(in_array('1-1-0',$a)) echo 'checked' ?>   class="droit_u" id=""> Ajouter
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="1-2-0" <?php if(in_array('1-2-0',$a)) echo 'checked' ?>   class="droit_u"   id="droit_u"> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="1-3-0" class="droit_u" <?php if(in_array('1-3-0',$a)) echo 'checked' ?>    id="droit_u"> Modifier 
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="1-4-0" class="droit_u" <?php if(in_array('1-4-0',$a)) echo 'checked' ?>    id="droit_u"> Attribution des droits
        </td>
        </tr>
        </table>
        </div>
    
</fieldset>

</div>


<div class="col-lg-6 col-md-6 col-sm-4 card">
<fieldset class="scheduler-border">
    <legend class="scheduler-border"><label class="btn btn-sm" onclick="hideshowinfoCli()"   id="labinfoCli"  for="">+</label>
    <input type="checkbox" name="droit[]" value="2-0" <?php if(in_array('2-0',$a)) echo 'checked' ?>  id="droit_g">
   Vehicules</legend>
    <div id="infoCli" style="display: none;">

    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" value="2-1-0" <?php if(in_array('2-1-0',$a)) echo 'checked' ?>   class="droit_g" id=""> Ajouter
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="2-2-0" <?php if(in_array('2-2-0',$a)) echo 'checked' ?>  class="droit_g" id=""> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="2-3-0" <?php if(in_array('2-3-0',$a)) echo 'checked' ?>  class="droit_g" id=""> Modifier 
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="2-4-0" <?php if(in_array('2-4-0',$a)) echo 'checked' ?>  class="droit_g" id=""> Affecter dans une services 
 

        </td>
        </tr>
        </table>
        
    </div>
</fieldset>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 card">
<fieldset class="scheduler-border">
    <legend class="scheduler-border"><label class="btn btn-sm" onclick="hideshowinfoArt()"   id="labinfoArt"  for="">+</label>
    <input type="checkbox" name="droit[]" value="3-0" <?php if(in_array('3-0',$a)) echo 'checked' ?>  id="droit_art">
    Services</legend>
    <div id="infoArt" style="display: none;">
    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" value="3-1-0" <?php if(in_array('3-1-0',$a)) echo 'checked' ?>  class="droit_art"> Ajouter
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="3-2-0" <?php if(in_array('3-2-0',$a)) echo 'checked' ?>  class="droit_art"> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="3-3-0" <?php if(in_array('3-3-0',$a)) echo 'checked' ?>  class="droit_art"> Modifier 
        </td>
        <td>
        </td>
        </tr>
        </table>
    </div>
</fieldset>

</div>

<div class="col-lg-6 col-md-6 col-sm-6 card">
<fieldset class="scheduler-border">
    <legend class="scheduler-border"><label class="btn btn-sm" onclick="hideshowImp()"   id="labinfoImp"  for="">+</label>
    <input type="checkbox" name="droit[]" value="4-0" <?php if(in_array('4-0',$a)) echo 'checked' ?>  id="droit_imp">
    Fournisseurs</legend>
    <div id="infoImp" style="display: none;">
    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" value="4-1-0" <?php if(in_array('4-1-0',$a)) echo 'checked' ?>  class="droit_imp"> Enregistrer
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="4-2-0" <?php if(in_array('4-2-0',$a)) echo 'checked' ?>  class="droit_imp"> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="4-3-0" <?php if(in_array('4-3-0',$a)) echo 'checked' ?>  class="droit_imp"> Modifier 
        </td>
        <td>
        </td>
        </tr>
        </table>
        
    </div>
    
</fieldset>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 card">
<fieldset class="scheduler-border">
    <legend class="scheduler-border"><label class="btn btn-sm" onclick="hideshowNum()"   id="labinfoNum"  for="">+</label>
    <input type="checkbox" name="droit[]" value="5-0" <?php if(in_array('5-0',$a)) echo 'checked' ?>  id="droit_num">
    Vehicules_Services</legend>
    
    <div id="infoNum" style="display: none;">
    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" <?php if(in_array('5-1-0',$a)) echo 'checked' ?>  value="5-1-0" class="droit_num"> Ajouter
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="5-2-0" <?php if(in_array('5-2-0',$a)) echo 'checked' ?>  class="droit_num"> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="5-3-0" <?php if(in_array('5-3-0',$a)) echo 'checked' ?>  class="droit_num"> Modifier 
        </td>
        <td>
        </td>
        </tr>
        </table>
        
    </div>
  
</fieldset>

</div>
<div class="col-lg-12">
 <center><input type="submit" name="affecter" class="btn btn-success btn" value='Affecter les droits'>
 <input type="submit" name="desafecter" class="btn btn-danger " value='Désaffecter les droits'></center>
 </div>
</fieldset>
</div>
</form>
<style>
    fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
    box-shadow:  0px 0px 0px 0px #000;
}

/*legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}*/


legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
table.borderless td,table.borderless th{
     border: none !important;
}                      
</style>


<script>

$(document).on('click', '#droit_user', function() {          	
		$(".droit_u").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_g', function() {          	
		$(".droit_g").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_art', function() {          	
		$(".droit_art").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_bon', function() {          	
		$(".droit_bon").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_imp', function() {          	
		$(".droit_imp").prop("checked", this.checked);
	});	


    $(document).on('click', '#droit_num', function() {          	
		$(".droit_num").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_liv', function() {          	
		$(".droit_liv").prop("checked", this.checked);
	});	

    $(document).on('click', '#droit_fact', function() {          	
		$(".droit_fact").prop("checked", this.checked);
	});	


    $(document).on('click', '#alldroits', function() {          	
		$(".droit_fact").prop("checked", this.checked);
        $(".droit_liv").prop("checked", this.checked);
        $(".droit_num").prop("checked", this.checked);
        $(".droit_u").prop("checked", this.checked);
        $(".droit_g").prop("checked", this.checked);
        $(".droit_bon").prop("checked", this.checked);
        $(".droit_art").prop("checked", this.checked);
        $(".droit_imp").prop("checked", this.checked);

        $("#droit_fact").prop("checked", this.checked);
        $("#droit_liv").prop("checked", this.checked);
        $("#droit_num").prop("checked", this.checked);
        $("#droit_user").prop("checked", this.checked);
        $("#droit_g").prop("checked", this.checked);
        $("#droit_bon").prop("checked", this.checked);
        $("#droit_art").prop("checked", this.checked);
        $("#droit_imp").prop("checked", this.checked);


	});
    function hideshowinfoUser() {
  var x = document.getElementById("infoUser");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoUser").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoUser").innerHTML = "+";
  }
}


function hideshowinfoCli() {
  var x = document.getElementById("infoCli");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoCli").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoCli").innerHTML = "+";
  }
}


function hideshowinfoArt() {
  var x = document.getElementById("infoArt");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoArt").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoArt").innerHTML = "+";
  }
}

function hideshowinfoBon() {
  var x = document.getElementById("infoBon");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoBon").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoBon").innerHTML = "+";
  }
}

function hideshowNum() {
  var x = document.getElementById("infoNum");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoNum").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoNum").innerHTML = "+";
  }
}


function hideshowImp() {
  var x = document.getElementById("infoImp");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoImp").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoImp").innerHTML = "+";
  }
}
function hideshowLiv() {
  var x = document.getElementById("infoLiv");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoLiv").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoLiv").innerHTML = "+";
  }
}

function hideshowFact() {
  var x = document.getElementById("infoFact");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("labinfoFact").innerHTML = "-";
  } else {
    x.style.display = "none";
    document.getElementById("labinfoFact").innerHTML = "+";
  }
}



</script>