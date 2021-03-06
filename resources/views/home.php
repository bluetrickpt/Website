<!DOCTYPE html>
<html ng-app="cpApp">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="keywords" content="tech, programming, association">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisici eli.">
    <title>Clube de Programação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--boostrap setup-->
    <script type="text/javascript" src="assets/libs/jquery.min.js"></script>
    <script type="text/javascript" src="assets/libs/bootstrap.min.js"></script>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--angular setup-->
    <script type="text/javascript" src="assets/libs/angular.min.js"></script>
    <script type="text/javascript" src="assets/libs/angular-route.min.js"></script>
    <script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular-resource.min.js"></script>
    <script type="text/javascript" src="app/app.module.js"></script>
    <script type="text/javascript" src="app/shared/table/tableDirective.js"></script>
    <script type="text/javascript" src="app/shared/carousel/carouselDirective.js"></script>
    <script type="text/javascript" src="app/components/projects/projectsController.js"></script>
    <script type="text/javascript" src="app/components/events/eventsController.js"></script>
    <script type="text/javascript" src="app/components/members/membersController.js"></script>
    <script type="text/javascript" src="app/components/members/memberCard/memberCardDirective.js"></script>
    <script type="text/javascript" src="app/components/organisations/organisationsController.js"></script>
    <script type="text/javascript" src="app/components/organisations/organisationCard/organisationCardDirective.js"></script>
    <script type="text/javascript" src="app/app.routes.js"></script>
</head>
<body ng-controller="mainController">

<!--navbar-->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#/">
                <img alt="Brand" class="navbar-brand-img" height="27px" style="margin-top: -4px;"
                     src="assets/img/logo.png">
            </a>
            <a class="navbar-brand" href="#/">
                <span>Clube de Programação</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ng-class="{active:isTabActive('/projects')}">
                    <a href="#/projects">Projects</a>
                </li>
                <li ng-class="{active:isTabActive('/members')}">
                    <a href="#/members">Members</a>
                </li>
                <li ng-class="{active:isTabActive('/events')}">
                    <a href="#/events">Events</a>
                </li>
                <li ng-class="{active:isTabActive('/blog')}">
                    <a href="#/blog">Blog<br></a>
                </li>
                <li ng-class="{active:isTabActive('/organisations')}">
                    <a href="#/organisations">Organisations<br></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--content-->
<div class="cover" ng-show="showHomeImage">
    <div class="cover-image"
         style="background-image: url(assets/img/home.jpeg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-inverse">Welcome</h1>
                <p class="text-inverse">Lorem ipsum dolor sit amet, consectetur adipisici eli.</p>
                <br>
                <br>
                <a class="btn btn-lg btn-success">Sign-up now!</a>
            </div>
        </div>
    </div>
</div>

<div ng-view></div>

<!--footer-->
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Footer header</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-sm-6">
                <p class="text-info text-right">
                    <br>
                    <br>
                </p>
                <div class="row">
                    <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                        <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 hidden-xs text-right">
                        <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>