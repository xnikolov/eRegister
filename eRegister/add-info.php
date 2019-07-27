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
	
    <title>E-Дневник</title>
</head>
<body>

    

    <?php include ('header.html') ?> <!--Include the header of the website-->
    <?php require_once 'process.php'; ?> 

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




    <!--Create the Ongoing Assestment FORM-->
    <div class="container myContainer">
    
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <!--Name-->
            <div class="form-group">
                <label for="studName">Име на ученик</label>
                <input type="text" name="studentName" class="form-control" value="<?php echo $studentName;?>" placeholder="Въведете името на ученика" id="studName" required>
            </div>

            <!--Second Name-->
            <div class="form-group">
                <label for="studFamily">Фамилия на ученик</label>
                <input type="text" name="studentFamily" class="form-control" value="<?php echo $studentFamily;?>" placeholder="Въведете фамилията на ученика" id="studFamily" required>
            </div>

             <!--Class-->
            <div class="form-group">
                <label for="studNumber">Клас</label>
                <input type="text" name="class" class="form-control" value="<?php echo $class;?>" placeholder="Въведете класа на ученика" id="studNumber" required>
            </div>

            <!--Class Number-->
            <div class="form-group">
                <label for="studNumber">Номер в клас</label>
                <input type="number" name="classNumber" class="form-control" value="<?php echo $classNumber;?>" placeholder="Въведете номера на ученика" id="studNumber" required>
            </div>

            <!--Mark 1-->
            <div class="form-group">
                <label for="studMark">Текущи оценки</label>
                <input type="text" name="ongoing" class="form-control" value="<?php echo $marks;?>" placeholder="Въведете оценките на ученика" id="studMark" min="2" max="6" >
            </div>

            <!--Mark 2-->
            <div class="form-group">
                <label for="studMark">Класна работа 1</label>
                <input type="number" name="term_one" class="form-control" value="<?php echo $termOne;?>" placeholder="Въведете оценка от класна работа 1" id="studMark" min="2" max="6" >
            </div>
            
             <!--Mark 3-->
             <div class="form-group">
                <label for="studMark">Класна работа 2</label>
                <input type="number" name="term_two" class="form-control" value="<?php echo $termTwo;?>" placeholder="Въведете оценка от класна работа 2" id="studMark" min="2" max="6" >
            </div>

             <!--Mark 4-->
             <div class="form-group">
                <label for="studMark">Годишна оценка</label>
                <input type="number" name="final_mark" class="form-control" value="<?php echo $finalMark;?>" placeholder="Въведете годишната оценка на ученика" id="studMark" min="2" max="6" >
            </div><br>



            <!--Submit Button-->
            <div class="form-group myGroup">


            <?php 
                if ($update == true):
             ?>

             <button type="submit" class="btn btn-primary" name="update">Запази промените</button>
                <?php else: ?>
             <button type="submit" class="btn btn-primary" name="save">Запази</button>

                <?php endif; ?>

            
tn-dar                <button class="btn bk myButton"><a href="table.php">Таблица</a></button>
            </div>
        </form>
    </div>
    
    
</body>
</html>