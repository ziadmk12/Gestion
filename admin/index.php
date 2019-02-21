<?php

include_once 'include/header.php';
include_once '../racine.php';
$compser= new CompteService();
$count=$compser->coutEmploye();
$servCategorie = new CategoriesService();
$countCategorie=$servCategorie->coutCategorie();
$servArticle =new ArticleService();
$countArticle=$servArticle->coutArticle();


?>
  
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $countArticle ?></h3>

              <p>Article</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="article.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php echo $count; ?></h3>
              <p>Employees</p>
             
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="Employe.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $countCategorie ?></h3>
              
              <p>Categories</p>
              

            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="categories.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

    
      <!-- /.row -->
    
    </section>

    






    

    
<?php include_once 'include/footer.php'; ?>

 
 