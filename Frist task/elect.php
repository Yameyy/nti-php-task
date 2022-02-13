<?php
$price = " ";
$perunit = " ";
$usage = " ";
$total = " ";

if ($_POST) {

  if ($_POST['amount'] <= 50) {
    $price = ($_POST['amount']) * .5;
    $perunit = .5;
  } elseif ($_POST['amount'] > 50 && $_POST['amount'] <= 150) {
    $price = ($_POST['amount']) * .75;
    $perunit = .75;
  } elseif ($_POST['amount'] > 150 && $_POST['amount'] <= 250) {
    $price = ($_POST['amount']) * 1.2;
    $perunit = 1.2;
  } elseif ($_POST['amount'] > 250) {
    $price = ($_POST['amount']) * 1.5;
    $perunit = 1.5;
  }
  $usage = $_POST['amount'];
  $total = $price + ($price * .2);
}
$bill = "<div class='py-2'>
Electricty usage: $usage kw/h<br>
Price/unit: $perunit EGP <br>
Price : $price  EGP <br>
Total price after surcharge 20% : $total  EGP
</div>";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Electric Bill</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-12 text-center">
      <h1 class="h1 text-info"> Electric Bill </h1>
    </div>
    <div class="col-4 offset-4">
      <form method='post'>
        <div class="form-group">
          <input type="number" name="amount" class="form-control" id="amount" placeholder="amount" value="<?php if (isset($_POST['amount'])) {
                                                                                                            echo $_POST['amount'];
                                                                                                          } ?>">
        </div>
        <button class="btn btn-primary">print</button>
      </form>
      <?= $bill ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>