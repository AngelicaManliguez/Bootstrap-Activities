<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>   
</head>
<body>
    <center>
        <h1>Admin</h1>

        <form class="form-horizontal" method="POST" action="controller.php" enctype="multipart/form-data">
            <?php
            include("includes/sqlconnection.php");
            $sql = "SELECT * FROM about";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <input type='hidden' name='txtid' value='".$row['id']."'>
                        
                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Title</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='title2' value='".$row['title2']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 1</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic7'>
                            </div>
                            <input type='hidden' name='txtpic_old7' value='".$row['img1']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Paragraph for Image 1</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='p1' value='".$row['p1']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 2</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic8'>
                            </div>
                            <input type='hidden' name='txtpic_old8' value='".$row['img2']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Paragraph for Image 2</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='p2' value='".$row['p2']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Paragraph</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='p3' value='".$row['p3']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Paragraph</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='p4' value='".$row['p4']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Enter Paragraph</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='p5' value='".$row['p5']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-md-offset-4 col-md-4'>
                                <button class='btn btn-success' type='submit' name='update_about'>Update Details</button>
                            </div>
                        </div>
                    ";
                }
            }
            ?>
        </form>
    </center> 
</body>
</html>