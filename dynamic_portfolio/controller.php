<?php
    session_start();
    include("includes/sqlconnection.php");

    if(isset($_POST['update_navbar']))
    {
        $id = $_POST['txtid'];
        $newTitle = $_POST['title'];
        $newHome = $_POST['home'];
        $newActivities = $_POST['activities'];
        $newAbout = $_POST['about'];
        $newContact = $_POST['contact'];

        $sql="UPDATE navbar SET title='$newTitle', home='$newHome', activities='$newActivities', about='$newAbout', contact='$newContact' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status'] = "Updated successfully!";
            header('location:view.php');
        } else {
            $_SESSION['status'] = "Error updating... ";
            header('location:view.php');
        }

        $conn->close();
        
    } 

    if(isset($_POST['update_home']))
    {
        $id = $_POST['txtid'];
        $pic_new  = $_FILES['txtpic']['name'];
        $pic_old = $_POST['txtpic_old'];
        $newH1 = $_POST['h1'];
        $newP = $_POST['p'];

        if($pic_new != '')
        {
            $update_pic = $pic_new;
        }
        else
        {
            $update_pic = $pic_old;
        }

        echo "$update_pic";

        $sql="UPDATE home SET pic='$update_pic', h1='$newH1', p='$newP' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] = "Updated successfully!";
            header('location:view.php');
        } else {
            $_SESSION['status'] = "Error updating... ";
            header('location:view.php');
        }

        $conn->close();
        
    } 


    if(isset($_POST['update_activities']))
    {
        $id = $_POST['txtid'];
        $newTitle = $_POST['title1'];

        $pic_new1  = $_FILES['txtpic1']['name'];
        $pic_old1 = $_POST['txtpic_old1'];

        $pic_new2  = $_FILES['txtpic2']['name'];
        $pic_old2 = $_POST['txtpic_old2'];

        $pic_new3  = $_FILES['txtpic3']['name'];
        $pic_old3 = $_POST['txtpic_old3'];

        $pic_new4  = $_FILES['txtpic4']['name'];
        $pic_old4 = $_POST['txtpic_old4'];

        $pic_new5  = $_FILES['txtpic5']['name'];
        $pic_old5 = $_POST['txtpic_old5'];

        $pic_new6  = $_FILES['txtpic6']['name'];
        $pic_old6 = $_POST['txtpic_old6'];

        if($pic_new1 != '')
        {
            $update_pic1 = $pic_new1;
        }
        else
        {
            $update_pic1 = $pic_old1;
        }

        echo "$update_pic1";

        if($pic_new2 != '')
        {
            $update_pic2 = $pic_new2;
        }
        else
        {
            $update_pic2 = $pic_old2;
        }

        echo "$update_pic2";

        if($pic_new3 != '')
        {
            $update_pic3 = $pic_new3;
        }
        else
        {
            $update_pic3 = $pic_old3;
        }

        echo "$update_pic3";

        if($pic_new4 != '')
        {
            $update_pic4 = $pic_new4;
        }
        else
        {
            $update_pic4 = $pic_old4;
        }

        echo "$update_pic4";

        if($pic_new5 != '')
        {
            $update_pic5 = $pic_new5;
        }
        else
        {
            $update_pic5 = $pic_old5;
        }

        echo "$update_pic5";

        if($pic_new6 != '')
        {
            $update_pic6 = $pic_new6;
        }
        else
        {
            $update_pic6 = $pic_old6;
        }

        echo "$update_pic6";
        
        $sql="UPDATE activities SET title1='$newTitle', pic1='$update_pic1', pic2='$update_pic2', pic3='$update_pic3', pic4='$update_pic4', pic5='$update_pic5', pic6='$update_pic6' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["txtpic1"]["tmp_name"],"uploads/".$_FILES['txtpic1']['name']);
            move_uploaded_file($_FILES["txtpic2"]["tmp_name"],"uploads/".$_FILES['txtpic2']['name']);
            move_uploaded_file($_FILES["txtpic3"]["tmp_name"],"uploads/".$_FILES['txtpic3']['name']);
            move_uploaded_file($_FILES["txtpic4"]["tmp_name"],"uploads/".$_FILES['txtpic4']['name']);
            move_uploaded_file($_FILES["txtpic5"]["tmp_name"],"uploads/".$_FILES['txtpic5']['name']);
            move_uploaded_file($_FILES["txtpic6"]["tmp_name"],"uploads/".$_FILES['txtpic6']['name']);
            
            $_SESSION['status'] = "Updated successfully!";
            header('location:view.php');
        } else {
            $_SESSION['status'] = "Error updating... ";
            header('location:view.php');
        }

        $conn->close();
        
    } 

    if(isset($_POST['update_about']))
    {
        $id = $_POST['txtid'];
        $newTitle = $_POST['title2'];

        $picNew1  = $_FILES['txtpic7']['name'];
        $picOld1 = $_POST['txtpic_old7'];

        $newP1 = $_POST['p1'];

        $picNew2  = $_FILES['txtpic8']['name'];
        $picOld2 = $_POST['txtpic_old8'];

        $newP2 = $_POST['p2'];
        $newP3 = $_POST['p3'];
        $newP4 = $_POST['p4'];
        $newP5 = $_POST['p5'];

        if($picNew1 != '')
        {
            $updatePic1 = $picNew1;
        }
        else
        {
            $updatePic1 = $picOld1;
        }

        if($picNew2 != '')
        {
            $updatePic2 = $picNew2;
        }
        else
        {
            $updatePic2 = $picOld2;
        }

        echo "$updatePic1";
        echo "$updatePic2";

        $sql="UPDATE about SET title2='$newTitle', img1='$updatePic1', p1= '$newP1', img2='$updatePic2', p2= '$newP2', p3= '$newP3', p4= '$newP4', p5= '$newP5' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["txtpic7"]["tmp_name"],"uploads/".$_FILES['txtpic7']['name']);
            move_uploaded_file($_FILES["txtpic8"]["tmp_name"],"uploads/".$_FILES['txtpic8']['name']);
            $_SESSION['status'] = "Updated successfully!";
            header('location:view.php');
        } else {
            $_SESSION['status'] = "Error updating... ";
            header('location:view.php');
        }

        $conn->close();
        
    } 

    if(isset($_POST['update_contact']))
    {
        $id = $_POST['txtid'];
        $newTitle = $_POST['title3'];
        $newLabel1 = $_POST['label1'];
        $newLabel2 = $_POST['label2'];
        $newLabel3 = $_POST['label3'];

        $sql="UPDATE contact SET title3='$newTitle', label1='$newLabel1', label2='$newLabel2', label3='$newLabel3' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status'] = "Updated successfully!";
            header('location:view.php');
        } else {
            $_SESSION['status'] = "Error updating... ";
            header('location:view.php');
        }

        $conn->close();
        
    }
    
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $sql="UPDATE navbar SET title='', home='', activities='', about='', contact='' WHERE id='$id'";
        
        if($conn->query($sql)===TRUE)
		{
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }
        else
        {
            $_SESSION['status'] = "Error: Deletion Failed...";
            header('location:view.php');
        }

        $conn->close();
    }

    if(isset($_GET['h1']))
    {
        $h1 = $_GET['h1'];

        $sql="UPDATE home SET pic='', h1='', p='' WHERE h1='$h1'";
        
        if($conn->query($sql)===TRUE)
		{
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }
        else
        {
            $_SESSION['status'] = "Error: Deletion Failed...";
            header('location:view.php');
        }

        $conn->close();
    }

    if(isset($_GET['title1']))
    {
        $title1 = $_GET['title1'];

        $sql="UPDATE activities SET title1='', pic1='', pic2='', pic3='', pic4='', pic5='', pic6='' WHERE title1='$title1'";
        
        if($conn->query($sql)===TRUE)
		{
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }
        else
        {
            $_SESSION['status'] = "Error: Deletion Failed...";
            header('location:view.php');
        }

        $conn->close();
    }

    if(isset($_GET['title2']))
    {
        $title2 = $_GET['title2'];
        $pic = $_GET['pic'];

        $sql="UPDATE about SET title2='', img1='', p1= '', img2='', p2= '', p3= '', p4= '', p5= '' WHERE title2='$title2'";
        
        if($conn->query($sql)===TRUE)
		{
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }
        else
        {
            $_SESSION['status'] = "Error: Deletion Failed...";
            header('location:view.php');
        }

        $conn->close();
    }

    if(isset($_GET['title3']))
    {
        $title3 = $_GET['title3'];
        $pic = $_GET['pic'];

        $sql="UPDATE contact SET title3='', label1='', label2='', label3='' WHERE title3='$title3'";
        
        if($conn->query($sql)===TRUE)
		{
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }
        else
        {
            $_SESSION['status'] = "Error: Deletion Failed...";
            header('location:view.php');
        }

        $conn->close();
    }
    
?>