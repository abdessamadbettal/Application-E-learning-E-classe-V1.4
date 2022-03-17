<?php
// session_start();
include 'crud.php';
?>
<?php
if (!isset($_SESSION['username'])) {
  header('location: index.php');
} else {
  $titre_page = 'student';
  require 'header.php';
?>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <?php
      $active_s = ' active px-3';
      include 'sidebar.php';
      ?>
    </div>
    <!-- nav bar -->
    <div class="col ">
      <?php
      include 'navbar.php';
      ?>
      <div class="col">
        <div class="d-flex justify-content-between">
          <h2 class="fw-bold">students lists</h2>
          <div>
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un student
    </button>
            <?php include_once 'modalbootstrap.php' ?>

            <i class="bi bi-chevron-expand fs-3 text-info"></i>
          </div>
        </div>
        <div class="table-responsive ">
          <table class="table table-hover table-striped ">
            <tbody class="border-top-0">
              <tr>
                <td scope="row" class="text-secondary"></td>
                <td class="text-secondary">Name</td>
                <td class="text-secondary">Email</td>
                <td class="text-secondary">Phone</td>
                <td class="text-secondary">Enroll Number</td>
                <td class="text-secondary" colspan="2">Date of admission</td>
              </tr>
              <?php
              require_once 'db.php';
              $query = "SELECT * FROM `students`  ";
              $resultat = mysqli_query($connecter, $query);
              if (mysqli_num_rows($resultat) > 0) {
                // $i = 0;
                // while ($row = mysqli_fetch_assoc($resultat)) {
                  foreach ($resultat as $row) {
                    # code...
                  
                  echo '<tr class="">
                <td class="text-black "> <img src="img/username.png" alt=""></td>
                <td class="text-black py-4">' . $row['name'] . '</td>
                <td class="text-black py-4">' . $row['email'] . '</td>
                <td class="text-black py-4">' . $row['phone'] . '</td>
                <td class="text-black py-4">' . $row['enroll'] . '</td>
                <td class="text-black py-4">' . $row['date'] . '</td>
                <td class="py-4 d-flex justify-content-evenly"><a  href="./crud-mysql/edit.php?edit=' . $row['id'] . ' "  > <i class="bi bi-pen"  id="text-ciel"></i></a><a href="student.php?delet=' . $row['id'] . ' "  ><i class="bi bi-trash " id="text-ciel"></i></a></td>

              </tr>
              <tr>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
              </tr>
              ';
                  // $i++;
                }
              } else {
                echo 'no result found';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
<?php
  require 'footer.php';
}
?>