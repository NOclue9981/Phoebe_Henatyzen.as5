<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Healthcard Renewal Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded p-5 m-3 bg-info">
        <form action="pageTwo.php" method="POST">
            <div class="p-3">
                <h3>Name:</h3>
                <Input class="form-control" type="text" name="firstName" placeholder="First Name">
            </div>
            <div class="p-3">
                <Input class="form-control" type="text" name="lastName" placeholder="Last Name">
            </div>
            <div class="p-3">
                <h3>Birthday:</h3>
                <Input class="form-control" type="date" name="birthday" placeholder="YYYY-MM-DD">
            </div>
            <div class="p-3">
                <Button class="btn btn-dark" type="Submit">Next Page</Button>
            </div>
        </form>
    </div>
    
</body>
</html>