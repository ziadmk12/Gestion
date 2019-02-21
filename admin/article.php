<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';

$servArt = new ArticleService();
$find=$servArt->AllArticle();


?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
       List des Article
      
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Nom</th>
                  <th>code</th>
                  <th>Stock</th>
                  <th>Date add</th>
                  <th>Créateur</th>
                  <th>Categorie</th>


                </tr>
                </thead>
                <tbody id="tbody">
                <?php
                foreach ($find as $value){
                   ?>

                <tr>

                  <td style="line-height: 3;"><?php echo $value->Article_Name;   ?></td>
                  <td style="line-height: 3;"><?php echo $value->CodeArticle;   ?></td>
                  <td style="line-height: 3;"><?php echo $value->Stock; ?></td>
                  <td style="line-height: 3;"><?php echo $value->DateAddArt; ?></td>
                  <td style="line-height: 3;"><?php echo $value->nom .' '.$value->prenom; ?></td>
                  <td style="line-height: 3;"><?php echo $value->cat_name; ?></td>
                  
                  
                  
                  
                  
                </tr>


                <?php }  ?>
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
    </section>
    
    <!-- /.content -->


<?php include_once 'include/footer.php'; ?>