<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TestApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="headermenu">
                <img class="logo"  src="assets/img/TestAppLogo.png" alt="TestAppLogo">
                <a href="#" class="navicon"><img src="assets/img/NavIcon.png" alt="NavLink"></a>
            </div>
            </div>
        <div class="content">
            <div class="contentdisplay">
                <div class="row">
                    <div class="column msg">
                        <span style="font-size: 50px;"><strong>Hello World!,</strong></span><br/>
                        <span style="font-size: 40px;">Welcome To My</span><br/>
                        <span style="font-size: 60px;"><strong>TestApp</strong></span>
                    </div>
                    <div class="column timebg">
                        <p style="font-size: 20px;">CURRENT TIME</p>
                        <?php date_default_timezone_set('Africa/Lagos')?>
                        <?php echo "<span style='font-size: 60px;'>".date('h')."</span>H"." "."<span style='font-size:60px'>:</span>".
                        " "."<span style='font-size: 60px;'>".date('i')."</span>M"." "."<span style='font-size:60px'>:</span>".
                        " "."<span style='font-size: 60px;'>".date('sa')."</span>S";?>
                         <p style="font-size: 30px;"><?php echo date('M')." ".","." ".date('D')." ".date('Y');?></p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="foot">
            © Copyright <?php echo date('Y');?>. Designed  By MaestroJolly.
            </div>
        </footer>

    </div>
</body>
</html>
