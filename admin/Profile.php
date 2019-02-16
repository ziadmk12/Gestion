<?php include_once 'include/header.php'; ?>
<?php

$sevPersone=new PersonneService();
$persone=$sevPersone->findById($_SESSION['idPersone']);

?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Profil de l'utilisateur
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../images/<?php echo $persone->image; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $persone->nom.' '.$persone->prenom; ?></h3>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Mon Realisation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              

           

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>
              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

            

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Modification</a></li>
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->

              <div class="active tab-pane" id="activity">
                <form class="row">
                <div class="form-group col-sm-6">
                    <label for="matricule" >Matricule</label>
                    <div >
                      <input type="text" class="form-control" id="matricule" name="matricule" value="<?php echo $persone->matricule; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="nom" >Nom</label>
                    <div >
                      <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $persone->nom; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="prenom" >Prenom</label>
                    <div >
                      <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $persone->prenom; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="dateNaissance" >Date Naissance</label>
                    <div >
                      <input  type="date" class="form-control" id="dateNaissance" name="dateNaissance" value="">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="adress" >Adress</label>
                    <div >
                      <input type="text" class="form-control" id="adress" name="adress" value="<?php echo $persone->adress; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="email" >Email</label>
                    <div >
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $persone->email; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="tel" >Telephone</label>
                    <div >
                      <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $persone->tel; ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="image" >Image</label>
                    <div >
                      <input type="file" class="form-control" id="image" name="image" value="<?php echo $persone->tel; ?>">
                    </div>
                  </div>
                  
                
                 
                 
                 
                  <div class="form-group col-sm-6">
                    <div>
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    <?php include_once 'include/footer.php'; ?>