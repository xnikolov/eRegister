<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
    <title>E-Дневник</title>
</head>
<body>


    <?php include('header.html') ?>
    <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'school_register_db');
            $mysqli->set_charset("utf8");
                
            $result = $mysqli->query("SELECT * FROM test_marks ") or die($mysqli->error);
        // pre_r($result);
    ?>


<div class="container">
        <?php if(isset($_SESSION['message'])): ?>
        
        <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>

        </div>
        <?php endif ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Име</th>
                    <th>Фамилия</th>
                    <th>Клас</th>
                    <th>ТО</th>
                    <th>КР1</th>
                    <th>КР2</th>
                    <th>СО</th>
                    <th colspan="2">Управление</th>
                </tr>
            </thead>

            <?php
                 while ($row = $result->fetch_assoc()) : ?>

                <tr>
                    <td><?php echo $row['class_number']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo $row['marks_ongoing']; ?></td>
                    <td><?php echo $row['mark_term_one']; ?></td>
                    <td><?php echo $row['mark_term_two']; ?></td>
                    <td><?php echo $row['final_mark']; ?></td>
                    <td><a href="add-info.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Редактиране</a></td>
                    <td><a href="add-info.php?delete=<?php echo $row['id'];?>" style="color:#000;">Изтриване</a></td>
                </tr>
        <?php endwhile; ?>
        </table>
        <div class="form-group myGroup">
            <button class="btn btn-dark myButton"><a href="add-info.php">Въвеждане на нов</a></button>
        </div>
    </div>
      
    <?php
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>


 


    

