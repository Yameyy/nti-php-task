<?php
$sign = "";
$message = "";
if ($_POST) {

  if ($_POST['parity'] % 2 == 0) {
    $sign = "even";
    $message = "The Number $_POST[parity] is : $sign";
  } else {
    $sign = "odd";
    $message = "The Number  $_POST[parity]  is : $sign";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>EvenOrOdd</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-12 text-center">
      <h1 class="h1 text-primary"> Check even and odd </h1>
    </div>
    <div class="col-4 offset-4">
      <form method='post'>
        <div class="form-group">
          <input type="number" name="parity" class="form-control" id="firstNum" placeholder="Number" value="<?php if (isset($_POST['parity'])) {
                                                                                                              echo $_POST['parity'];
                                                                                                            } ?>">
        </div>
        <button class="btn btn-dark">Check</button>
        <div>
          <?= $message ?>
        </div>
      </form>
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>