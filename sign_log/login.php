<!DOCTYPE html>
<html lang="ar" style='direction: rtl;'>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Log in</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>*{font-family: "Montserrat", sans-serif;}</style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <img class="logo " src="../images/Picture1.gif" alt="logo" width="300px" style="margin-right: 125px">
                    <h4 class="title">تسجيل الدخول</h4>
                    <form method="POST" action="LoginHandler.php">
                        <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">رقم الهوية الوطنية:</label>
                                    <input class="input--style-4" type="text" name="ID" style="width: 400px" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">

                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">الرقم السري:</label>
                                    <input class="input--style-4" type="Password" name="Password" style="width: 400px" required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">ارسال</button>
                            <button class="btn btn--radius-2 btn--blue" type="submit">إلغاء</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->