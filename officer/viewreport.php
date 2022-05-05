<?php include "../include/dbconfig.php"; 

 authCheck('admin','login');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Project | Officer Pannel - Zila Vikash Manch</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">
        <?php include "../include/navbar.php"; ?>
        <div class="container-fluid p-0">
                <div class="row g-0">
                        <div class="col-2 bg-dark" style="height: 91.5vh;">
                                <?php include "../include/side.php"; ?>
                        </div>
                        <div class="col-10 p-4">
                                <div class="row">
                                        <div class="col-8">
                                                <h1 class="h5 fs-bolder">view reports</h1></div>
                                </div>

                                        <?php
                                        $id = $_GET['rep_id'];
                                          $callingproject = mysqli_query($connect,"select * from reports JOIN accounts ON reports.account_id = accounts.id JOIN projects On reports.project_id=projects.pro_id where rep_id='$id'");
                                          $row = mysqli_fetch_array($callingproject);
                                              ?>
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-8">
                                                          <h1 class="display-4"><?= $row['pro_title'];?></h1>
                                                          <strong>Date of submit :</strong> <?= date("D d-M-Y h:i:s A",strtotime($row['doc']));?>
                                                      </div>
</div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <?= $row['content'];?>
                                                        </div>
                                                        <div class="card-footer">
                                                            support files : <strong><?= $row['attachment'];?></strong>
                                                            <a href="../image/reports/<?= $row['attachment'];?>" class="ms-2">view</a>
                                                        </div>
                                                    </div>
                                                      <div class="col-4">
                                                          <div class="card">
                                                              <div class="card-header">
                                                                  Contributor Details
                                                              </div>
                                                              <div class="card-body">
                                                                  <h6>
                                                                  <div class="clearfix"></div>
                                                                       <hr class="m-2 p-0">
                                                                      <span class="float-start">Name</span>
                                                                      <span class="float-end"><?= $row['name'];?></span>
                                                                   </h6>
                                                              </div>
                                                              <h6>
                                                              <div class="clearfix"></div>
                                                                       <hr class="m-2 p-0">
                                                                      <span class="float-start">Name</span>
                                                                      <span class="float-end"><?= $row['email'];?></span>
                                                                   </h6>
                                                                   <h6>
                                                                   <div class="clearfix"></div>
                                                                       <hr class="m-2 p-0">
                                                                      <span class="float-start">Name</span>
                                                                      <span class="float-end"><?= $row['contact'];?></span>
                                                                   </h6>
                                                                   <h6>
                                                                       <div class="clearfix"></div>
                                                                       <hr class="m-2 p-0">
                                                                      <span class="float-start">Name</span>
                                                                      <span class="float-end"><?= $row['address'];?></span>
                                                                   </h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                        
                        </div>
                </div>
        </div>
       <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>