<?php 
session_start();
    if(isset($_SESSION['admin'])){
        header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <style>
            .image{
                height: 190px;
                color: #A5A4A4;
            }
            .image img{
                border-radius: 100%;
                padding: 5px;
                margin: 0 auto;
                margin-top: 30px;
                border: 1px solid #A5A4A4;
            }
            .row{
                margin-bottom: 70px;
            }
            input[name="sub_name"]{
                color: #fff;
                background: #6ea038;
                width: 100px;
                margin: 0 auto;
            }
            #exampleInputFile{
                width: 245px;
                color: #fff;
                background: #6ea038;
            } 
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center image">
                    <img class="img-responsive" src="assets/no-image1.png" id="img" width="140px" height="140px">
                    <h3>Admin Login</h3>
                    <h5>Sign in to your account</h5>
                </div>
            </div>
            <form  action="check.php" method="post" enctype="multipart/form-data" id="myForm">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" name="mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="pass" name="pass">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" name="file">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" name="sub_name" id="sub" value="sub_value">
                </div>
            </form>
            <?php
                
                if (isset($_SESSION['contactmsj'])) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p><?= $_SESSION['contactmsj'] ?></p>
                    </div>
                    <?php
                    unset($_SESSION['contactmsj']);
                }
            ?>
            <div class="alert alert-danger hidden" id="contactMsj" role="alert"></div>
        </div>
        <?php
//            session_start();          sekli yuklemek ucun kod
//            $_SESSION["session_image"] = $_FILES["file"]["name"];
//            $image = $_SESSION["session_image"];
        ?>
        <script>
//            var variablejs = "<?php echo $image ?>";   sekli yuklemek ucun kod
//            if(variablejs != ""){
//                document.getElementById("img").src = "assets/" + variablejs;
//            }
        </script>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script>
            $('#myForm').submit(function (event) {
                $('#contactMsj').addClass('hidden');

                $('#contactMsj').empty();

                var email = $('input[name=mail]').val();
                var password = $('input[name=pass]').val();
                var file = $('input[name=file]').val();
                var check = false;

                if (email !== "admin@code.edu.az") {
                    $('#contactMsj').removeClass('hidden');
                    $('#contactMsj').append('<p>Email duzgun deil</p>');
                    check = true;
                }
                if (password !== "12345") {
                    $('#contactMsj').removeClass('hidden');
                    $('#contactMsj').append('<p>Pass duzgun deil</p>');
                    check = true;
                }
//                if (file == "") {
//                    $('#contactMsj').removeClass('hidden');
//                    $('#contactMsj').append('<p>Sekli yukleyin!</p>');
//                    check = true;
//                }

                if (!check) {
                     $('#myForm').submit();
                }
                console.log(check);
                event.preventDefault();
            });
            
        </script>
    </body>
</html>
