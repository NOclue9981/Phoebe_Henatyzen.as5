<?php
    session_start();
    $_SESSION['organDonor'] = $_POST['organDonor'];
    $_SESSION['contact'] = $_POST['contact'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded p-5 m-3 bg-info">
        <h2>Review Your Submitted Information:</h2>
        <ul>
            <li><strong>Name:</strong> <?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] ?></li>
            <li><strong>Birthday:</strong> <?php echo $_SESSION['birthday'] ?></li>
            <li><strong>Country:</strong> <?php echo $_SESSION['country'] ?></li>
            <li><strong>Province/State:</strong> <?php echo $_SESSION['prov'] ?></li>
            <li><strong>City:</strong> <?php echo $_SESSION['city'] ?></li>
            <li><strong>Street Address:</strong> <?php echo $_SESSION['address'] ?></li>
            <li><strong>Phone:</strong> <?php echo $_SESSION['phone'] ?></li>
            <li><strong>Health Card:</strong> <?php echo $_SESSION['healthCard'] ?></li>
            <li><strong>Expiration Date:</strong> <?php echo $_SESSION['expiration'] ?></li>
            <li><strong>Organ Donor:</strong> <?php echo $_SESSION['organDonor'] ?></li>
            <li><strong>Contact for Donor Status:</strong> <?php echo $_SESSION['contact'] ?></li>
        </ul>

        <a class="btn btn-dark" href="pageSix.php" role="button">Confirm</a>

    </div>



</body>
</html>