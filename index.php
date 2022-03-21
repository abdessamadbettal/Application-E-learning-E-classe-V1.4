<?php
// ! pour iscription
include 'crud.php';

// ! validation de motpasse par php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `comptes` WHERE email='$email' AND passeword='$password' ";
  $resultat = mysqli_query($connecter, $query);
  $row = mysqli_fetch_assoc($resultat);
  $count = mysqli_num_rows($resultat);
  if ($count == 1) {
    if (isset($_POST['check'])) {
      setcookie('email', $email, time() + 60 * 60 * 24);
      setcookie('password', $password, time() + 60 * 60 * 24);
    }
    header('location:dash.php');
    $_SESSION['username'] = $row['username'];
  } else {
    $error = "invlid password or email ";
  }
}

$titre_page = 'Sign-in';
require 'header.php';
?>
<section class="vh-100 " id="background-sginin">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <form action="" method="POST">
            <div class="card-body p-5 text-center">
              <h1 class="border-start border-5 border- border-primary d-flex justify-content-start " id="font1">E-classe</h1>
              <?php if (isset($_SESSION['message'])) : ?>
                <div class="<?= $_SESSION['alert'] ?>">
                  <?php echo $_SESSION['message'];
                  unset($_SESSION['message']);
                  ?>
                </div>
              <?php endif ?>
              <h3>Sign in</h3>
              <h6>enter your credentials to access your account</h6>
              <!-- //! si le password est incorect -->
              <?php if (isset($error)) {
                echo '<p class="alert alert-danger">' . $error . '</p>';
              }  ?>
              <div class="form-outline mb-4">
                <label class="form-label d-flex justify-content-start " for="email">Email</label>
                <!-- //! engestrer des cookies pour email -->
                <input type="email" id="email" name="email" value="<?php if (isset($_COOKIE['email'])) {
                                                                      echo $_COOKIE['email'];
                                                                    } ?>" class="form-control form-control-lg" placeholder="enter your email" />
              </div>
              <div class="form-outline mb-4">
                <!-- //! engestrer des cookies pour password -->
                <label class="form-label d-flex justify-content-start " for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php if (isset($_COOKIE['password'])) {
                                                                              echo $_COOKIE['password'];
                                                                            } ?>" class="form-control form-control-lg" placeholder="enter your password" />
              </div>
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" name="check" id="check" />
                <label class="form-check-label" for="check"> Remember password </label>
              </div>
              <button class="btn btn-primary btn-lg btn-block w-100 border-1 rounded-3" name="submit" type="submit">SIGN IN</button>
              <h6>Forfot your password? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="text-primary text-decoration-underline">SIGN UP</span></a></h6>

            </div>
          </form>
          <?php include "sign_up.php"; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require 'footer.php';
?>