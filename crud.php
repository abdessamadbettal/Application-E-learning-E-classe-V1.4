<?php
session_start();
include 'db.php';

// ! insertion pour le table de comptes
if (isset($_POST['inscrir'])) {
    $username = $_POST['username'];
    $email1 = $_POST['email1'];
    $pas1 = $_POST['pas1'];
   

    $query = "INSERT INTO comptes (username , email , passeword ) VALUES ('$username' , '$email1' , '$pas1' ) ";
    mysqli_query($connecter, $query);
    // $_SESSION['message'] = "has ben aded avec seccus";
    // $_SESSION['alert'] = "alert alert-success";
    /* header('location: index.php');
    $_SESSION['message'] = "has ben added avec seccus";
    $_SESSION['alert'] = "alert alert-success"; */
}

// ! insertion pour le table de students
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll = $_POST['enroll'];
    $date = $_POST['date'];

    $query = "INSERT INTO students (name , email , phone , enroll , date ) VALUES ('$name' , '$email' , '$phone' , '$enroll' ,'$date' ) ";
    mysqli_query($connecter, $query);
    // $_SESSION['message'] = "has ben aded avec seccus";
    // $_SESSION['alert'] = "alert alert-success";
    /* header('location: index.php');
    $_SESSION['message'] = "has ben added avec seccus";
    $_SESSION['alert'] = "alert alert-success"; */
}
if (isset($_GET['delet'])) {
    $id = $_GET['delet'];
    $query = "DELETE FROM students WHERE $id = id";
    mysqli_query($connecter, $query);
    // $_SESSION['message'] = "has ben deleted avec seccus";
    // $_SESSION['alert'] = "alert alert-danger";
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "select * from students where id = $id";
    $result = mysqli_query($connecter, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $enroll = $row['enroll'];
    $date = $row['date'];

    if (isset($_POST['modifier'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enroll = $_POST['enroll'];
        $date = $_POST['date'];

        $queri = "UPDATE students SET name = '$name' , email = '$email' , phone = '$phone' , enroll = '$enroll' , date = '$date'  WHERE id='$id'";
        mysqli_query($connecter, $queri);
        // $_SESSION['message'] = "has ben added avec seccus";
        // $_SESSION['alert'] = "alert alert-primary";
        // echo '<script>document.location.replace("index.php")</script>';
        header('location: ../student.php');
    }
    // echo '<script>document.location.replace("index.php")</script>';



}
