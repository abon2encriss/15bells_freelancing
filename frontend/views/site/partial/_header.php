<?php //use Yii;
?>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> 
                    <img src="img/logo.png" class="img-responsive" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/dummy"])?>">HOME</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/dummy"])?>">BUYERS</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/dummy"])?>">SELLERS</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/dummy"])?>">LESSEE</a></li>
                    <li class="last"><a href="<?=Yii::$app->urlManager->createUrl(["site/dummy"])?>">LESSER</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>