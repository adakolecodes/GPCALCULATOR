<?php
//Start session for displaying warning message
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Calculator</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <h1>GP Calculator</h1>
        <p>Calculate your GP and download/print out result. Get started</p>
    </div>

    <!-- Start Get icons for warning alert -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <!-- End Get icons for warning alert -->

    <!-- Start Warning alert -->
    <?php if(isset($_SESSION['warning'])){ ?>
    <div class="container alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <?php echo $_SESSION['warning'] ?>
        </div>
    </div>
    <?php 
    unset($_SESSION['warning']);
    }?>
    <!-- End Warning alert -->

    <form action="compute.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <input type="text" name="course1" class="form-control" placeholder="Enter Course title (optional)">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select" name="grade1">
                            <option>Select Grade (optional)</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" name="unit1" class="form-control" placeholder="Enter Course Unit" id="unit1" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" name="value1" class="form-control" placeholder="Enter Grade Value" id="value1" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <input type="text" name="course2" class="form-control" placeholder="Enter Course title (optional)">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select" name="grade2">
                            <option>Select Grade (optional)</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" name="unit2" class="form-control" placeholder="Enter Course Unit" id="unit2" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" name="value2" class="form-control" placeholder="Enter Grade Value" id="value2" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <!-- Empty Column -->
                </div>
                <div class="col">
                    <!-- Empty Column -->
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" name="unittotal" class="form-control" placeholder="Total Units" id="unittotal" readonly>
                    </div>
                </div>
                <div class="col">
                    <!-- Empty Column -->
                </div>
            </div>

            <input type="submit" name="submitbtn" class="btn btn-primary" value="Calculate">
        </div>
    </form>


    <!-- Link to JQuery -->
    <script src="jquery.min.js"></script>

    <!-- Start Script for our total units-->
    <script>
        //Start function for total units
        $(function() {
            $("#unit1, #unit2").on("keydown keyup", sum);
            function sum() {
                $("#unittotal").val(Number($("#unit1").val()) + Number($("#unit2").val()));
            }
        });
    </script>
    <!-- End Script for our total units-->

    <!-- Bootstrap Script Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>