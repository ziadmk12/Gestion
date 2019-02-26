<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';
$artService=new ArticleService();
$find=$artService->findAllByPers($_SESSION['idPersone']);


$servcompte=new CompteService();
$find1=$servcompte->findSpercialiteOfId($_SESSION['idPersone']);
$fourniseur=$servcompte->findSomeSpercialite($find1->nom);

?>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">affecter Commande</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" enctype="multipart/form-data" id="fupForm">
            
              <div class="box-body">
              <div class="row">
              
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Article</label>
                  <select required  class="form-control" name="article" id="article">
                  <?php foreach($find as $value){ ?>
                  <option value="<?php echo $value->Article_ID ?>"><?php echo $value->Article_Name ?>
                  </option>
                  <?php }  ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Fourniseur</label>
                  <select required  class="form-control" name="fourni" id="fourni">
                  <?php foreach($fourniseur as $value1){ ?>
                  <option value="<?php //echo $fourni->id ?>"><?php echo $value1->nom." ".$value1->pernom ?>
                  </option>
                  <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date add</label>
                  <input name="dateadd" id="dateadd" type="date" class="form-control"  >
                </div>
              </div>
              
              </div>
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Affecter</button>
              </div>
              </div>
              
                
             
              <!-- /.box-body -->

              
            </form>
            
          </div>

        </div>       
      </div>
    </section>



<?php include_once 'include/footer.php'; ?>