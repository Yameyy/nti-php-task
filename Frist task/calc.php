<?php
$signs = [
  'add' => '+',
  'sub' => '-',
  'mult' => '*',
  'div' => '/',
  'mod' => '%',
];
$select = "<select name='sign' class='from-control';>
    <option value='add' >{$signs['add']}</option>
    <option value='sub'>" . $signs['sub'] . "</option>
    <option value='mult'>" . $signs['mult'] . "</option>
    <option value='div'>" . $signs['div'] . "</option>
    <option value='mod'>" . $signs['mod'] . "</option>
</select>";
$result = " ";
$message = "result =  ";
if ($_POST) {

  switch ($_POST['sign']) {
    case 'add':
      $result = $_POST['first'] + $_POST['second'];
      break;
    case 'sub':
      $result = $_POST['first'] - $_POST['second'];
      break;
    case 'mult':
      $result = $_POST['first'] * $_POST['second'];
      break;
    case 'div':
      $result = $_POST['first'] / $_POST['second'];
      break;
    case 'mod':
      $result = $_POST['first'] % $_POST['second'];
      break;
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Calculator</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="col-12 text-center">
      <h1 class="h1 text-primary"> Calculator </h1>
    </div>
    <div class="col-4 offset-4">
      <form method='post'>
        <div class="form-group">
          <input type="number" name="first" class="form-control" id="firstNum" placeholder="First Number" value="<?php if (isset($_POST['first'])) {
                                                                                                                    echo $_POST['first'];
                                                                                                                  } ?>">
        </div>
        <div class="form-group">
          <input type="number" name="second" class="form-control" id="secondNum" placeholder="Second Number" value="<?php if (isset($_POST['second'])) {
                                                                                                                      echo $_POST['second'];
                                                                                                                    } ?>">
        </div>
        <div class="form-group">
          <?php echo $select ?>
        </div>

        <div>
          <?= $message  . $result ?>
        </div>
        <button class="btn btn-info">Calculate</button>
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