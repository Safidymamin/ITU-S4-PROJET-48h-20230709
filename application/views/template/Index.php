<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>">
	<title>
		<?php echo $page_title; ?>
	</title>
	
</head>


<body>
	
	<div class="container">
		<?php 
			$this->load->view('template/Header');
			$this->load->view( $body );
			$this->load->view('template/Footer');
		?>
	</div>
</body>
</html>