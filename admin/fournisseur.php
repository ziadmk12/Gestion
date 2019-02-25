<?php include_once 'include/header.php'; ?>
<?php
include_once '../racine.php';
$compteservice=new CompteService();
$com=$compteservice->findEmployebyfourn();
?>


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

            <div style="overflow-x:auto">
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
                  <th>Grade</th>
                  <th>Spécialiste</th>
                  <th></th>
                  

                </tr>
                </thead>
                <tbody id="tbody">
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
                  <td style="line-height: 3;"><?php echo $value->grade; ?></td>
                  <td style="line-height: 3;"><?php echo $value->snom; ?></td>
                  <td  data-id="<?php echo $value->id ; ?>"><button class="btn btn-danger">Supprimer</button></td>
                  <td><button class="btn btn-success"><a style="color: #ecf0f6;" href="update_employe.php?id=<?php echo $value->id ; ?>">Modifier</a></button></td>
                  
                  
                  
                </tr>


                   <?php
                }
                ?>
                
                
                </tbody>
                
              </table>
            </div>

              
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