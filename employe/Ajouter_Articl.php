<?php include_once 'include/header.php'; ?>
<?php  
include_once '../racine.php';
$servcat=new CategoriesService();
$findcat=$servcat->findAllCatper($_SESSION['idPersone']);
$servpersonne=new PersonneService();
$findpers=$servpersonne->findAll();
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" enctype="multipart/form-data" id="fupForm">
            
              <div class="box-body">
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom article</label>
                  <input  required name="nom" id="nom" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Code</label>
                  <input required name="code" id="code" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input required name="stock" id="stock" type="text" class="form-control" >
                </div>
              </div>
              
              
              

              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Categorie</label>
                  <select required  class="form-control" name="cat_id" id="cat_id">
                  <?php foreach ($findcat as $value)  {?>
                  <option value="<?php echo $value->cat_id; ?>"><?php echo $value->cat_name; ?>
                  
                  </option>
                  <?php  }?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input required name="image" id="image" type="file" class="form-control"  >
                </div>
              </div>
              
              </div>
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
              </div>
              </div>
              
                
             
              <!-- /.box-body -->

              
            </form>
            
          </div>

        </div>       
      </div>
    </section>

     <!-- /.content -->
     <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>
    $(document).ready(function(){

      $('#fupForm').on('submit',function(e){ 
      e.preventDefault();
      $.ajax({

url : 'http://localhost:8888/Gestion/employe/api/add_article.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {

$('#nom').val('');
$('#code').val(''); 
$('#stock').val('');
$('#dateadd').val('');
$('#per_id').val('');
$('#cat_id').val('');
$('#image').val(null);



swal("Article a été ajouter avec succès",'', "success");    


},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>


<?php include_once 'include/footer.php'; ?>