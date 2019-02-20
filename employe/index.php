<?php

include_once 'include/header.php';
include_once '../racine.php';

$servCategorie = new CategoriesService();
$countCategorie=$servCategorie->coutCategoriespers($_SESSION["idPersone"]);


?>
  
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
   
      
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3></h3>
              
              <p>Categories</p>
              <?php echo $countCategorie ?>

            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="categories.php" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

    
      <!-- /.row -->
    
    </section>  

    
<?php include_once 'include/footer.php'; ?>

 