<html>
	  <head>
		<style>
			.stat-label{
				font-size:8pt;
			}
			.stat-val{
				font-size:18pt;
				font-weight:bold;
			}
		</style>
	  </head>
	<body>
	<div class='row' id='row-0'> 
		<div class='col-md-6'>
			<span class="stat-label">Overall Score</span>
			<h2 class="stat-val text-primary"><?php esc_attr_e( $array["overall score"] ); ?></h2>
		</div> 
		<div class='col-md-6'>
			<span class="stat-label">3 Years Score</span>
			<h2 class="stat-val text-primary"><?php esc_attr_e( $array["3 years score"] ); ?></h2>
		</div> 
	</div> 
	<div class='row' id='row-1'> 
		<div class='col-md-6'>
			<span class="stat-label">Overall Score V2</span>
			<h2 class="stat-val text-primary"><?php esc_attr_e( $array["overall score v2"] ); ?></h2>
		</div> 
		<div class='col-md-6'>
			<span class="stat-label">3 Years Score V2</span>
			<h2 class="stat-val text-primary"><?php esc_attr_e( $array["3 years score v2"] ); ?></h2>
		</div> 
	</div> 
	<div class='row' id='row-2'> 
		<div class='col-md-6'>
			<span class="stat-label">Rank in National</span>
			<h2 class="stat-val text-warning"><?php esc_attr_e( $array["rank national"] ); ?></h2>
		</div> 
		<div class='col-md-6'>
			<span class="stat-label">3 Years National Rank</span>
			<h2 class="stat-val text-warning"><?php esc_attr_e( $array["3 years national rank"] ); ?></h2>
		</div> 
	</div> 
	<div class='row' id='row-3'> 
		<div class='col-md-6'>
			<span class="stat-label">Rank in Affiliation</span>
			<h2 class="stat-val text-success"><?php esc_attr_e( $array["rank in affiliation"] ); ?></h2>
		</div> 
		<div class='col-md-6'>
			<span class="stat-label">3 Years Affiliation Rank</span>
			<h2 class="stat-val text-success"><?php esc_attr_e( $array["3 years affiliation rank"] ); ?></h2>
		</div> 
	</div>
	<div class='row' id='row-4'>
		<div class='col-md-12' align="right" style="display:<?php esc_attr_e( $linkDisplay; ?>;margin:10px;">
			<a href="https://sinta.kemdikbud.go.id/authors/detail?id=<?php esc_attr_e( $id; ?>&view=overview" target="blank"><button type="button" class='btn btn-primary btn-sm' ><i class="fa fa-angle-right"></i> Visit My Sinta Profile</button></a>
		</div>
	</div>
	</body>
	</html>