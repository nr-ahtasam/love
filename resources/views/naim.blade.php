
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center m-auto py-3 bg-dark">
            <form action="view8.php"  method="post" enctype="multipart/form-data">
            <div class="form-group text-white">
              <h1>Register Form </h1>
              <input type="text" class="form-control" name="name"
              placeholder="Enter Name">
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_name'])) {
                echo $_GET['err_name'];
              }
               ?>

            </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email"
              placeholder="Enter email">
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_email'])) {
                echo $_GET['err_email'];
              }
               ?>

            </div>
            </div>
            <div class="form-group abc">

              <input type="Password" class="form-control" name="password"
              placeholder="Enter Password" id="myInput">
              <button type="button"  class="btn btn-success"onclick="myFunction()">show</button>
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_password'])) {
                echo $_GET['err_password'];
              }
               ?>

            </div>
            </div>
            <div class="form-group">

              <select class="form-control" name="country">
                <option value=""> Chose country</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="USA"> USA</option>
                <option value="India">India</option>
                <option value="Argentina">Argentina</option>
                <option value="Brazil">Brazil</option>
              </select>
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_country'])) {
                echo $_GET['err_country'];
              }
               ?>
            </div>
            </div>




            <div class="form-group text-white">
              <input type="radio" name="gender" value="Male">Male
              <input type="radio" name="gender" value="Female">Female
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_gender'])) {
                echo $_GET['err_gender'];
              }
               ?>

            </div>
            </div>
            <div class="form-group text-white">
              <input type="checkbox" name="hobbies[]" value="cricket"> cricket
              <input type="checkbox" name="hobbies[]" value="football"> football
              <input type="checkbox" name="hobbies[]" value="hadudu"> hadudu
              <input type="checkbox" name="hobbies[]" value="chese"> chese
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_hobbies'])) {
                echo $_GET['err_hobbies'];
              }
               ?>

            </div>
            </div>

            <div class="form-group">
        <input type="date" name="date" class="form-control">
                <div class="err text-danger py-2">
              <?php
              if (!empty($_GET['err_date'])) {
                echo $_GET['err_date'];
              }
               ?>

            </div>
            </div>
            <div class="form-group">
        <input type="file" name="photo" class="form-control" onchange="document.getElementById('imgs').src = window.URL.createObjectURL(files[0])">
        <div class="">
          <img src="" alt="" id="imgs"width="100">
        </div>
                <div class="err text-danger py-2">

            </div>
            </div>
            <button type="submit" class="btn btn-success  offset-md-3">Submit</button>


            <div class=" <?=(!empty($_GET['success'])?'alert alert-success':' ')?> mt-3" role="alert">
              <?php
              if (!empty($_GET['success'])) {
                echo $_GET['success'];
              }


                ?>

    </div>



              <?php if ( isset($_SESSION['exist_email'])) {?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo $_SESSION['exist_email']; unset($_SESSION['exist_email']); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <?php  }


                ?>
              </div>
            </div>
          </form>

          </div>

        </div>

      </div>
    </section>







  </body>
</html>
