<!DOCTYPE html>
<html lang="en">
    <?php include 'con/con.php'; ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taaraksh</title>
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

<style>
    @font-face{
        font-family: 'prognostic';
        src: url('assets/fonts/prognostic.ttf');
    }
</style>

<body>

    <div class="ct" id="t1">
    <div class="ct" id="t2">
        <div class="ct" id="t3">
        <div class="ct" id="t4">
            <div class="ct" id="t5">
            <ul id="menu">
                <a href="#t1"><li class="icon fa fa-home" id="uno"></li></a>
                <a href="#t2"><li class="icon fa fa-cogs" id="dos"></li></a>
                <a href="#t3"><li class="icon fa fa-life-ring" id="tres"></li></a>
                <a href="#t4"><li class="icon fa fa-users" id="cuatro"></li></a>
                <!--<a href="#t5"><li class="icon fa fa-users" id="cinco"></li></a>-->
            </ul>


            <div class="page" id="p1">
                <div class="home">
                    <center class="title">Taaraksh'17</center>
                </div>
            </div>
            
            
            <div class="page" id="p2">
                <center class="sub-title">EVENTS</center>
                <?php include '../aurganon/ui/info.php'; ?>
            </div>  
            
            
            <div class="page" id="p3">
                <center class="sub-title">SPONSORS</center>                
            </div>
            
            
            <div class="page" id="p4">
                <center class="sub-title">TEAM</center>
            </div> 
            
            
            <!--<div class="page" id="p5">
                <section class="icon fa fa-plus-circle">
                <span class="title">More</span>
                <p class="hint">
                    <span>You love one page & CSS only stuff? </span><br/>
                    <a href="https://codepen.io/hrtzt/details/pgXMYb/" target="_blank">check this pen "Pure CSS One page vertical navigation"</a>
                </p>
                </section>
            </div> -->
            </div>
        </div>
        </div>
    </div>
    </div>

</body>
  
    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
]</html>


