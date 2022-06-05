<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
        body{
    margin-top:20px;
    background:#f8f8f8;
    }
  </style>
</head>
<body>
    <?php include 't_navbar.php'?>
    <div class="container-fluid">         
        <div class="col">
            <div class="e-tabs mb-3 px-3">
            <ul class="nav nav-tabs">
                <li class="nav-item mr-3"><a class="nav-link active" ><b>Students list</b></a></li>
                <li class="nav-item mr-3"><a class="nav-link active" ><b>Batch 36</b></a></li>
                <li class="nav-item"><a class="nav-link active" ><b>Bangla</b></a></li>
            </ul>
            </div>

            <div class="row flex-lg-nowrap">
            <div class="col mb-3">
                <div class="e-panel card">
                <div class="card-body">
                    <div class="e-table">
                    <div class="table-responsive table-lg mt-3">
                        <form action="" method="post">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Roll</th>
                                        <th class="align-middle text-center">Name</th>
                                        <th class="align-middle text-center">Class Attendance</th>
                                        <th class="align-middle text-center">Assignment</th>
                                        <th class="align-middle text-center">Presentation</th>
                                        <th class="align-middle text-center">Midterm</th>
                                        <th class="align-middle text-center">First 50%</th>
                                        <th class="align-middle text-center">Final (50%)</th>
                                        <th class="align-middle text-center">Total</th>
                                        <!-- <th class="align-middle text-center">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="table-info">
                                        <td class="align-middle">1001</td>
                                        <td class="align-middle text-center">Hafizul Islam</td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <!-- <td class="text-center align-middle">
                                            <div class="btn-group align-top">
                                                <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                                <button class="btn btn-sm btn-danger badge" type="button"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">1001</td>
                                        <td class="align-middle text-center">Hafizul Islam</td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <!-- <td class="text-center align-middle">
                                            <div class="btn-group align-top">
                                                <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                                <button class="btn btn-sm btn-danger badge" type="button"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr class="table-info">
                                        <td class="align-middle">1001</td>
                                        <td class="align-middle text-center">Hafizul Islam</td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id=""></td>
                                        <td class="align-middle text-center"><input type="number" class="form-control" name="" id="" disabled></td>
                                        <!-- <td class="text-center align-middle">
                                            <div class="btn-group align-top">
                                                <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                                <button class="btn btn-sm btn-danger badge" type="button"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center">
                        <ul class="pagination mt-3 mb-0">
                            <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                            <li class="active page-item"><a href="#" class="page-link">1</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">2</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">3</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">4</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">5</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">›</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">»</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
      
            </div>
        </div>
    </div>
</body>
</html>
