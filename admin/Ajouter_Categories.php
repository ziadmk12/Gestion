<?php include_once 'include/header.php'; ?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter Categorie</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" id="fupForm">
              <div class="box-body">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nom</label>
                  <input  required name="Nom" id="Nom" type="text" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input required name="Descrip" id="Descrip" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">Date add</label>
                  <input required name="datadd" id="datadd" type="date" class="form-control"  >
                </div>
              </div>
              
              </div>
              </div>
              <div class="box-footer">
                <button type="submit" id="ajouter" class="btn btn-primary">Ajouter</button>
              </div>
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

url : 'http://localhost:8080/Gestion/admin/api/add_categories.php',
type : 'POST',
contentType: false,
cache: false,
processData:false,
data : new FormData(this),
success : function (data) {

$('#Nom').val('');
$('#Descrip').val(''); 
$('#datadd').val('');



swal("Categorie a été ajouter avec succès",'', "success");    

},
error : function(error){
    console.log(error);
}

});
    });

    });
    
    
    </script>


<?php include_once 'include/footer.php'; ?>