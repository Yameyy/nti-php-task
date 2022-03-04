<?php

define('max_grad', 50);

if (isset($_POST['Physics']) && isset($_POST['Chemistry']) && isset($_POST['Biology']) && isset($_POST['Mathematics']) && isset($_POST['Computer'])) {

    $sum = 0;

    if ($_POST['Physics'] > max_grad or $_POST['Chemistry'] > max_grad or $_POST['Biology'] > max_grad or $_POST['Mathematics'] > max_grad or $_POST['Computer'] > max_grad) {
        echo   '<div class= "w-50 bg-danger text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "<span class='text-white font-weight-bold'>Max Degree is 50 <br>" . '</div>';
    } else {
        $sum += $_POST['Physics'] + $_POST['Chemistry'] + $_POST['Biology'] + $_POST['Mathematics'] + $_POST['Computer'];

        $precent = ($sum / 250) * 100;

        if ($precent >= 90) {
            echo   '<div class= "w-50 bg-success text-white text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade A <br>" . "Congratulations" . '</div>';
        } else if ($precent >= 80) {
            echo   '<div class= "w-50 bg-success text-white text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade B <br>" . "Congratulations" . '</div>';
        } else if ($precent >= 70) {
            echo   '<div class= "w-50 bg-success text-white text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade C <br>" . "Congratulations" . '</div>';
        } else if ($precent >= 60) {
            echo   '<div class= "w-50 bg-success text-white text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade D <br>" . "Congratulations" . '</div>';
        } else if ($precent >= 40) {
            echo   '<div class= "w-50 bg-danger text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade E <br>" . "OPSSS, you're in danger" . '</div>';
        } else {
            echo   '<div class= "w-50 bg-danger text-center m-auto mt-3 p-3 fw-bold border border-rounded" >' . "Grade F <br>" . "YOU FAIL" . '</div>';
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-12">
            <h1 class="text-center text-primary">Calac. Grades</h1>
        </div>
        <div class="col-6 offset-4">
            <form method="post">

                <div class="form-group row">
                    <label for="Physics" class="col-sm-3 col-form-label">Physics</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Physics" placeholder="Physics" name="Physics"
                            value="<?php if (isset($_POST['Physics'])) {
                                                                                                                                echo $_POST['Physics'];
                                                                                                                            } ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Chemistry" class="col-sm-3 col-form-label">Chemistry</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Chemistry" placeholder="Chemistry" name="Chemistry"
                            value="<?php if (isset($_POST['Chemistry'])) {
                                                                                                                                    echo $_POST['Chemistry'];
                                                                                                                                } ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Biology" class="col-sm-3 col-form-label">Biology</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Biology" placeholder="Biology" name="Biology"
                            value="<?php if (isset($_POST['Biology'])) {
                                                                                                                                echo $_POST['Biology'];
                                                                                                                            } ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Mathematics" class="col-sm-3 col-form-label">Mathematics</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Mathematics" placeholder="Mathematics"
                            name="Mathematics"
                            value="<?php if (isset($_POST['Mathematics'])) {
                                                                                                                                            echo $_POST['Mathematics'];
                                                                                                                                        } ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Computer" class="col-sm-3 col-form-label">Computer</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Computer" placeholder="Computer" name="Computer"
                            value="<?php if (isset($_POST['Computer'])) {
                                                                                                                                echo $_POST['Computer'];
                                                                                                                            } ?>">
                    </div>
                </div>


                <div class="col-10 offset-3">
                    <button type="submit" class="btn btn-success">Calculate</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>