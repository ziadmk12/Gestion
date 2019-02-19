<?php include_once 'include/header.php'; ?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter Article</h3>
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
                  <label for="exampleInputEmail1">code</label>
                  <input required name="code" id="code" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">reference</label>
                  <input required name="reference" id="reference" type="text" class="form-control" >
                  

                </div>
                
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">unite</label>
                  <input required name="unite" id="unite" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">reserve</label>
                  <input required name="reserve" id="reserve" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">seuil</label>
                  <input required name="seuil" id="seuil" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">date add</label>
                  <input required name="datadd" id="datadd" type="date" class="form-control"  >
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">personne id</label>
                  <select required  class="form-control" name="personne_id" id="personne_id">
                  <option>...</option>
                  <option>employee</option>
                  
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">fournisseur id</label>
                  <select required  class="form-control" name="fournisseur_id" id="fournisseur_id">
                  <option>...</option>
                  <option>employee</option>
                  
                  </select>
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleInputEmail1">id categorie</label>
                  <select required  class="form-control" name="categorie_id" id="categorie_id">
                  <option>...</option>
                  <option>employee</option>
                  
                  </select>
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

url : 'http://localhost/Gestion/admin/api/add_categories.php',
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