<?php
$title = 'Modifier';
include './head.php';
?>
<?php
require_once '../crud.php';
?>
<body>
    <div class="container">
        <a href="../student.php" class="my-4 btn btn-primary btn-create p-2">BACk</a>
        <form method="POST" action="">
            <div class="form-outline mb-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Phone</label>
                <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Enroll Number</label>
                <input type="number" class="form-control" name="enroll" value="<?php echo $enroll  ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Date of admission</label>
                <input type="date" class="form-control" name="date" value="<?php echo $date  ?>" />
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="modifier">Envoyer</button>
        </form>
    </div>
<?php

include './footre.php';
?>
