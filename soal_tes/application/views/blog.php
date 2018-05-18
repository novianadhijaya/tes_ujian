<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Arkademy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Show Blog Data</h1>
          <table id="my-table" class="table table-striped table-bordered">
                        <thead>
                            <tr class="bg-danger">
                                <th>No</th>
                                <th>TITLE</th>
                                <th>CONTENT</th>
                                <th>CREATE BY</th>
                                <th>COMMAND</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($blogs->result() as $r) {

                                echo "<tr>
                                          <td width='10'>$no</td>
                                          <td width='10'>$r->title</td>
                                          <td width='10'>$r->content</td>
                                          <td width='10'>$r->username</td>
                                          <td width='10'>$r->comment</td>    
                                        </tr>";
                                $no++;
                            }
                            ?>   

                        </tbody>
                    </table>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
