<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Donor</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php include 'nav1.php' ?>
        <?php include 'dbconnect.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Donor's Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="added.php" method="post">
                                            <h1 class="heading1">BLOOD DONATION DETAILS</h1>
                                            <h2 class="heading2">Enter details for New Donor</h2>
                                            <div class="form-group">
                                                <label>Name: </label>
                                                <input class="form-control" name="name" type="text" placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Guardian's Name :</label>
                                                <input class="form-control" type="text" placeholder="Guardian's Name" name="guardiansname" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Gender :</label>
                                                <input class="form-control" type="text" placeholder="M / F / O" name="gender" required>
                                            </div>

                                            <div class="form-group">
                                                <label>D.O.B :</label>
                                                <input class="form-control" type="date" name="dob" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Weight :</label>
                                                <input class="form-control" type="text" placeholder="Eg: 65kg" name="weight" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Blood Group :</label>
                                                <input class="form-control" type="text" placeholder="Eg: B+" name="bloodgroup" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Email-Id :</label>
                                                <input class="form-control" type="email" placeholder="Email Id" name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Address :</label>
                                                <textarea class="form-control" placeholder="Your Address" name="address" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Contact 1:</label>
                                                <input class="form-control" type="text" placeholder="Contact No.1" name="contact" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Contact 2(Optional) :</label>
                                                <input class="form-control" type="text" placeholder="Contact No.2" name="contact">
                                            </div>

                                            <div class="form-group">
                                                <label>Username :</label>
                                                <input class="form-control" type="text" placeholder="Your Username" name="username" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Password :</label>
                                                <input class="form-control" name="password" placeholder="Your Password" type="password" id="myInput" required>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" onclick="myFunction()"> Show Password
                                                    </label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success" ;>Submit</button>


                                        </form>


                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    footer {
        background-color: #424558;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35px;
        text-align: center;
        color: #CCC;
    }

    footer p {
        padding: 10.5px;
        margin: 0px;
        line-height: 100%;
    }

    .heading1 {
        font-size: 40px;
        font-weight: 600;
    }

    .heading2 {
        font-size: 25px;
        font-weight: 400;
    }

    .heading1,
    .heading2 {
        text-align: center;
        font-family: 'Poppins', sans-serif;
        /* font-size: 20px;
        font-weight: 300; */
    }

    label {
        display: inline-block;
        width: 340px;
        font-size: 1.3rem;
        padding-top: 22px;
        padding-left: 110px;
    }

    input[type=text] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);

    }

    input[type=text]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }


    input[type=radio] {
        margin: 0 10px;

    }

    input[type=email] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=email]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    input[type=date] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=date]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    input[type=password] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=password]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    textarea {
        color: black;
        background: transparent;
        width: 18%;
        height: 90px;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
        resize: vertical;
    }

    textarea:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;

    }

    button {
        margin-top: 20px;
        margin-left: 220px;
        text-align: center;
        width: 12%;
        height: 50px;
        padding: 5px;
        font-size: 20px;
        border-radius: 40px;
        background-color: #11101d;
        color: white;
    }

    button:hover {
        cursor: pointer;
        border: none;
        background-color: #3DD98D;
        color: whitesmoke;
    }
</style>

</html>