<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';
$servSpec=new SpecialisteService();
$find=$servSpec->findAllSpecial();

?>

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

                  <th></th>
                  <th></th>
                  

                </tr>
                </thead>
                <tbody id="tbody">
                <?php
                foreach ($find as $value) {
                   ?>

                <tr>
                  
                  <td style="line-height: 2;"><?php echo $value->nom; ?></td>
                  <td style="line-height: 2;"><?php echo $value->descr; ?></td>

                  <td  data-id="<?php echo $value->id ; ?>"><button class="btn btn-danger">Supprimer</button></td>
                  <td><button class="btn btn-success"><a style="color: #ecf0f6;" href="update_specialite.php?id=<?php echo $value->id ; ?>">Modifier</a></button></td>
                  
                  
                  
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>
    
  $(function () {
    $('#example1').DataTable({})
    
  })
</script>
<script>
    $(document).ready(function(){
      
      var selectedRow;

$('#tbody').on('click',function(event){
    
  selectedRow = $(event.target.parentNode);
  idRow = selectedRow.data('id');
  
  if(idRow){

    swal({
  title: "voulez-vous vraiment Supprimer cette employé ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({


url : 'http://localhost:8888/Gestion/admin/api/delete_specialiste.php',

type : 'POST',
data : {'id':idRow},
success : function (data) {


  selectedRow.parent().fadeOut(); 
  swal("Employé a été supprimé avec succès",'', "success");  

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