<?php
include('../../controller/Materiel.php');
include('../../controller/Technicien.php');

$id = $_GET['id'];
$t = new Technicien('T12345',null,null,null,null,null,null,null,null);
$mat = $t->AfficherMateriel($id);


if(!empty($_POST['lbl'])&&!empty($_POST['etat']))
{
    $lbl = $_POST["lbl"];
    $etat = $_POST["etat"];

    $m= new Materiel($lbl,$etat);
    $m->num_materiel = $id;

    if($t->ModifierMateriel($m))
        header('Location: materiels.php');
}
else{
   
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Alamal</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.min.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="#" class="logo">
					<img src="../../assets/img/logo.png" width="35" height="35" alt=""> <span>AlAmal</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#">
                        <span class="user-img"><img class="rounded-circle" src="../../assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Medecin</span>
                    </a>
                </li>
            </ul>

        </div>
        <di class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Patients </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="patients.php">Patients List</a></li>
								<li><a href=" consultations.php">Mes Consultation</a></li>
							</ul>
						</li>         
                        <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Conge </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="add-conge.php">Demander Conge</a></li>
								<li><a href="show-conges.php">Mes demandes</a></li>
							</ul>
						</li> 
                    </ul>
                </div>
            </div>
            </di>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Consultation</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <?php
                            foreach ($mat as $v)
                            {
                                echo "
                                <form method='post'>
                                    <div class='row'>
                                        <div class='col-sm-6'>
                                            <div class='form-group'>
                                                <label>Libelle Materiel <span class='text-danger'>*</span></label>
                                                <div class='cal-icon'>
                                                    <input class='form-control' name='lbl' type='text' value='$v[1]'>
                                                </div>
                                            </div>
                                        </div> 
                                    
                                        <div class='col-sm-12'>
                                            <div class='form-group'>
                                                <label>Etat Materiel</label>
                                                <div class=''>
                                                    <input type='text' name='etat' class='form-control' value='$v[2]'>
                                                </div>
                                            </div>
                                        </div>
                                    <div class='m-t-20 text-center'>
                                        <input type='submit' class='btn btn-primary' value='Modifier Materiel'>
                                    </div>
                                </form>

                                ";
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <script src="../../assets/js/select2.min.js"></script>
	<script src="../../assets/js/moment.min.js"></script>
	<script src="../../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>


<!-- add-patient24:07-->
</html>
