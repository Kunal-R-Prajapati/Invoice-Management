<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
   <?php include_once("headerlink.php") ?>
   <link rel="stylesheet" href="./Style/style.css">
</head>

<body>
<div class="container text-center">    
<div class="row">
    <div class="col col-2">
<?php include_once('bar.php') ?>
    </div>
    <div class="col col-10">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Shop Details</a>
                <div class="d-flex">
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-success" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="m-3"></div>

        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr class="table-dark align-middle">
                            <th scope="col">ID</th>
                            <th scope="col">Location</th>
                            <th scope="col">Rent Amount (in <i class="fa fa-inr" aria-hidden="true"></i> )</th>
                            <th scope="col">Rented</th>
                            <th scope="col">Rented To</th>
                            <th scope="col" style="width:fit-content;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="align-middle">
                            <th scope="row">1</th>
                            <td>RAmJhula</td>
                            <td>₹18000</td>
                            <td>Yes</td>
                            <td>Rohan</td>
                            <td><a href="" class="btn btn-danger me-4"><i class="fa fa-trash"></i></a><a href="" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tr class="align-middle">
                            <th scope="row">2</th>
                            <td>City Center</td>
                            <td>₹50000</td>
                            <td>Yes</td>
                            <td>Rohan</td>
                            <td><a href="" class="btn btn-danger me-4"><i class="fa fa-trash"></i></a><a href="" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tr class="align-middle">
                            <th scope="row">3</th>
                            <td>Raiwala</td>
                            <td>₹20000</td>
                            <td>Yes</td>
                            <td>Riya</td>
                            <td><a href="" class="btn btn-danger me-4"><i class="fa fa-trash"></i></a><a href="" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                        </tr>    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="./Script/logic.js"></script>
<?php include_once("footerlink.php") ?>
</body>

</html>
