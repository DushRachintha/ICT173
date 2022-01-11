<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        Name: <input type="text" name="stdName" id="stdName"><br><br>
        Reg No: <input type="text" name="stdRegNum" id="stdRegNum"><br><br>
        <input type="submit" value="submit">

    </form>
    <?php
        class StudentParent{
            public $stdName;
            public $stdRegNum;
            function constructor($name, $regnum){
                $this->stdName=$name;
                $this->stdRegNum=$regnum;

            }

        }

        class StudentChild extends StudentParent{
            function display($name, $regnum){
                echo "Name:".$this->$name;
                echo "Reg num is: ".$this->$regnum;
            }

        }

        if (isset($_POST["submit"])){
            $name =$_POST["stdName"];
            $regnum=$_POST["stdRegNum"];
            $StudentChild = new StudentChild($name, $regnum);
            $StudentChild->display();
    ?>
</body>
</html>
