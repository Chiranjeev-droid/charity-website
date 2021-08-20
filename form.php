<?php
if(isset($_POST['submit'])){
    include("connection.php");
    $name=($_POST['name']);
    $reg=($_POST['registration']);
    $age=($_POST['age']);
    $service=($_POST['service']);
    $surgery=($_POST['surgery']);
    $venue=($_POST['venue']);
    $town=($_POST['town']);
    $state=($_POST['state']);
    $country=($_POST['country']);
    $gender=($_POST['gender']);
    $doctor=($_POST['doctor']);
    $eyes=($_POST['eyes']);
    $additional=($_POST['additional']);
    $filename = $_FILES["uploadFile"]["name"];
    $tempname = $_FILES["uploadFile"]["tmp_name"];
    $folder = "img/".$filename;
    move_uploaded_file($tempname,$folder);  
    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
        $ErrMsg = "Only alphabets and whitespace are allowed in name.";  
            echo " <script>alert('.$ErrMsg.');</script>"; 
        
    } else {
        if (!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $input)) {
             $ErrMsg = "Only alphanumeric registation number is allowed.";  
            echo " <script>alert('.$ErrMsg.');</script>"; 
        
    } else {
      
        
     

    
    $q3= "INSERT INTO `charity` (`name`, `reg_no`, `age`, `service`, `surgery`, `venue`, `city`, `state`, `country`, `gender`, `doctor_name`, `eyes`, `notes`,`image`) VALUES ('$name', '$reg', '$age', '$service', '$surgery', '$venue', '$town', '$state', '$country', '$gender', '$doctor', '$eyes','$additional','$folder')";
    if(mysqli_query($conn, $q3)){
       echo " <script>alert('Message sent Successfully!');</script>";

        
    }else {
        echo " <script>alert('Message not sent ');</script>";
    }
    }
} 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseKosh Charity</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <!-- <div class="wrapper">
        <div class="title">
            Registration Form
        </div> -->

    <!-- <div > -->
    <div class="diffSection" id="contactus_section">
        <center>
            <p style="font-size: 50px; padding: 100px">Contact Us</p>
        </center>
        <div class="csec"></div>
        <div class="back-contact">
            <div class="cc">
                <form action="" method="post" enctype="multipart/form-data">
                    <label>Name <span class="imp">*</span></label><br>
                    <input type="text" name="name" style="width: 100%" required="required" id='nameInput'
                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><br>
                    <label>Registration Number <span class="imp">*</span></label><br>
                    <input type="text" name="registration" style="width: 100%" required="required"><br>
                    <label>Age</label><br>
                    <input type="number" name="age" style="width: 100%" required="required" min="1"><br>

                    <label>Service Recieved<span class="imp">*</span></label><br>

                    <select name="service" style="width: 100%" required="required">
                        <option value="good">Good</option>
                        <option value="okay">Okay</option>
                        <option value="bad">Bad</option>
                    </select><br>
                    <label>Surgery Method</label><br>
                    <select name="surgery"style="width: 100%" required="required">
                        <option value="laser">Laser eye surgery</option>
                        <option value="Cataract">Cataract surgery</option>
                        <option value="Glaucoma">Glaucoma surgery</option>
                        <option value="Canaloplasty">Canaloplasty</option>
                        <option value="Refractive">Refractive surgery</option>
                        <option value="Corneal">Corneal surgery</option>
                        <option value="Vitreoretinal">Vitreoretinal surgery</option>
                    </select><br>
                    <label>Venue <span class="imp">*</span></label><br>
                    <input type="text" name="venue" style="width: 100%" required="required"><br>
                    <label>City/Village <span class="imp">*</span></label><br>
                    <input type="text" name="town" style="width: 100%" required="required"><br>
                    <label>State <span class="imp">*</span></label><br>
                    <input type="text" name="state" style="width: 100%" required="required"><br>
                    <label>Country <span class="imp">*</span></label><br>
                    <input type="text" name="country" style="width: 100%" required="required"><br>
                    <label>Gender <span class="imp">*</span></label><br>
                    <select name="gender" style="width: 100%" required="required">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select><br>
                    <label>Doctor's Name <span class="imp">*</span></label><br>
                    <input type="text" name="doctor" style="width: 100%" required="required" id='nameInput'
                        onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'><br>
                    <label>No. Of Eyes Operated<span class="imp">*</span></label><br>
                    <input type="number" name="eyes" style="width: 100%" min="0" required="required"><br>
                   
                    <label>Notes</label><br>
                    <textarea name="additional"></textarea><br>
                    
                    <label>Upload image<span class="imp">*</span></label><br>
                    <!-- <input type="file" accept="image/*" capture="camera" /> -->
                    <input type="file" name="uploadFile"  style="width: 100%" required="required"/>
                    <button type="submit" name="submit" id="csubmit">Send Message</button>

</form>


            </div>
        </div>
    </div>
</body>

</html>