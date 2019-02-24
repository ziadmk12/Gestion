<?php
include_once 'include/header.php';
?>
    <!-- Main content -->
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
            <form role="form" enctype="multipart/form-data" id="fupForm">
              <div class="box-body">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Matricule</label>
                  <input  required name="matricule" id="matricule" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input required name="nom" id="nom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Prenom</label>
                  <input required name="prenom" id="prenom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date Naissance</label>
                  <input required name="dateN" id="dateN" type="date" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Adresse</label>
                  <input required name="adresse" id="adresse" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input required name="email" id="email" type="email" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input required name="pass" id="pass" type="password" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input required name="tele" id="tele" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input required name="image" id="image" type="file" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
            
              </div>
              </div>
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
              </div>
                
             
              <!-- /.box-body -->

              
            </form>
          </div>

        </div>       
      </div>
    </section>
    <!-- /.content -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>
    $(document).ready(function(){

      $('#fupForm').on('submit',function(e){ 
      e.preventDefault();
      $.ajax({

url : 'http://localhost:8888/Gestion/admin/api/add_employe.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {

$('#nom').val('');
$('#prenom').val(''); 
$('#email').val('');
$('#tele').val('');
$('#pass').val('');
$('#matricule').val('');
$('#adress').val('');
$('#dateN').val(false);
$('#image').val('');


swal("Employé a été ajouter avec succès",'', "success");    

},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>



<?php include_once 'include/footer.php'; ?>