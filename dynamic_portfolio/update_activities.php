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
            $sql = "SELECT * FROM activities";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <input type='hidden' name='txtid' value='".$row['id']."'>
                        
                        <div class='form-group'>
                            <label for='title' class='control-label col-md-4'>Enter Title</label>
                            <div class='col-md-4'>
                                <input type='text' class='form-control' name='title1' value='".$row['title1']."'>
                            </div>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 1</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic1'>
                            </div>
                            <input type='hidden' name='txtpic_old1' value='".$row['pic1']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 2</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic2'>
                            </div>
                            <input type='hidden' name='txtpic_old2' value='".$row['pic2']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 3</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic3'>
                            </div>
                            <input type='hidden' name='txtpic_old3' value='".$row['pic3']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 4</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic4'>
                            </div>
                            <input type='hidden' name='txtpic_old4' value='".$row['pic4']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 5</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic5'>
                            </div>
                            <input type='hidden' name='txtpic_old5' value='".$row['pic5']."'>
                        </div>

                        <div class='form-group'>
                            <label for='name' class='control-label col-md-4'>Input Image 6</label>
                            <div class='col-md-2'>
                                <input type='file' name='txtpic6'>
                            </div>
                            <input type='hidden' name='txtpic_old6' value='".$row['pic6']."'>
                        </div>

                        <div class='form-group'>
                            <div class='col-md-offset-4 col-md-4'>
                                <button class='btn btn-success' type='submit' name='update_activities'>Update Details</button>
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