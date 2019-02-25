<?php include_once 'include/header.php'; ?>

<?php
include_once '../racine.php';
if(isset($_GET['id']))
{
    $servSpercialiste = new SpecialisteService();
    $spec=$servSpercialiste->findAllSpecialistebyID($_GET['id']);
}
 
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Modifier Specialiste</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form name="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data" id="fupForm">
              <div class="box-body">
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input value="<?php echo $spec->nom; ?>"  name="nom" id="nom" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input value="<?php echo $spec->descr; ?>"  name="descr" id="descr" type="text" class="form-control" >
                  <input  value="<?php echo $spec->id; ?>"  name="id" id="id" type="hidden" class="form-control"  >
                </div>
              </div>
              
              </div>
              <div class="box-footer">
                <button type="submit" id="modifier" class="btn btn-primary">Modifier</button>
              </div>

              
            </form>
          </div>

        </div>       
      </div>
    </section>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>

<script>
$(document).ready(function(){

  $('#fupForm').on('submit',function(e){ 
  e.preventDefault();
  $.ajax({

url : 'http://localhost:8888/Gestion/admin/api/update_specialite.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {



swal("specialite a été Modifier avec succès",'', "success");    

},
error : function(error){
console.log(error);
}

});
});

});


</script>




<?php include_once 'include/footer.php'; ?>