<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';
$compteservice=new CompteService();
$com=$compteservice->findEmploye();

?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       List des employees
      
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
                  <th>#</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Matricule</th>
                  <th>adress</th>
                  <th>Telephone</th>
                  <th>email</th>
                  

                  
                  
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($com as $value) {
                   ?>

                <tr>
                  <td><img style="width: 100px;
    height: 30px;" src="../images/<?php echo $value->image; ?>"></td>
                  <td style="line-height: 3;"><?php echo $value->nom; ?></td>
                  <td style="line-height: 3;"><?php echo $value->prenom; ?></td>
                  <td style="line-height: 3;"><?php echo $value->matricule; ?></td>
                  <td style="line-height: 3;"><?php echo $value->adress; ?></td>
                  <td style="line-height: 3;"><?php echo $value->tel; ?></td>
                  <td style="line-height: 3;"><?php echo $value->email; ?></td>
                  
                  
                  
                </tr>


                   <?php
                }
                ?>
                
                
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