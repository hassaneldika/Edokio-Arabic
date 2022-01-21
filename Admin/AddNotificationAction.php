<!DOCTYPE HTML>
<html>

<head>
    <title>Add Managers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Upturn Smart Online Exam System" />
    <style type="text/css">
        button.btn-admin-edit,
        button.btn-admin-delete,
        button.btn-admin-add {
            width: 49%;
            padding: 7px;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T54Y1DPZ01"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T54Y1DPZ01');
    </script>
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <?php
                session_start();
                if ($_SESSION["userid"] == true) {

                    include("header.php"); ?>

                    <!--   <ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Add Event</a></h4></li></center>
            </ol> -->
                    <!--grid-->
                    <div class="validation-system">

                        <div class="validation-form">
                            <!---->

                            <form action="#" method="post">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Manager Name</label>
                                    <input type="text" placeholder="Manager Name" name="AdminName" required="">
                                </div>
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Password</label>
                                    <input type="text" placeholder="Manager Password" name="AdminPassword" required="">
                                </div>
                                <div class="col-md-4 form-group2 group-mail">

                                </div>
                                <div class="clearfix"> </div>
                                <div style="height:30px;display: block;width: 100%"></div>
                                <div class="col-md-4 form-group">
                                    <button type="submit" class="btn btn-admin-add text-white" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-admin-delete text-white" value="reset">Reset</button>
                                </div>

                                <div class="clearfix"> </div>


                            </form>

                            <!---->
                        </div>

                    </div>
                    <!--//grid-->
                    <?php
                    //  include("connect.php");


                    //include("connect.php");
                    if (isset($_POST['submit'])) {
                        $NotificationTitle = $_POST['Title'];
                        $NotificationText = $_POST['Text'];
                        $NotificationLink = $_POST['Link'];
                        $NotificationDate = $_POST['Date'];

                        $query = 'INSERT INTO Notifications (NotificationTitle,NotificationText,NotificationLink,NotificationDate) VALUES 
        (:NotificationTitle,:NotificationText,:NotificationLink,:NotificationDate)';
                        $conx->connect();
                        $st = $conx->dbh->prepare($query);
                        $st->bindParam(':NotificationTitle', $NotificationTitle);
                        $st->bindParam(':NotificationText', $NotificationText);
                        $st->bindParam(':NotificationLink', $NotificationLink);
                        $st->bindParam(':NotificationDate', $NotificationDate);

                        $st->execute();
                        echo "<script>window.location.href = 'ListOfNotifications.php';</script>";
                    }

                    ?>
                    <?php include("footer.php"); ?>
            </div>
        </div>

        <?php include("sidebar.php"); ?>
    <?php } else
                    header('location:login.php');
    ?>
    </div>
</body>

</html>