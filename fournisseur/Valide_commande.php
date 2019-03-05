<?php include_once 'include/header.php'; ?>
<?php 
include_once '../racine.php';
$servCommande=new CommandeService();
$findCo=$servCommande->findCommandEtatEncours();

?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
       Validé commande
      
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
                  
                  <th>Date add</th>
                  <th>etat</th>
                  <th>Article</th>
                  <th>Fourniseur</th>
                  <th></th>


                </tr>
                </thead>
                <tbody id="tbody">
                <?php
                foreach ($findCo as $value){
                    if($value->etat==0){
                        $value->etat='En cours';
                    }
                   ?>

<tr>
                
                <td style="line-height: 3;"><?php echo $value->dateadd; ?></td>
                <td style="line-height: 3;"><?php echo $value->etat; ?></td>
                <td style="line-height: 3;"><?php echo $value->Article_Name; ?></td>
                <td style="line-height: 3;"><?php echo $value->nom.' '.$value->prenom; ?></td>
                <td data-id="<?php echo $value->id; ?>" ><button type="submit" id="modifier" class="btn btn-success">Validé</button></td>
                
                
                
                
                
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
$.ajax({


url : 'http://localhost:8888/Gestion/fournisseur/api/Valide_command.php',

type : 'POST',
data : {'id':idRow},
success : function (data) {
swal("Commande a été Validé avec succès",'', "success");
selectedRow.parent().fadeOut(); 

},
error : function(error){
console.log(error);
}

});
} else {




}

      
      });
     
    });
    </script>

<?php include_once 'include/footer.php'; ?>