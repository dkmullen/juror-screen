<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Jurors</title>
</head>
<body>
<div class="container-sm">
    <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <form method="POST" action="/jurors">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="id" class="form-label">Driver's License Number:</label><br>
                <input type="text" class="form-control" name="id" required><br>
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">DOB:</label><br>
                <input type="date" class="form-control" name="dob" required><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form> 
    </div>
    <div class="col-sm">
    </div>

    </div>
 </div>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 

</body>
</html><?php /**PATH /Users/dennis.mullen/Documents/laravel-projects/jurors/resources/views/welcome.blade.php ENDPATH**/ ?>