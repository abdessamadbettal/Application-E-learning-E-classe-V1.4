<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--//! form of sign up -->
        <form method="POST" id="inscription" action="">
          <div class="form-outline mb-4 ">
            <input type="text" class="form-control" onkeydown="/* validateInputs() */" onkeyup="/* validateInputs() */" name="username" id="username" placeholder="username" />
            <div class="alert "></div>
          </div>

          <div class="form-outline mb-4">
            <input type="email" class="form-control" name="email1" id="email1" placeholder="nouveau email" />
            <div class="alert "></div>
          </div>
          <div class="form-outline mb-4">
            <input type="password" class="form-control" name="pas1" id="pas1" placeholder="nouveau password" />
            <div class="alert "></div>
          </div>
          <div class="form-outline mb-4">
            <input type="password" class="form-control" name="pas2" id="pas2" placeholder="confirmer password" />
            <div class="alert "></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="inscrir">inscription</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>