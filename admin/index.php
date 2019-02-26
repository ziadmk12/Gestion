<?php
include_once 'include/header.php';
include_once '../racine.php';
$compser= new CompteService();
$count=$compser->coutEmploye();
$servCategorie = new CategoriesService();
$countCategorie=$servCategorie->coutCategorie();
$servArticle =new ArticleService();
$countArticle=$servArticle->coutArticle();
$countFournis=$compser->coutFournisseur();

$cotchar=$servCategorie->NombreCategorieParPersonne();

$cotcharArticle=$servArticle->NombreCArticleParPersonne();


?>
  
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $countArticle ?></h3>

              <p>Article</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="article.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php echo $count; ?></h3>
              <p>Chef</p>
             
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="chef.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $countCategorie ?></h3>
              
              <p>Categories</p>
              

            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="categories.php" class="small-box-footer">Détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php  echo $countFournis;?></h3>

              <p>Fournisseur</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="fournisseur.php" class="small-box-footer">Détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div> 

     
         

         <!-- BAR CHART -->
         
         <!-- /.box -->

        


         <div class="row">
        <div class="col-md-6">
        <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Nombre Catégories Par Employé</h3>
           </div>
           <div class="box-body">
             <div class="chart">
               <canvas id="barChart" style="height:230px"></canvas>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
        </div>
        <div class="col-md-6">
        <div class="box box-success">
           <div class="box-header with-border">
             <h3 class="box-title">Nombre Articles Par Employé</h3>
           </div>
           <div class="box-body">
             <div class="chart">
               <canvas id="barChart1" style="height:230px"></canvas>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
        </div>
        </div>
         

   
    </section>

 

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    

<script>

$(document).ready(function(){


var tempArray = <?php echo json_encode($cotchar); ?>;


var nbre = tempArray.map(function (current) {
  return current.nbr;
});

var nom = tempArray.map(function (current) {
  return current.nom;
});


var tempArray1 = <?php echo json_encode($cotcharArticle); ?>;


var nbre1 = tempArray1.map(function (current) {
  return current.nbr;
});

var nom1 = tempArray.map(function (current) {
  return current.nom;
});



$(function () {

var areaChartData = {
  labels  : nom,
  datasets: [
    {
      label               : 'Electronics',
      fillColor           : '#428bc1cf',
      strokeColor         : 'rgba(210, 214, 222, 1)',
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                : nbre,
      
    }
  ]
}

//-------------
//- BAR CHART -
//-------------
var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
var barChart                         = new Chart(barChartCanvas)
var barChartData                     = areaChartData
var barChartOptions                  = {
  scaleGridLineColor      : 'white',
  responsive              : true,
}

barChartOptions.datasetFill = false
barChart.Bar(barChartData, barChartOptions)
})



$(function () {

var areaChartData1 = {
  labels  : nom1,
  datasets: [
    {
      label               : 'Electronics',
      fillColor           : '#428bc1cf',
      strokeColor         : 'rgba(210, 214, 222, 1)',
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                : nbre1,
      
    }
  ]
}

//-------------
//- BAR CHART -
//-------------
var barChartCanvas1                   = $('#barChart1').get(0).getContext('2d')
var barChart1                      = new Chart(barChartCanvas1)
var barChartData1                    = areaChartData1
var barChartOptions1                  = {
  scaleGridLineColor      : 'white',
  responsive              : true,
}

barChartOptions1.datasetFill = false
barChart1.Bar(barChartData1, barChartOptions1)
})


});
</script>



    

    
<?php include_once 'include/footer.php'; ?>

 
 