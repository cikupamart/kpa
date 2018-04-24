<?php
if($op=="edit"){
    foreach ($sql->result() as $obj){

        $op = "edit";
        $nik = $obj->nik;
        $username = $obj->username;
        $password = $obj->password;
        $level = $obj->level;
        $id_group = $obj->id_group;
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style-dashboard-admin.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="<?php echo base_url(); ?>admin/simpan" method="POST">
        <input type="hidden" name="op" value="update" class="form-control">
        <p>NIK</p>
        <input type="text" name="nik" value="<?php echo $nik ?>" class="form-control">
        <p>Member Group</p>
        <input type="text" name="nik" value="<?php echo $id_group ?>" class="form-control">
        <p>Level</p>
        <input type="text" name="level" value="<?php echo $level ?>" class="form-control">
        <p>Username</p>
        <input type="text" name="username" value="<?php echo $username ?>" class="form-control">
        <div class="button-modal">
            <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
            <button class="save-modal" type="submit">Save</button>
        </div>
    </form>


</body>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>