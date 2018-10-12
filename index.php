<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sea.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>SEA User Analytics</title>
</head>

<body>
<main class="container" id="index">
    <div class="card w-50 shadow p-4">
        <div class="card-body">
            <div>
                <h1 class="ssm mb-0">
                    <small>Online Manual</small>
                </h1>
                <h1 class="ssb">
                    User Analytics
                </h1>
            </div>
            <div>
                <form class="ssr" method="POST" action="login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="loginId" name="loginId" placeholder="ID" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password" />
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="loginRemember" name="loginRemember" />
                        <label class="form-check-label" for="loginRemember">Remember ID?</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>
</body>

</html>