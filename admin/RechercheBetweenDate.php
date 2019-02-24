<?php
 include_once 'include/header.php';

?>
<?php
include_once '../racine.php';
$sercategorie=new CategoriesService();
if(isset($_POST['submit']))
{
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
    
    $find=$sercategorie->findCategorieBetweendates($date1,$date2);
    
}


?>

<section class="content-header">
      <h1>
       List des Categories
      </h1>
     
    </section>

    <!-- Main content -->
    <form method="POST" role="form" enctype="multipart/form-data" id="fupForm">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Premier date :</label>
                  <input name="date1" id="date1" type="date" class="form-control"  >
                </div>
              </div>
              
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Deuxiem date :</label>
                  <input  name="date2" id="date2" type="date" class="form-control"  > 
                </div>
              </div>
              <div class="box-footer">
                <button name="submit" type="submit" id="submit" class="btn btn-primary">Afficher</button>
              </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="div_tab">
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $('#fupForm').on('submit',function(e){ 
      e.preventDefault();
      var date1=$('#date1').val();
      var date2=$('#date2').val();
     
      $.ajax({

url : 'http://localhost:8888/Gestion/employe/api/categories_between_date.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {

var  res="<table id='example1' class='table table-bordered table-striped'><thead><tr> <th>Nom</th><th>Description</th><th>Date add</th><th>Créateur</th></tr></thead><tbody id='tbody'>";
for(var i=0;i<data.length;i++){
 res +="<tr><td>"+data[i].cat_name+"</td><td>"+data[i].descrip+"</td><td>"+data[i].date_add+"</td><td>"+data[i].nom+" "+data[i].prenom+"</td></tr>";
}

res += "</tbody></table>";
   $('#div_tab').empty();
   $('#div_tab').html(res);

},
error : function(error){
    console.log(error);
}

});
    });

});
</script>




<?php include_once 'include/footer.php'; ?>