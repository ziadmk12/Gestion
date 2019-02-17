<?php include_once 'include/header.php'; ?>
<?php
if(isset($_GET['id'])){
    $com=new CompteService();
    $compte=$com->findById($_GET['id']);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
}
?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form name="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data" id="fupForm">
              <div class="box-body">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Matricule</label>
                  <input value="<?php echo $compte->matricule; ?>"  name="matricule" id="matricule" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input value="<?php echo $compte->nom; ?>"  name="nom" id="nom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Prenom</label>
                  <input value="<?php echo $compte->prenom; ?>"  name="prenom" id="prenom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date Naissance</label>
                  <input value="<?php echo $compte->dateNaissance; ?>" name="dateN" id="dateN" type="date" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Adresse</label>
                  <input value="<?php echo $compte->adress; ?>"  name="adresse" id="adresse" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input value="<?php echo $compte->email; ?>"  name="email" id="email" type="email" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input  name="pass" id="pass" type="password" class="form-control"  >
                  <input value="<?php echo $compte->pass; ?>"   name="old_pass" id="old_pass" type="hidden"  class="form-control"  >
                  
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input value="<?php echo $compte->tel; ?>"  name="tele" id="tele" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input  name="image" id="image" type="file" class="form-control"  >
                  <input  value="<?php echo $compte->image; ?>"  name="old_image" id="old_image" type="hidden" class="form-control"  >
                  <input  value="<?php echo $compte->id; ?>"  name="id" id="id" type="hidden" class="form-control"  >
                  <input  value="<?php echo $compte->copmte_id; ?>"  name="id_c" id="id_c" type="hidden" class="form-control"  >


                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Grade</label>
                  <select  class="form-control" name="grade" id="grade">
                  <option <?php ($compte->grade ==='employee') ? selected : ''; ?>>employee</option>
                  <option <?php ($compte->grade ==='fournisseur') ? selected : ''; ?>>fournisseur</option>
                  </select>
                </div>
              </div>
              </div>
              </div>
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Modifier</button>
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

url : 'http://localhost/Gestion/admin/api/update_employe.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {

/*$('#nom').val('');
$('#prenom').val(''); 
$('#email').val('');
$('#tele').val('');
$('#pass').val('');
$('#matricule').val('');
$('#adress').val('');
$('#dateN').val(false);
$('#image').val('');
*/

swal("Employé a été Modifier avec succès",'', "success");    

},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>


<?php include_once 'include/footer.php'; ?>