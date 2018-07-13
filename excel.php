<?php
include_once ('conn.php');
if(isset($_POST['Up'])) {
    if(isset($_FILES['file'])) {
        if ($_FILES['file']['error'] > 0) {
            echo "Error: " . $_FILES["file"]["error"] . "<br>";
        } else {
            echo "Upload: " . $_FILES['file']['name'] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
            //echo "Stored in: " . $_FILES["file"]["tmp_name"];
            $a = $_FILES["file"]["tmp_name"];
            //echo $a;


            // path where your CSV file is located
            //define('CSV_PATH','C:/xampp/htdocs/');
            //<!-- C:\\xampp\\htdocs -->
            // Name of your CSV file
            $csv_file = $a;

            if (($getfile = fopen($csv_file, "r")) !== FALSE) {
                //$data = fgetcsv($getfile, 1000, ",");
                //echo (var_dump($data));
                $inserted=0;
                $id=$_GET['id'];
                $_SESSION["id"]=$id;
                while (!feof($getfile)) {
                    $data = fgetcsv($getfile);
                    /* while ($data == true) {
                         //$num = count($data);
                         //echo $num
                         //for ($c=0; $c < $num; $c++) {*/
                    if($data==null)
                        break;
                    $inserted++;
                    $col1 = $data[0];
                    $col2 = $data['1'];
                    $col3 = $data[2];
                    $col4 = $data['3'];
                    $col5 = $data['4'];
                    $col6 = $data['5'];
                    $col7 = $data['6'];
                    $col8 = $data['7'];
                    $query = "INSERT INTO questions(Exam_id,Question_id,Question,optionA,optionB,optionC,optionD,correctAnswer,marks) VALUES('$id','$col1','$col2','$col3','$col4','$col5','$col6','$col7','$col8')";
                    $s = mysqli_query($link, $query);
                    if ($s) {
                        $quest=mysqli_fetch_assoc(mysqli_query($link,"SELECT Exam_totalQuestion from exam WHERE Exam_id='$id'"));
                        $quest=$quest['Exam_totalQuestion'];
                        $total=$quest-$inserted;
                        header("location: manageQuestion.php?id=$total");
                    } else {
                        echo "NOT Successfullll";
                    }
                }
                fclose($getfile);
            }
        }
        //echo "File data successfully imported to database!!"
    }
    else
    {
        echo "ERROR!!!!";
    }
}
if (isset($_POST['manage']))
{
    $_SESSION["id"]=$id;
    header("location: manageQuestion.php?id=$quest");
}