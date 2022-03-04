<?php
$error = [];
$result = [];
if (isset($_POST['calc'])) {
    $loan = $_POST['loan-amount'];
    $duration = $_POST['instalment-years'];
    if (empty($_POST['user'])) {
        $error['name'] = "<div class='text-danger'> Please Enter Your Name </div> ";
    }
    if (empty($_POST['loan-amount'] || isset($_POST['loan-amount']) == '0')) {
        $error['amount'] = "<div class='text-danger'> Please Enter Loan Amount </div> ";
    }
    if (empty($_POST['instalment-years'] || isset($_POST['instalment-years']) == '0')) {
        $error['years'] = "<div class='text-danger'> Please Enter Number Of Years </div> ";
    }
    if (empty($error)) {

        function loanAmount($loan, $duration)
        {

            if ($duration <= 3) {
                $result['intrest'] = $loan * 0.10 * $duration;
                $result['total'] = $loan + $result['intrest'];
                $result['monthly'] = $result['total'] / (12 * $duration);
            } else {
                $result['intrest'] = $loan * 0.15;
                $result['total'] = $loan + $result['intrest'];

                $result['monthly'] = $result['total'] / (12 * $duration);
            }

            return $result;
        }
        $result = loanAmount($loan, $duration);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="col-6 offset-3">
            <h1 class="text text-primary text-center">Bank</h1>
            <form method="post" autocomplete="off">
                <input type="text" class="form-control mt-2" placeholder="Your Name" name="user"
                    value="<?= isset($_POST['user']) ? $_POST['user'] : ""  ?>">
                <?= isset($error['name']) ? $error['name'] : "" ?>
                <input type="number" class="form-control mt-2" placeholder="Loan Amount" name="loan-amount"
                    value="<?= isset($_POST['loan-amount']) ? $_POST['loan-amount'] : "" ?>">
                <?= isset($error['amount']) ?  $error['amount'] : "" ?>
                <input type="number" class="form-control my-2" placeholder="Instalment Years" name="instalment-years"
                    value="<?= isset($_POST['instalment-years']) ? $_POST['instalment-years'] : "" ?>">
                <?= isset($error['years']) ?  $error['years'] : "" ?>
                <button class="btn btn-primary my-2" name="calc">Calculate</button>
            </form>
        </div>


        <?php
        if ($_POST) {
            if (empty($error)) { ?>

        <table class="table  ">
            <thead class="thead">
                <tr class="text-center">
                    <th>Name</th>
                    <th>Interset Rate</th>
                    <th>Loan After Interset</th>
                    <th>Monthly</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td><?php echo isset($_POST['user']) ? $_POST['user'] : "" ?></td>
                    <td><?php echo isset($result['intrest']) ? $result['intrest'] : '' ?></td>
                    <td><?php echo isset($result['total']) ? $result['total'] : '' ?></td>
                    <td><?php echo isset($result['monthly']) ? $result['monthly'] : '' ?></td>
                </tr>
            </tbody>
        </table>
        <?php }
        }
        ?>

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