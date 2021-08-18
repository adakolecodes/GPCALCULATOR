<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <h1>GP Calculator</h1>
    </div>

    <form action="compute.php">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select">
                            <option>Select Course</option>
                            <option>Course 1</option>
                            <option>Course 2</option>
                            <option>Course 3</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select">
                            <option>Select Grade</option>
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
                        <input type="number" class="form-control" placeholder="Enter Course Unit">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Enter Grade Value">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Total">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select">
                            <option>Select Course</option>
                            <option>Course 1</option>
                            <option>Course 2</option>
                            <option>Course 3</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <select class="form-select">
                            <option>Select Grade</option>
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
                        <input type="number" class="form-control" placeholder="Enter Course Unit">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Enter Grade Value">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Total">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your GP appears here" id="answer" readonly>
                    </div>
                </div>
            </div>
            <input type="button" class="btn btn-primary" value="Calculate">
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>