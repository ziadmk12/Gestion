<?php include_once 'include/header.php'; ?>
<?php

if(isset($_GET['id'])){
    $servcat=new CategoriesService();
    $Categorie=$servcat->findCategoriebyId($_GET['id']);
}

?>



<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Modifier Categories</h3>
              <form name="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data" id="fupForm">
              <div class="box-body">
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input value="<?php echo $Categorie->cat_name ?>"  name="nom" id="nom" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input value="<?php echo $Categorie->descrip ?>"  name="descrip" id="descrip" type="text" class="form-control" >
                  <input  value="<?php echo $Categorie->cat_id; ?>"  name="id" id="id" type="hidden" class="form-control"  >

                </div>
              </div>
              
              
              
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Modifier</button>
              </div>
                
             
              <!-- /.box-body -->

              
            </form>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
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

url : 'http://localhost:8888/Gestion/employe/api/update_categories.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {



swal("Categories a été Modifier avec succès",'', "success");   

},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>



    <?php include_once 'include/footer.php'; ?>





    