<?php
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $admissionNumber = $_POST['admissionNumber'];
    $studentId = $_POST['studentId'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pinCode = $_POST['pinCode'];
    $photoUpload = $_POST['photoUpload'];
    $aadharCard = $_POST['aadharCard'];
    $panCard = $_POST['panCard'];
    $markSheet = $_POST['markSheet'];
    $document = $_POST['document'];

    
    $host ='localhost';
    $user ='root';
    $pass ='';
    $dbname ='test';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO information(firstName,lastName,admissionNumber,studentId,semester,year,gender,age,dob,phone,email,address,city,state,pinCode,photoUpload,aadharCard,panCard,markSheet,document)
    value ('$firstName','$lastName','$admissionNumber','$studentId','$semester','$year','$gender','$age','$dob','$phone','$email','$address','$city','$state','$pinCode','$photoUpload','$aadharCard','$panCard','$markSheet','$document')";

    mysqli_query($conn,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <h2>Student Information System</h2>
    <form action="#" method="POST" >
        First Name: <input type="text" id="firstName" name="firstName" required>
        Last Name: <input type="text" id="lastName" name="lastName" required><br>
        Admission Number: <input type="text" id="admissionNumber" name="admissionNumber" required>
        Student ID: <input type="text" id="studentId" name="studentId" required><br>
        Semester: <input type="text" id="semester" name="semester" required>
        Year: <input type="text" id="year" name="year" required><br>
        Gender:
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        Age: <input type="number" id="age" name="age" required><br>
        Date of Birth: <input type="date" id="dob" name="dob" required>
        Phone Number: <input type="tel" id="phone" name="phone" required><br>
        Email: <input type="email" id="email" name="email" required>
        Address: <textarea id="address" name="address" required></textarea><br>
        City: <input type="text" id="city" name="city" required>
        State: <input type="text" id="state" name="state" required><br>
        Pin Code: <input type="text" id="pinCode" name="pinCode" required><br>
        <h3>documents Upload</h3>
        Photo Upload: <input type="file" id="photoUpload" name="photoUpload" required>
        Aadhar Card: <input type="file" id="aadharCard" name="aadharCard" required>
        PAN Card: <input type="file" id="panCard" name="panCard" required>
        Mark Sheet Upload: <input type="file" id="markSheet" name="markSheet" required>
        Document Upload: <input type="file" id="documents" name="document" multiple required>
        <div><input type="submit" name="submit" value="Send Data">
        <button type="reset">Reset</button>
        <button type="button" onclick="clearRecords()">Clear Records</button>
        <button type="button" onclick="printForm()">Print</button></div>
        <a href="Record.php">Show Record</a>
    </form>
    <form action="logout.php" method="post">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    <script src="script.js"></script>
</body>
</html>