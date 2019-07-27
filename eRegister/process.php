<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'school_register_db') or die (mysqli_error($mysqli));
    $mysqli->set_charset("utf8");

$studentName = "";
$studentFamily = "";
$classNumber = "";
$class = "";
$marks = "";
$termOne = "";
$termTwo = "";
$finalMark = "";
$update = false;
$id = 0;


if(isset($_POST['save'])){
    $studentName = $_POST['studentName'];
    $studentFamily = $_POST['studentFamily'];
    $class = $_POST['class'];
    $classNumber = $_POST['classNumber'];
    $marks = $_POST['ongoing'];
    $termOne = $_POST['term_one'];
    $termTwo = $_POST['term_two'];
    $finalMark = $_POST['final_mark'];

    $mysqli->query("INSERT INTO test_marks (first_name, last_name, class, class_number, marks_ongoing, mark_term_one, mark_term_two, final_mark) 
    VALUES('$studentName', '$studentFamily', '$class', '$classNumber', '$marks', '$termOne', '$termTwo', '$finalMark')")
    or die ($mysqli->error);

    $_SESSION['message'] = "Данните са въведени успешно.";
    $_SESSION['msg_type'] = "success";

    header("location: add-info.php");

}

if(isset($_GET['delete'])){ 
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM test_marks WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Данните бяха изтрити.";
    $_SESSION['msg_type'] = "danger";

    header("location: table.php");

}

if(isset($_GET['edit'])){ 
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM test_marks WHERE id=$id") or die($mysqli->error);

    
        $row = $result->fetch_array();
        $studentName = $row['first_name'];
        $studentFamily = $row['last_name'];
        $classNumber = $row['class_number'];
        $class = $row['class'];
        $marks = $row['marks_ongoing'];
        $termOne = $row['mark_term_one'];
        $termTwo = $row['mark_term_two'];
        $finalMark = $row['final_mark'];
    }



    if(isset($_POST['update'])){
        $studentName = $_POST['studentName'];
        $studentFamily = $_POST['studentFamily'];
        $class = $_POST['class'];
        $classNumber = $_POST['classNumber'];
        $marks = $_POST['ongoing'];
        $termOne = $_POST['term_one'];
        $termTwo = $_POST['term_two'];
        $finalMark = $_POST['final_mark'];

        $mysqli->query("UPDATE test_marks SET first_name='$studentName', last_name='$studentFamily', class='$class', class_number='$classNumber', marks_ongoing='$marks', mark_term_one='$termOne', mark_term_two='$termTwo', final_mark='$finalMark'") or
        die($mysqli->error);

        $_SESSION['message'] = "Данните бяха обоновени успешно.";
        $_SESSION['msg_type'] = "warning";

        header('location: table.php');


    }

?>