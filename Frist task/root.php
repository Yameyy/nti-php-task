<?php
$root = " ";
$message = "";
if ($_POST) {

  $root = pow($_POST['first'], (1 / $_POST['second']));
  $message = "the root of $_POST[first] = $root";
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>root</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-12 text-center">
      <h1 class="h1 text-dark"> Calculate the root number </h1>
    </div>
    <form method='post'>
      <div class="form-group">
        <input type="number" name="first" class="form-control" id="first_num" placeholder="First Number" value="<?php if (isset($_POST['first'])) {
                                                                                                                  echo $_POST['first'];
                                                                                                                } ?>">
      </div>
      <div class="form-group">
        <input type="number" name="second" class="form-control" id="second_num" placeholder="Second Number" value="<?php if (isset($_POST['second'])) {
                                                                                                                      echo $_POST['second'];
                                                                                                                    } ?>">
      </div>



      <button class="btn btn-primary">Calculate</button>
    </form>
    <div>
      <?= $message ?>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>