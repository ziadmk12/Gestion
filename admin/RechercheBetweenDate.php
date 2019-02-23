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
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr> 
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Date add</th>
                  <th>Créateur</th>
                </tr>
                </thead>
                <tbody id="tbody">
                <?php
                foreach ($find as $value){
                   ?>

                <tr>

                  <td style="line-height: 3;"><?php echo $value->cat_name;   ?></td>
                  <td style="line-height: 3;"><?php echo $value->descrip;   ?></td>
                  <td style="line-height: 3;"><?php echo $value->date_add; ?></td>
                  <td style="line-height: 3;"><?php echo $value->nom .' '.$value->prenom; ?></td>
                  
                  
                  
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

    





<?php include_once 'include/footer.php'; ?>