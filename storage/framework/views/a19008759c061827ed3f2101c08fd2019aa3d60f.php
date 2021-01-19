<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurors</title>
</head>
<body>
    <form method="POST" action="/jurors">
    <?php echo csrf_field(); ?>
        <label for="id">Driver's License Number:</label><br>
        <input type="text" name="id" required><br>
        <label for="id">DOB:</label><br>
        <input type="date" name="dob" required><br>
        <input type="submit" value="Submit">
    </form>  
</body>
</html><?php /**PATH /Users/dennis.mullen/Documents/laravel-projects/jurors/resources/views/welcome.blade.php ENDPATH**/ ?>