<html lang="en"><head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        {{ Html::style("public/template1/assets/bootstrap/css/bootstrap.min.css")}}
        {{ Html::style("public/template1/assets/font-awesome/css/font-awesome.min.css")}}        
        {{ Html::style("public/template1/assets/css/form-elements.css")}}
        {{ Html::style("public/template1/assets/css/style.css")}}
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <style>
            .popover-title{
                min-width: 200px;
                color:red;
            }
            .popover-content{
                display: none;
            }
        </style>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content  col-xs-12">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Loop HRM</strong>   </h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box row">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p class="hidden-xs">Enter your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="dashboard.html" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username" >Username</label>
                                        <input name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" type="text" title="Username is required" data-placement="bottom" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" type="password" title="Password is required" data-placement="bottom">
                                    </div>
                                    <div id="error"></div>
                                    <button type="submit" class="btn">Sign in!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3 social-login">
                                                <h3>...or login with:</h3>
                                                <div class="social-login-buttons">
                                                    <a class="btn btn-link-2" href="#">
                                                        <i class="fa fa-facebook"></i> Facebook
                                                    </a>
                                                    <a class="btn btn-link-2" href="#">
                                                        <i class="fa fa-twitter"></i> Twitter
                                                    </a>
                                                    <a class="btn btn-link-2" href="#">
                                                        <i class="fa fa-google-plus"></i> Google Plus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>-->
                </div>
            </div>

        </div>


        <!-- Javascript -->
        {{ Html::script("/public/template1/assets/js/jquery-1.11.1.min.js")}}
        {{ Html::script("/public/template1/assets/bootstrap/js/bootstrap.min.js")}}
        {{ Html::script("/public/template1/assets/js/jquery.backstretch.min.js")}}
        {{ Html::script("/public/template1/assets/js/scripts.js")}}       

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->



        <div style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 126px; width: 1288px; z-index: -999999; position: fixed;" class="backstretch">
            {{ Html::image("/public/template1/assets/img/backgrounds/1.jpg", '', array('style'=> 'position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1288px; height: 858.667px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -366.333px;'))}}"
        </div>
    </body>
</html>