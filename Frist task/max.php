<?php
$max = "";
$min = "";
$message = " ";
if ($_POST) {

  if ($_POST['first'] >= $_POST['second'] && $_POST['first'] >= $_POST['third']) {
    $max = $_POST['first'];
  } elseif ($_POST['second'] >= $_POST['third']) {
    $max = $_POST['second'];
  } else {
    $max = $_POST['third'];
  }
  $message = "Max = $max";
  if ($_POST['first'] <= $_POST['second'] && $_POST['first'] <= $_POST['third']) {
    $min = $_POST['first'];
  } elseif ($_POST['second'] <= $_POST['third']) {
    $min = $_POST['second'];
  } else {
    $min = $_POST['third'];
  }
  $message .= " , Min =$min";
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>maxMin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-12 text-center">
      <h1 class="h1 text-info"> Calculate max and min </h1>
    </div>
    <div class="col-6 offset-3">
      <form method='post'>
        <div class="form-group">
          <input type="number" name="first" class="form-control" id="fristNum" placeholder="first num" value="<?php if (isset($_POST['first'])) {
                                                                                                                echo $_POST['first'];
                                                                                                              } ?>">
        </div>
        <div class="form-group">
          <input type="number" name="second" class="form-control" id="secondNum" placeholder="second num" value="<?php if (isset($_POST['second'])) {
                                                                                                                    echo $_POST['second'];
                                                                                                                  } ?>">
        </div>
        <div class="form-group">
          <input type="number" name="third" class="form-control" id="thirdNum" placeholder="third num" value="<?php if (isset($_POST['third'])) {
                                                                                                                echo $_POST['third'];
                                                                                                              } ?>">
        </div>


        <button class="btn btn-primary">Calculate</button>
      </form>
      <div>
        <?= $message ?>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>