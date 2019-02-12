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
            <form role="form">
              <div class="box-body">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Matricule</label>
                  <input name="matricule" id="matricule" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input name="nom" id="nom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Prenom</label>
                  <input name="Prenom" id="prenom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date Naissance</label>
                  <input name="dateN" id="dateN" type="date" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Adresse</label>
                  <input name="adresse" id="adresse" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" id="email" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Telephone</label>
                  <input name="tele" id="tele" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input name="image" id="image" type="file" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Grade</label>
                  <select class="form-control" name="grade" id="grade">
                  <option>admin</option>
                  <option>employee</option>
                  </select>
                </div>
              </div>
             
             
              </div>
              </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>

        </div>       
      </div>
    </section>
    <!-- /.content -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $('#ajouter').click(function(){ 
      $.ajax({

url : 'http://localhost:8888/Gestion/admin/api/add_employe.php',
type : 'POST',
dataType : 'json',
data : {},
success : function (data) {

alert(data);    

},
error : function(error){
    console.log(error);
}

});
    });
    
    </script>



<?php include_once 'include/footer.php'; ?>