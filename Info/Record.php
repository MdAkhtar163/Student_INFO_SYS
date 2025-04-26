<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
    <style>
    
        h1{
            display: grid;
            justify-items: center;
            width: 100%;
        }
        table,tr,td{
            border: 1px solid black;
            display: inline-masonry;
            justify-items: center;
            background: #7697af;
            width: 100%;
            padding: 2px;
            border-radius: 1px;
        }
        button {
        display: grid;
        background-color: #4CAF50;
        color: white;
        padding: 22px;
        width: 20%;
        border: double;
        cursor: pointer;
        margin: 5px;
        font-size: 20px;
            }
        button:hover {
        background-color:rgb(240, 43, 43);
        }
        
    </style>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost','root','','test');
    $sql = "SELECT Sr, firstName, lastName, admissionNumber, studentId, semester, year, gender, age, dob, phone, email, address, city, state, pinCode, photoUpload, aadharCard, panCard, markSheet, document FROM information";
    $result = mysqli_query($conn,$sql);
    ?>
  <h1>Student Records</h1>
<table>
    <tr>
        <td>Sr</td>
        <td>firstName</td>
        <td>lastName</td>
        <td>admissionNumber</td>
        <td>studentId</td>
        <td>semester</td>
        <td>year</td>
        <td>gender</td>
        <td>age</td>
        <td>dob</td>
        <td>phone</td>
        <td>email</td>
        <td>address</td>
        <td>city</td>
        <td>state</td>
        <td>pinCode</td>
        <td>photoUpload</td>
        <td>aadharCard</td>
        <td>panCard</td>
        <td>markSheet</td>
        <td>document</td>
    </tr>
    <?php
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo 
        "<tr>
            <td>".$row['Sr']."</td>
            <td>".$row['firstName']."</td>
            <td>".$row['lastName']."</td>
            <td>".$row['admissionNumber']."</td>
            <td>".$row['studentId']."</td>
            <td>".$row['semester']."</td>
            <td>".$row['year']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['age']."</td>
            <td>".$row['dob']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['email']."</td>
            <td>".$row['address']."</td>
            <td>".$row['city']."</td>
            <td>".$row['state']."</td>
            <td>".$row['pinCode']."</td>
            <td>".$row['photoUpload']."</td>
            <td>".$row['aadharCard']."</td>
            <td>".$row['panCard']."</td>
            <td>".$row['markSheet']."</td>
            <td>".$row['document']."</td>
        </tr>";
        }
    ?>
</table>
<form action="logout.php" method="post">
            <button type="submit" class="logout-button">Logout</button>
 </form>
 <form action="home.php" method="post">
            <button type="submit" class="Back-button">Back</button>
 </form>
</body>
</html>