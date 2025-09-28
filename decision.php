<!DOCTYPE html>
<html>
<head>
    <title>Decision Statement</title>
</head>
<body>

<h2>Student Grade Checker</h2>

<!--  user types the grade -->
<form method="post">
    Enter the student's grade: 
    <input type="number" name="grade" 
           value="<?php echo isset($_POST['grade']) ? $_POST['grade'] : ''; ?>" 
           required>
    <button type="submit">Submit</button>
</form>

<?php
// runs after the user clicks "Submit"
if (isset($_POST['grade'])) {
    $grade = (int)$_POST['grade'];  // get the number 

    // Decision conditions
    if ($grade >= 90) {
        echo "<p>With Honors</p>";
    } elseif ($grade >= 75) {
        echo "<p>Passed</p>";
    } else {
        echo "<p>Failed</p>";
    }
}
?>

</body>
</html>

