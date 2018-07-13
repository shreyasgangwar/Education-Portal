<?php
if(isset($_FILES['Upload2']))
{
    $filename = $_FILES["Upload2"]['name'];
    $filetmp = $_FILES["Upload2"]['tmp_name'];
    $filesize = $_FILES["Upload2"]['size'];
    $file_basename = basename($_FILES["Upload2"]['name']);
    $dir = "images/";
    $final_dir2 = $dir . $file_basename;
    if ($filesize>500)
    {
        $error.="Image 2 too large upload again. LIMIT: 500kb";
    }
    else{
        move_uploaded_file($filetmp, $final_dir2);
        $iquery="INSERT INTO image(image_name,image_path) VALUES ('$filename','$final_dir2');";
        $result1=$link->query($iquery);
        $fetchid = null;
        $fetchid="SELECT * FROM image WHERE image_path ='$final_dir2' ;";
        $result2=$link->query($fetchid);
        $row = $result2->fetch_assoc();
        $ai = $row["id"];
    }

}
if(isset($_FILES['Upload3']))
{
    $filename = $_FILES["Upload3"]['name'];
    $filetmp = $_FILES["Upload3"]['tmp_name'];
    $filesize = $_FILES["Upload3"]['size'];
    $file_basename = basename($_FILES["Upload3"]['name']);
    $dir = "images/";
    $final_dir3 = $dir . $file_basename;
    if ($filesize>500)
    {
        $error.="Image 3 too large upload again. LIMIT: 500kb";
    }
    else{
        move_uploaded_file($filetmp, $final_dir3);
        $iquery="INSERT INTO image(image_name,image_path) VALUES ('$filename','$final_dir3');";
        $result1=$link->query($iquery);
        $fetchid = null;
        $fetchid="SELECT * FROM image WHERE image_path ='$final_dir3' ;";
        $result2=$link->query($fetchid);
        $row = $result2->fetch_assoc();
        $bi = $row["id"];
    }

}
if(isset($_FILES['Upload4']))
{
    $filename = $_FILES["Upload4"]['name'];
    $filetmp = $_FILES["Upload4"]['tmp_name'];
    $filesize = $_FILES["Upload4"]['size'];
    $file_basename = basename($_FILES["Upload4"]['name']);
    $dir = "images/";
    $final_dir4 = $dir . $file_basename;
    if ($filesize>500)
    {
        $error.="Image 4 too large upload again. LIMIT: 500kb";
    }
    else{
        move_uploaded_file($filetmp, $final_dir4);
        $iquery="INSERT INTO image(image_name,image_path) VALUES ('$filename','$final_dir4');";
        $result1=$link->query($iquery);
        $fetchid = null;
        $fetchid="SELECT * FROM image WHERE image_path ='$final_dir4' ;";
        $result2=$link->query($fetchid);
        $row = $result2->fetch_assoc();
        $ci = $row["id"];
    }

}
if(isset($_FILES['Upload5']))
{
    $filename = $_FILES["Upload5"]['name'];
    $filetmp = $_FILES["Upload5"]['tmp_name'];
    $filesize = $_FILES["Upload5"]['size'];
    $file_basename = basename($_FILES["Upload5"]['name']);
    $dir = "images/";
    $final_dir5 = $dir . $file_basename;
    if ($filesize>500)
    {
        $error.="Image 5 too large upload again. LIMIT: 500kb";
    }
    else{
        move_uploaded_file($filetmp, $final_dir5);
        $iquery="INSERT INTO image(image_name,image_path) VALUES ('$filename','$final_dir5');";
        $result1=$link->query($iquery);
        $fetchid = null;
        $fetchid="SELECT * FROM image WHERE image_path ='$final_dir5' ;";
        $result2=$link->query($fetchid);
        $row = $result2->fetch_assoc();
        $di = $row["id"];
    }

}