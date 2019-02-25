<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';
$catservice=new CategoriesService();
$find=$catservice->findAllCat();


?>


  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
       List des Categories
      
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
                  <th>Description</th>
                  <th>Date add</th>
                  <th>Créateur</th>
                  <th></th>
                  <th></th>

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
                  <td data-id="<?php echo $value->cat_id; ?>" ><button class="btn btn-danger" >Supprimer</button></td>
                  <td><button class="btn btn-success"><a style="color: #ecf0f6;" href="update_categories.php?id=<?php echo $value->cat_id ; ?>">Modifier</a></button></td>
                  
                  
                  
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

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>
     $(function () {
    $('#example1').DataTable({})
    
  })
    $(document).ready(function(){
      $('#tbody').on('click',function(){
        selectedRow = $(event.target.parentNode);
      idRow = selectedRow.data('id');

      if(idRow){

swal({
title: "voulez-vous vraiment Supprimer cette categorie ?",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
$.ajax({


url : 'http://localhost:8888/Gestion/admin/api/delete_categories.php',

type : 'POST',
data : {'id':idRow},
success : function (data) {

if(data != null){
  selectedRow.parent().fadeOut(); 
swal("Categorie a été supprimé avec succès",'', "success");
}
  

},
error : function(error){
console.log(error);
}

});
} else {

}
});


}

      
      });
     
    });
    </script>


<?php include_once 'include/footer.php'; ?>