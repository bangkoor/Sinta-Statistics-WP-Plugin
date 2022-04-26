<html>
  <head>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	<link rel="stylesheet" href="plugin/chart.js/Chart.min.js">
    <script src="plugin/chart.js/Chart.min.js"></script>
	<!--<script src="./plugin/chart.js/plugins/chartjs-plugin-datalabels/src/chartjs-plugin-labels.js"></script>-->
  </head>
<body>
<div class='row' id='row-0'> 
	<div class='col-md-3' align="center">
		<img src='https://sinta.ristekbrin.go.id/assets/img/sinta_logo.png' class='img-responsive' width="40%" align="center">
	</div> 
	<div class='col-md-3'>
		<h2 class="text-primary"><?php echo $array["overall score"]; ?></h2>
		<small>Overall Score</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-primary"><?php echo $array["3 years score"]; ?></h2>
		<small>3 Years Score</small>
	</div> 
	<div class='col-md-3'></div> 
</div> 
<div class='row' id='row-1'> 
	<div class='col-md-3'></div> 
	<div class='col-md-3'>
		<h2 class="text-primary"><?php echo $array["overall score v2"]; ?></h2>
		<small>Overall Score V2</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-primary"><?php echo $array["3 years score v2"]; ?></h2>
		<small>3 Years Score V2</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-primary"><?php echo $array["books"]; ?></h2>
		<small>Books</small>
	</div>
</div> 
<div class='row' id='row-2'> 
	<div class='col-md-3'></div> 
	<div class='col-md-3'>
		<h2 class="text-warning"><?php echo $array["rank national"]; ?></h2>
		<small>Rank in National</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-warning"><?php echo $array["3 years national rank"]; ?></h2>
		<small>3 Years National Rank</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-warning"><?php echo $array["ipr"]; ?></h2>
		<small>IPR</small>
	</div>
</div> 
<div class='row' id='row-3'> 
	<div class='col-md-3'></div> 
	<div class='col-md-3'>
		<h2 class="text-success"><?php echo $array["rank in affiliation"]; ?></h2>
		<small>Rank in Affiliation</small>
	</div> 
	<div class='col-md-3'>
		<h2 class="text-success"><?php echo $array["3 years affiliation rank"]; ?></h2>
		<small>3 Years Affiliation Rank</small>
	</div> 
	<div class='col-md-3'></div> 
</div>
</body>
</html>