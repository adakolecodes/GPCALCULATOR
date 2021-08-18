<?php
session_start();
if(isset($_POST['submitbtn'])){
    $course1 = trim($_POST['course1']);
    $course2 = trim($_POST['course2']);
    // $course3 = trim($_POST['course3']);
    // $course4 = trim($_POST['course4']);
    // $course5 = trim($_POST['course5']);
    // $course6 = trim($_POST['course6']);
    // $course7 = trim($_POST['course7']);
    // $course8 = trim($_POST['course8']);
    // $course9 = trim($_POST['course9']);
    // $course10 = trim($_POST['course10']);
    // $course11 = trim($_POST['course11']);
    // $course12 = trim($_POST['course12']);
    // $course13 = trim($_POST['course13']);
    // $course14 = trim($_POST['course14']);
    // $course15 = trim($_POST['course15']);
    $grade1 = trim($_POST['grade1']);
    $grade2 = trim($_POST['grade2']);
    $unit1 = trim($_POST['unit1']);
    $unit2 = trim($_POST['unit2']);
    $value1 = trim($_POST['value1']);
    $value2 = trim($_POST['value2']);
    $total1 = trim($_POST['total1']);
    $total2 = trim($_POST['total2']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    


<div class="container">
    <div class="mt-3">
        <h1>Result</h1>
        <p>Click the button below to download as PDF</p>
    </div>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">S/n</th>
                <th scope="col">Course Title</th>
                <th scope="col">Grade</th>
                <th scope="col">Unit</th>
                <th scope="col">Value</th>
                <th scope="col">Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $course1 ?></td>
                <td><?php echo $grade1 ?></td>
                <td><?php echo $unit1 ?></td>
                <td><?php echo $value1 ?></td>
                <td><?php echo $total1 ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><?php echo $course2 ?></td>
                <td><?php echo $grade2 ?></td>
                <td><?php echo $unit2 ?></td>
                <td><?php echo $value2 ?></td>
                <td><?php echo $total2 ?></td>
            </tr>
        </tbody>
    </table>

    <div>
        <input type="submit" class="btn btn-primary" value="Download PDF" onclick="window.print()">
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
<?php }else{
    header("location: index.php");
    $_SESSION['warning'] = "Enter your values using the form";
}?>