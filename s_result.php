<!DOCTYPE html>
<html lang="en">
<head>
  <title>Final Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
    <?php include 's_navbar.php'?>
    <div class="container-xl px-4">
        <hr class="mt-0 mb-5">
        <hr class="mt-0 mb-5">
        <div class="row">
            <div class="col-xl-2">

            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header text-center"><b>Student Information</b></div>
                    <div class="card-body">
                    <form>
                        <fieldset disabled="disabled">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Name</label>
                                    <input class="form-control" id="inputFirstName" type="text" value="Valerie">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Roll</label>
                                    <input class="form-control" id="inputLastName" type="text" value="Luna">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Batch</label>
                                    <input class="form-control" id="inputFirstName" type="text" value="Valerie">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Total Marks</label>
                                    <input class="form-control" id="inputLastName" type="text" value="Luna">
                                </div>
                            </div>
                        </fieldset>                          
                    </div>

                    <div class="card-header text-center mt-4"><b>Details of Result</b></div>
                        <div class="card-body">
                        <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Subject</th>
                                        <th class="align-middle text-center">Total Marks</th>
                                        <th class="align-middle text-center">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info">
                                        <td class="align-middle">Bangla</td>
                                        <td class="align-middle text-center">85</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">English</td>
                                        <td class="align-middle text-center">88</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">Math</td>
                                        <td class="align-middle text-center">82</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">Physics</td>
                                        <td class="align-middle text-center">82</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">Biology</td>
                                        <td class="align-middle text-center">82</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">Chemistry</td>
                                        <td class="align-middle text-center">82</td>
                                        <td class="align-middle text-center">A+</td>
                                    </tr>
                                </tbody>
                            </table>    
                            <!-- end -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
