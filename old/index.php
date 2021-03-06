<?php
session_start();

if (strstr($_SERVER['HTTP_REFERER'], "governer.collegeboard.com")) {
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description"
          content="View your AP Scores on the first day they come out without using a proxy! Early access to AP scores.">
    <meta name="author" content="">


    <link rel="icon" href="../../favicon.ico">

    <title>Early AP Score Access</title>

    <!-- Bootstrap core CSS-->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/site.css" rel="stylesheet">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-80297452-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '514445682088925',
                xfbml: true,
                version: 'v2.6'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


    <script src="https://use.fontawesome.com/74f6d718da.js"></script>

    <style>
        .headline {
            display: block;

        }

        body, html {
            height: 100%;
            background-color: #356AA0;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
        }

        .body-content {
            background: white fixed;
            min-height: 100%;
        }

        #clockdiv h1 {
            color: #396;
            font-weight: 100;
            font-size: 40px;
            margin: 40px 0px 20px;
        }

        #clockdiv {
            color: #fff;
            display: block;
            font-weight: 100;
            text-align: center;
            font-size: 30px;
        }

        #clockdiv > div {
            padding: 10px;
            border-radius: 3px;
            background: #356AA0;
            display: inline-block;
        }

        #clockdiv div > span {
            padding: 15px;
            border-radius: 3px;
            background: #02376D;
            display: inline-block;
        }

        .smalltext {
            padding-top: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>
<div class="container body-content">

    <div class="row" style="padding: 20px;">
<!--        <div class="alert alert-success">-->
<!--            <b>Thanks for all the support!</b> The site should be fully functional!-->
<!--            <br />-->
<!--            <a href="http://fourth.earlyscores.com/">If you can't get your scores now, go to the alternate server (#3)</a>-->
<!--        </div>-->

        <!--<div class="alert alert-info">
            <b>Migration In Progress</b> Migrating, please keep updating scores
            <br />
            <a href="http://fourth.earlyscores.com/">If you can't get your scores now, go to the alternate server (#3)</a>
        </div>-->
    </div>

    <div class="row">
        <div class="col-md-6">
            <h1>Early AP Scores</h1>

            <p class="lead">Access your AP Scores on July 5<sup>th</sup> no matter where you are in the world.</p>


            <div id="clockdiv" class="center-block">
                <div>
                    <span class="days"></span>

                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours"></span>

                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes"></span>

                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>

                    <div class="smalltext">Seconds</div>
                </div>
            </div>


            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-lock fa-5x" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Secure</h4>
                    Your College Board account information is only used temporarily to access your scores, and is not
                    stored by EarlyScores.com.
                </div>
            </div>

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-check-circle-o fa-4x" aria-hidden="true"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Accurate</h4>
                    Your scores are pulled directly from the College Board website and displayed on your computer.
                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="top-share" style="display: none;">
                <h1 class="text-center">Your AP Scores</h1>

                <p class="text-center">Show your friends how to get their scores early too (They won't see your
                    scores):</p>

                <div class="share" style="display:flex;justify-content: center; justify-items: center;">
                    <div class="fb-like" data-href="https://earlyscores.com" data-layout="button" data-action="like"
                         data-size="large" data-show-faces="false" data-share="true" style="margin-right: 3px;"></div>
                    <a href="https://twitter.com/share" class="twitter-share-button"
                       data-text="Get your AP scores early from anywhere in the world." data-size="large">Tweet</a>
                </div>
            </div>

            <div class="loading text-center" style="display: none;">

                <img src="default.svg" class="center-block" style="display: block;">

                <h3 class="loading-text">Loading</h3>

            </div>

            <div class="score-container" style="display: none;">
                <h2>Logged in successfully, loading scores.</h2>
            </div>
            <div class="logging-in" style="display: none;">
                <h2>Logging you in securely.</h2>
            </div>
            <div class="form-container">

                <h1>Log in to check your AP Scores</h1>

                <div class="alert alert-danger text-center" style="display: none;">Couldn't log in. Either try a
                    different username and password or try to log in again.
                </div>

                <form class="form view-scores" action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" required/>

                        <p class="help-block">Enter the username you use to log in to your College Board account.</p>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required/>

                        <p class="help-block">Enter the password you use to log in to your College Board account.</p>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-success">
                            View My Scores <i class="glyphicon glyphicon-play-circle"></i>
                        </button>
                    </div>
                </form>

                <hr/>

                <div class="text-center">
                    <p class="text-center">Don't have a College Board account? Make one on their site.</p>
                    <a target="_blank"
                       href="https://account.collegeboard.org/iamweb/smartRegister?appId=287&DURL=https://apscore.collegeboard.org/scores/view-your-scores"
                       class="btn btn-primary">Create
                        a <img src="https://mango.collegeboard.org/cbmango1/prod/iam/all/2/logo.png"
                               style="height:18px;margin-bottom: 5px;"/>
                        account &gt; </a>
                </div>
            </div>

            <div class="share-container">
                <hr/>
                <p class="text-center">Show your friends how to get their scores early too:</p>

                <div class="share" style="display: flex;justify-content: center; justify-items: center;">
                    <div class="fb-like" data-href="https://earlyscores.com" data-layout="button_count" data-action="like"
                         data-size="large" data-show-faces="true" data-share="true" style="margin-right: 3px;"></div>
                    <a href="https://twitter.com/share" class="twitter-share-button"
                       data-text="Get your AP scores early from anywhere in the world." data-size="large">Tweet</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');</script>
                </div>

                <hr/>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12 text-center">
            <p>View this project
                on GitHub: <a href="https://github.com/jbman223/EarlyAP">https://github.com/jbman223/EarlyAP</a></p>

            <p>EarlyScores.com is not affiliated with, or endorsed by Collegeboard ??</p>
        </div>
    </div>
</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(".view-scores").submit(function (e) {
        e.preventDefault();

        $(".alert-danger").hide();


        $(".form-container").hide(function () {
            $(".loading").find(".loading-text").text("Logging in").parent().show("medium");
        });

        //site dormant
//        $(".loading").hide(function () {
//            $(".alert-danger").text("The site is in dormant mode, and will be ready for 2017 AP Scores").show();
//            $(".form-container").show();
//        });
//        return;
        $.post("/scoresV2/login.php", {
            username: $("input[name=username]").val(),
            password: $("input[name=password]").val()
        }, function (data) {
            console.log(data);

            if (data.success) {
                //logged in successfully
                $(".loading").find(".loading-text").text("Logged in successfully, loading scores.");

                $.post("/scoresV2/getScores.php", {
                    username: $("input[name=username]").val(),
                    password: $("input[name=password]").val()
                }, function (data) {
                    console.log(data);
                    $(".loading").hide(function () {
                        $(".score-container").html(data).show(function () {
                            $(".top-share").show();
                        });
                    });
                });
            } else {
                //couldn't log in
                $(".loading").hide(function () {
                    $(".alert-danger").show();
                    $(".form-container").show();
                });

            }
        }, "json");
    });
</script>

<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);

                document.getElementById('clockdiv').style.display = 'none';
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse("Tue, 05 Jul 2016 08:00:00 -0400"));
    initializeClock('clockdiv', deadline);
</script>
</body>
</html>
