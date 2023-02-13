<div class="row mt-12">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
 
              <h5 class="card-title">NOS VEHICULES</h5>

			  <div class="table-responsive">
               <table class="table table-bordered" >
                  <thead style="font-size:12px;">
                    <tr>
                      <th scope="col" style="width:3%">#</th>
                      <th scope="col">Immatriculation</th>
                      <th scope="col">Marque</th>
                      <th scope="col">Type</th>
                      <th scope="col">Service Affectée</th>
                      <th scope="col">Date Affectation</th>
                      <th style="width:30%;" hidden>Actions</th>
                    </tr>
                  </thead>
                  <tbody style="font-size:12px;">
<?php $i=1; foreach ($vehicule as $article) : ?>
    <tr>
                      <th scope="row"style="width:3%"><?= $i ?></th>
                      <td><?= $article['immatriculation'] ?></td>
                      <td><?= $article['marque'] ?></td>
                      <td><?= $article['type'] ?></td>
                      <td><?= $article['nom_service'] ?></td>
                      <td><?= $article['dateaffectation'] ?></td>
        
<td>
      <a onclick=" myFunction()" class="aff nav-link dropdown-toggle btn-sm  btn-warning dropdown-toggle-nocaret"href="index.php?controller=vehicule&task=desafecter&id=<?= $article['idaff'] ?>">
      Désaffecter
      </a>
      
  </td>
    </tr>        
    <?php $i++; endforeach ?>
    </tbody>
    <script>
function myFunction(){
  var kkk=document.getElementById('kkk');
  kkk.style.display="block";
}



   

    </script>