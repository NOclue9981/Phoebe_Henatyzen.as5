<?php
    session_start();
    $_SESSION['healthCard'] = filter_input(INPUT_POST, "healthCard", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['expiration'] = filter_input(INPUT_POST, "expiration", FILTER_SANITIZE_SPECIAL_CHARS);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcard Renewal Survey Page 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded p-5 m-3 bg-info">
        <form action="pageFive.php" method="POST">
            <div class="p-3">
                <h3>Are You Currently an Organ Donor?</h3>
            </div>
            <div class="row mx-auto">
                <span class="col-2">
                    <input type="radio" id="donorYes" name="organDonor" value="Yes">
                    <label for="donorYes">Yes</label>
                </span>
                <span class="col-2">
                    <input type="radio" id="donorNo" name="organDonor" value="No">
                    <label for="donorNo">No</label>
                </span>
            </div>
            <div class="p-3 pt-5">
                <h3>Would Your Like To Be Contacted To Have Your Donor Status Changed?</h3>
            </div>
            <div class="row mx-auto">
                <span class="col-2">
                    <input type="radio" id="contactYes" name="contact" value="Yes">
                    <label for="contactYes">Yes</label>
                </span>
                <span class="col-2">
                    <input type="radio" id="contactNo" name="contact" value="No">
                    <label for="contactNo">No</label>
                </span>
            </div>
            <div class="p-3 pt-5">
                <Button class="btn btn-dark" type="Submit">Next Page</Button>
            </div>
        </form>
    </div>
</body>
</html>