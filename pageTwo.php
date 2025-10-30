<?php
session_start();
$_SESSION['firstName'] = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['lastName'] = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['birthday'] = filter_input(INPUT_POST, "birthday", FILTER_SANITIZE_SPECIAL_CHARS);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcard Renewal Survey Page 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded p-5 m-3 bg-info">
        <form action="pageThree.php" method="POST">
            <div class="p-3">
                <h3>Location :</h3>
                <Input class="form-control" type="text" name="country" placeholder="Country">
            </div>
            <div class="p-3">
                <Input class="form-control" type="text" name="prov" placeholder="Provice/State">
            </div>
            <div class="p-3">
                <Input class="form-control" type="text" name="city" placeholder="City">
            </div>
            <div class="p-3">
                <Input class="form-control" type="text" name="address" placeholder="Street Adress">
            </div>
            <div class="p-3">
                <h3>Phone Number:</h3>
                <Input class="form-control" type="text" name="phone" placeholder="Phone Number #">
            </div>
            <div class="p-3">
                <Button class="btn btn-dark" type="Submit">Next Page</Button>
            </div>
        </form>
    </div>
    
</body>
</html>