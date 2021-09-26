<?php

session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style2.css">
</head>

<body>
    <?php
    include 'dbcon.php';

    if(isset($_POST['submit'])){
        $Name = mysqli_real_escape_string($con, $_POST['Name']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $Secondary = mysqli_real_escape_string($con, $_POST['Secondary']);
        $H_Secondary = mysqli_real_escape_string($con, $_POST['H_Secondary']);
        $O_qualification = mysqli_real_escape_string($con, $_POST['O_qualification']);
        $About = mysqli_real_escape_string($con, $_POST['About']);
        $Skills = mysqli_real_escape_string($con, $_POST['Skills']);
        $Hobbies = mysqli_real_escape_string($con, $_POST['Hobbies']);
        $Domain = mysqli_real_escape_string($con, $_POST['Domain']);
        $Facebook = mysqli_real_escape_string($con, $_POST['Facebook']);
        $Instagram = mysqli_real_escape_string($con, $_POST['Instagram']);
        $Linkedin = mysqli_real_escape_string($con, $_POST['Linkedin']);
        $Github = mysqli_real_escape_string($con, $_POST['Github']);

        $emailquery = "select * from portfolio where Email= '$Email' ";
        // $emailquery = "SELECT * FROM `portfolio where `Email`= '$Email' ";

        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            echo "email already exists";
            $email_pass = mysqli_fetch_assoc($query);
            $_SESSION['Name'] = $email_pass['Name'];
            $_SESSION['Email'] = $email_pass['Email'];
            $_SESSION['Secondary'] = $email_pass['Secondary'];
            $_SESSION['H_Secondary'] = $email_pass['H_Secondary'];
            $_SESSION['O_qualification'] = $email_pass['O_qualification'];
            $_SESSION['About'] = $email_pass['About'];
            $_SESSION['Skills'] = $email_pass['Skills'];
            $_SESSION['Hobbies'] = $email_pass['Hobbies'];
            $_SESSION['Domain'] = $email_pass['Domain'];
            $_SESSION['Facebook'] = $email_pass['Facebook'];
            $_SESSION['Instagram'] = $email_pass['Instagram'];
            $_SESSION['Linkedin'] = $email_pass['Linkedin'];
            $_SESSION['Github'] = $email_pass['Github'];
            ?>
             <script>
                    location.replace("home.php");
                </script>
            <?php
        }else{
            $insertquery = "insert into portfolio(`Name`, `Email`, `Secondary`, `H_Secondary`, `O_qualification`, `About`,
             `Skills`, `Hobbies`, `Domain`, `Facebook`, `Instagram`, `Linkedin`, `Github`) values('$Name', '$Email', '$Secondary', '$H_Secondary', '$O_qualification', '$About',
             '$Skills', '$Hobbies', '$Domain', '$Facebook', '$Instagram', '$Linkedin', '$Github')";

             $iqueryRes = mysqli_query($con, $insertquery) or die
            (mysqli_error($con));
            if($iqueryRes){
                $_SESSION['Email'] = $Email;
                ?>
                    <script>
                        alert("Inserted Sucessfully")
                        </script>
                
                
                        <?php
            }else{
                    ?>
                        <script>
                            alert("No Insertion")
                        </script>
                    <?php
            }
        }
    }
    ?>
    <h1>Teacher Details for Attendance Form</h1>
    <form action ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4"> Input Name of Students</label>
                <input type="text" class="form-control" placeholder="Name of Students" name ="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Teacher's Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name ="Email">
            </div>
            
        </div>
        <div class="form-group">
            <label for="inputAddress">Class , Subject , No.of Students</label>
            <input type="text" class="form-control" name="Secondary" placeholder="Class Subject No.of Students ">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Class Overall Percentage</label>
            <input type="text" class="form-control" name="H_Secondary" placeholder="Overall percentage   , School">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Qualifications of Teacher</label>
            <input type="text" class="form-control"name ="O_qualification" placeholder="Other Qualifications">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">About the Subject(Insights) </label>
                <input type="text" class="form-control"name="About" placeholder="Insights">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Skills the students will learn</label>
                <input type="text" class="form-control"name="Skills" placeholder="Skills">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Homework Link </label>
                <input type="text" class="form-control" name="Hobbies"placeholder="Homework">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Class</label>
                <select id="inputState" class="form-control" name="Domain">
                    <option selected>Choose...</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>1st year</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label >Facebook Id (not mandatory)</label>
                <input type="text" class="form-control"name="Facebook" placeholder="Facebook Id">
            </div>
            <div class="form-group col-md-6">
                <label >Instagram Id (not mandatory)</label>
                <input type="text" class="form-control"name="Instagram" placeholder="Instagram Id">
            </div>
            <div class="form-group col-md-6">
                <label >LinkedIn Id (not mandatory)</label>
                <input type="text" class="form-control"name="Linkedin" placeholder="LinkedIn Id">
            </div>
            <div class="form-group col-md-6">
                <label >Github Id (not mandatory)</label>
                <input type="text" class="form-control"name="Github" placeholder="Github Id">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit" name="submit" >Submit</button>
    </form>
</body>

</html>