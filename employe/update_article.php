<?php include_once 'include/header.php'; ?>
<?php
include_once '../racine.php';
$servcat=new CategoriesService();
$findcat=$servcat->findAllCat();


if(isset($_GET['id'])){
    $serArticle=new ArticleService();
    $Article=$serArticle->findArticleById($_GET['id']);
}
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Modifier Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form name="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data" id="fupForm">
            
            <div class="box-body">
            <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input value="<?php echo $Article->Article_Name ?>"  name="nom" id="nom" type="text" class="form-control" >
                  
                </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Code</label>
                <input value="<?php echo $Article->CodeArticle  ?>"  name="code" id="code" type="text" class="form-control" >
                
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input value="<?php echo $Article->Stock  ?>" name="stock" id="stock" type="text" class="form-control" >
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Date add</label>
                <input value="<?php echo $Article->DateAddArt  ?>"  name="dateadd" id="dateadd" type="date" class="form-control"  >
              </div>
            </div>
            
            <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Categorie</label>
                <select required  class="form-control" name="cat_id" id="cat_id">
                <?php foreach ($findcat as $value)  {?>
                <option value="<?php echo $value->cat_id ?>"> <?php echo $value->cat_name ?> </option>
                <?php  }?>
                </select>
                <input  value="<?php echo $Article->Article_ID; ?>" name="id" id="id" type="hidden" class="form-control"  >
              </div>  
            </div>
                        
            </div>
            <div class="box-footer">
              <button type="submit" id="modifier" class="btn btn-primary">Modifier</button>
            </div>
            </div>
                         
           
            <!-- /.box-body -->

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

url : 'http://localhost:8888/Gestion/employe/api/update_article.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {



swal("Article a été Modifier avec succès",'', "success");   

},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>



    <?php include_once 'include/footer.php'; ?>