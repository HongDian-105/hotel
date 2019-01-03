<!DOCTYPE html>

<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>民宿後臺管理</title>

    <!-- Bootstrap core CSS -->
    <link href="css/sidebar/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sidebar/simple-sidebar.css" rel="stylesheet">
<style>
    body{background: url('img/view3.jpg');background-size: 100%;background-repeat:no-repeat;}
</style>
</head>
<body>

<div>
        <div class="top-right links" style="text-align: right">
                <a href="{{ url('/logout') }}">Logout</a>
        </div>
</div>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    民宿後臺管理
                </a>
            </li>
            <li>
                <a href="{{ route('admin.booking.index') }}">訂房管理</a>
            </li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >
        <div class="container-fluid" >
            <h1><b>早安，您好！</b></h1>
            <p>點選按鈕以開啟管理面板</p>
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">按我</a>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="js/sidebar/jquery.min.js"></script>
<script src="js/sidebar/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>


