<?php

function date_anne($date,$anne){
    $d=strtotime($date);
    
$da=date('d-m-Y',strtotime('+'.$anne.'year',$d));
if(date('d-m-Y')<$da){
    echo "<br><i class='alert alert-danger'>Elle sera amortie le: </i>" .$da;

}
else
if(date('d-m-Y')==$da || date('d-m-Y')>$da){ echo "<br><i class='alert alert-danger'>amortissement terminé </i>";}
}