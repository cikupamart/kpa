<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin"><span>PROJECT MANAGEMENT</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="<?php echo base_url(); ?>admin">Program</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">E C H O</p>
          </div>
        </div>
      </div>
    </div>
    <div class="menu">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>activity/add">
          <button class="btn btn-success navbar-btn login glyphicon glyphicon-plus"data-toggle="modal"></button></a>
        </div>
        <div>

          <form class="navbar-form navbar-left" role="search" method="post" action="<?php echo base_url(); ?>admin/add">
            <div class="form-group">
              <input name="search" type="text" class="form-control" placeholder="Search by name">
            </div>
          <button type="submit" class="btn btn-default" name="submit">Search</button>
          </form>

          <div class="navbar-header" style="margin-left: 700px;">
          <a href="<?php echo base_url('login/logout'); ?>">
          <button class="btn btn-danger navbar-btn" data-toggle="modal">Logout</button></a>
          </div>

        </div>
      </nav>
    </div>
  </div>
  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ACTIVITY</th>
                  <th>DESKRIPSI</th>
                  <th>START</th>
                  <th>STOP</th> 
                  <th>BUDGET</th>
                  <th>MEMBER</th>
                  <th>PROGRESS</th>
                  <th>AKSI</th>
                </tr> 
              </thead>
              </table>
          </div>
        </div>
      </div>
      <script src="assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>
    </div>
</body>