<?php
session_start();
$_SESSION['country'] = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['prov'] = filter_input(INPUT_POST, "prov", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['city'] = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['address'] = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['phone'] = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcard Renewal Survey Page 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded p-5 m-3 bg-info">
        <form action="pageFour.php" method="POST">
            <div class="p-3">
                <h3>Healthcard Number & Version Code:</h3>
                <Input type="text" class="form-control" name="healthCard" placeholder="XXXX-XXX-XXX AA">
            </div>
            <div class="p-3">
                <h3>Healthcard Expiration Date:</h3>
                <Input class="form-control" type="date" name="expiration" placeholder="YYYY-MM-DD">
            </div>
            <div class="p-3">
                <Button class="btn btn-dark" type="Submit">Next Page</Button>
            </div>
        </form>
    </div>
</body>
</html>