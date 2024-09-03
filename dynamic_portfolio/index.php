<?php 
    session_start();
    include('includes/sqlconnection.php');  
    $sql = "SELECT * FROM navbar, home, activities, about, contact"; 
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
    	<title>My Dynamic Portfolio</title>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
	</head>
   
	<body data-spy="scroll" data-target=".navbar">
		
	<nav class="navbar navbar-default navbar-fixed-top">
        	<div class="container-fluid">
            	<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="#" name="title"><?php echo "$data[title]"?></a>
            	</div>

                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#home" name="home"><?php echo "$data[home]"?></a></li>
                        <li><a href="#activities" name="activities"><?php echo "$data[activities]"?></a></li>
                        <li><a href="#about" name="about"><?php echo "$data[about]"?></a></li>
                        <li><a href="#contact" name="contact"><?php echo "$data[contact]"?></a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                    </ul>
                </div>
        	</div>
    	</nav>

    	<section id="home">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12 text-center">
						<?php
							echo"
								<img src='image/$data[pic]' alt='Web Developer Image'>
								<h1>$data[h1]</h1>
								<hr>
								<p>$data[p]</p>
							";
						?>
					</div>
            	</div>
        	</div>
    	</section>
    
    	<section id="activities">
			<div class="container">
				<?php
					echo"
						<h1 class='header-title text-center'>$data[title1]</h1>
						<hr>
				
						<div class='row justify-content-center'>
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic1]' class='img-thumbnail' alt='Image 1'>
							</div>
							
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic2]' class='img-thumbnail' alt='Image 2'>
							</div>
							
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic3]' class='img-thumbnail' alt='Image 3'>
							</div>
					
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic4]' class='img-thumbnail' alt='Image 4'>
							</div>
					
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic5]' class='img-thumbnail' alt='Image 5'>
							</div>
					
							<div class='col-sm-6 col-md-4'>
								<img src='image/$data[pic6]' class='img-thumbnail' alt='Image 6'>
							</div>
						</div>
					";	
				?>
			</div>
    	</section>
    
    	<section id="about">
			<div class="container">
			<?php
				echo"
					<h1 class='header-title text-center'>$data[title2]</h1>
					<hr>
					<div class='col-md-6'>
						<div class='panel-body'>
								<img src='image/$data[img1]' class='img-circle center-block'/>
								<p class='lead text-center'>$data[p1]</p>
						</div>
					</div>

					<div class='col-md-6'>
						<div class='panel-body'>
								<img src='image/$data[img2]' class='img-circle center-block'/>
								<p class='lead text-center'>$data[p2]</p>
						</div>
					</div>

					<div class='row justify-content-center'>
						<div class='col-sm-6 col-md-4'>
							<p>$data[p3]</p>
						</div>

						<div class='col-sm-6 col-md-4'>
							<p>$data[p4]</p>
						</div>

						<div class='col-sm-6 col-md-4'>
							<p>$data[p5]</p>
						</div>
					</div>
				";	
			?>
			</div>
    	</section>
    
    	<section id="contact">
			<div class="container">
				<?php
					echo"
						<h1 class='header-title text-center'>$data[title3]</h1>
						<hr>

						<div class='row justify-content-center'>
							<div>
								<form class='col-md-6 col-md-offset-3' action='send.php' method='POST'>
									<div class='form-group'>
										<input class='form-control' name='name' placeholder='$data[label1]' type='text'/>
									</div>
									
									<div class='form-group'>
										<input class='form-control' name='name' placeholder='$data[label2]' type='text'/>
									</div>
									
									<div class='form-group'>
										<input class='form-control' name='name' placeholder='$data[label3]' type='text'/>
									</div>
									
									<div class='form-group'>
										<textarea class='form-control' rows='10'>Comments</textarea>
									</div>
									
									<div class='form-group'>
										<input class='btn btn-default btn-block' name='send' type='submit' value='Submit'/>
									</div>
								</form>
							</div>
						</div>
					";	
				?>	
			</div>
    	</section>
	</body>
</html>