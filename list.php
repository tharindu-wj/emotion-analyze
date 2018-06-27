<!-- Header-->
<?php include 'header.php'; ?>
<?php if(isset($_SESSION['user'])) { ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php include 'navigation.php'; ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <?php include 'breadcrumb.php'; ?>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <?php
                        include 'app/connection.php';
                        $sql = '
                        SELECT *
                        FROM face_details
                        INNER JOIN users ON face_details.user = users.id;';

                        $result = mysqli_query($con, $sql);
                        ?>

                        <tr>
                            <th>Name</th>
                            <th>Captured</th>
                            <th>Stress Average</th>
                            <th>anger</th>
                            <th>contempt</th>
                            <th>disgust</th>
                            <th>fear</th>
                            <th>happiness</th>
                            <th>neutral</th>
                            <th>sadness</th>
                            <th>surprise</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Captured</th>
                            <th>Stress Average</th>
                            <th>anger</th>
                            <th>contempt</th>
                            <th>disgust</th>
                            <th>fear</th>
                            <th>happiness</th>
                            <th>neutral</th>
                            <th>sadness</th>
                            <th>surprise</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            //var_dump($row);?>
                            <tr>
                                <th><?php echo $row['name']; ?></th>
                                <th><?php echo $row['captured_at']; ?></th>
                                <th><?php echo $row['stress_avg']; ?></th>
                                <th><?php echo $row['anger']; ?></th>
                                <th><?php echo $row['contempt']; ?></th>
                                <th><?php echo $row['disgust']; ?></th>
                                <th><?php echo $row['fear']; ?></th>
                                <th><?php echo $row['happiness']; ?></th>
                                <th><?php echo $row['neutral']; ?></th>
                                <th><?php echo $row['sadness']; ?></th>
                                <th><?php echo $row['surprise']; ?></th>
                            </tr>
                        <?php }
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
</div>
</body>
<?php }
 else {header('location:login.php');} ?>
</html>
