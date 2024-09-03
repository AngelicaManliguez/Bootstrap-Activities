<?php 
    session_start();
    include('includes/sqlconnection.php');  
    $sql = "SELECT * FROM navbar"; 
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
        <style>
            button{
                color: rgb(255, 255, 255);
                background-color: rgb(107, 94, 76);
                padding: 10px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 10px;
            }

            button:hover{
                background-color: rgb(54, 44, 44);
            }

            table{
                width: 80%;
                border: 2px solid rgb(54, 44, 44);
                text-align: center;
            }

            tr, th, td{
                border: 2px solid rgb(54, 44, 44);
                text-align: center;
            }

            a{
                color: white;
                text-decoration: none;
            }

            a:hover{
                color: white;
                text-decoration: none;
            }
        </style>

    </head>
   
	<body data-spy="scroll" data-target=".navbar">
        <center>
            <h1>Navigation Bar</h1>
            <?php
                if (isset($_SESSION["status"])&& $_SESSION !="") 
                {
                    echo $_SESSION["status"];
                    echo "<br>";
                    echo "<br>";
                    unset($_SESSION["status"]);
                }
            ?>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Home</th>
                        <th>Activities</th>
                        <th>About</th>
                        <th>Contact</th>
                        <th>Option</th>
                    </tr>

                <?php viewNavbar(); ?>

            </table>
            </br>


            <h1>Home Page</h1>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Subheading</th>
                        <th>Option</th>
                    </tr>

                <?php viewHome(); ?>

            </table>
            </br>


            <h1>Activities Page</h1>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Image 4</th>
                        <th>Image 5</th>
                        <th>Image 6</th>
                        <th>Option</th>
                    </tr>

                <?php viewActivities(); ?>

            </table>
            </br>


            <h1>About Page</h1>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image 1</th>
                        <th>Paragraph 1</th>
                        <th>Image 2</th>
                        <th>Paragraph 2</th>
                        <th>Paragraph 3</th>
                        <th>Paragraph 4</th>
                        <th>Paragraph 5</th>
                        <th>Option</th>
                    </tr>

                <?php viewAbout(); ?>

            </table>
            </br>


            <h1>Contact Page</h1>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Label 1</th>
                        <th>Label 2</th>
                        <th>Label 3</th>
                        <th>Option</th>
                    </tr>

                <?php viewContact(); ?>

            </table>
            </br>
            <form action="index.php" method="POST">
                <button type="submit" name="update">Back to Portfolio</button>
            </form>
        </center>
        
	</body>
</html>

<?php
    function viewNavbar(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM navbar order by id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[title]</td>
                        <td>$row[home]</td>
                        <td>$row[activities]</td>
                        <td>$row[about]</td>
                        <td>$row[contact]</td>
                        
                        <td>
                            <button><a href='update_navbar.php?id=$row[id]'>Edit</a></button> 
                            <button><a href='controller.php?id=$row[id]&pic=[pic]'>Delete</a></button> 
                        </td>
                    </tr>
                
                ";
            }
        }
        else{
            echo "
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }

        $conn->close();
    }

    function viewHome(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM home ORDER BY id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>
                            <img src='image/$row[pic]' width='100' height='auto' alt='$row[pic]'>
                        </td>
                        <td>$row[h1]</td>
                        <td>$row[p]</td>
                        
                        <td>
                            <button><a href='update_home.php?id=$row[id]'>Edit</a></button> 
                            <button><a href='controller.php?h1=$row[h1]&pic=[pic]'>Delete</a></button> 
                        </td>
                    </tr>
                ";
            }
        } else {
            echo"
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }

    function viewActivities(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM activities ORDER BY id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[title1]</td>
                        <td>
                            <img src='image/$row[pic1]' width='100' height='auto' alt='$row[pic1]'>
                        </td>
                        <td>
                            <img src='image/$row[pic2]' width='100' height='auto' alt='$row[pic2]'>
                        </td>
                        <td>
                            <img src='image/$row[pic3]' width='100' height='auto' alt='$row[pic3]'>
                        </td>
                        <td>
                            <img src='image/$row[pic4]' width='100' height='auto' alt='$row[pic4]'>
                        </td>
                        <td>
                            <img src='image/$row[pic5]' width='100' height='auto' alt='$row[pic5]'>
                        </td>
                        <td>
                            <img src='image/$row[pic6]' width='100' height='auto' alt='$row[pic6]'>
                        </td>
                       
                        <td>
                            <button><a href='update_activities.php?id=$row[id]'>Edit</a></button> 
                            <button><a href='controller.php?title1=$row[title1]'>Delete</a></button> 
                        </td>
                    </tr>
                ";
            }
        } else {
            echo"
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }

    function viewAbout(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM about ORDER BY id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[title2]</td>
                        <td>
                            <img src='image/$row[img1]' width='100' height='auto' alt='$row[img1]'>
                        </td>
                        <td>$row[p1]</td>
                        <td>
                            <img src='image/$row[img2]' width='100' height='auto' alt='$row[img2]'>
                        </td>
                        <td>$row[p2]</td>
                        <td>$row[p3]</td>
                        <td>$row[p4]</td>
                        <td>$row[p5]</td>
                       
                        <td>
                            <button><a href='update_about.php?id=$row[id]'>Edit</a></button> 
                            <button><a href='controller.php?title2=$row[title2]'>Delete</a></button> 
                        </td>
                    </tr>
                ";
            }
        } else {
            echo"
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }

    function viewContact(){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM contact ORDER BY id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[title3]</td>
                        <td>$row[label1]</td>
                        <td>$row[label2]</td>
                        <td>$row[label3]</td>
                       
                        <td>
                            <button><a href='update_contact.php?id=$row[id]'>Edit</a></button> 
                            <button><a href='controller.php?title3=$row[title3]&pic=[pic]'>Delete</a></button> 
                        </td>
                    </tr>
                ";
            }
        } else {
            echo"
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            ";
        }
        $conn->close();
    }
            
?>