<?php

if(!isset($_SESSION["allowLogin"])){
    header("Location: ./app.php");
}
else{





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>DRIP CULTURE</title>
	
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="header-fix fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">


                         <div style="padding:15px"> 
                            <img src="https://dripculture.com.au/wp-content/uploads/2021/08/Primary-Logo_Colour-200x32.png" alt="">
                         </div>


                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link toggle-nav hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- Messages -->
                   
                        <!-- End Messages -->
                    </ul>

                    
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated slideInRight">
                                <ul>
                              
                                    <li>
                                        <div class="header-notify">
                                            <!-- Message -->
                                            <a href="#">
                                                <i class="cc BTC m-r-10 f-s-40" title="BTC"></i>
                                                
                                                <div class="notification-contnet">
                                                    <h5>All Transaction BTC</h5> <span class="mail-desc">Just see the my new admin!</span> 
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <i class="cc LTC m-r-10 f-s-40" title="BTC"></i>
                                                <div class="notification-contnet">
                                                    <h5>This is LTC coin</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <i class="cc DASH m-r-10 f-s-40" title="BTC"></i>
                                                <div class="notification-contnet">
                                                    <h5>This is DASH coin</h5> <span class="mail-desc">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <i class="cc XRP m-r-10 f-s-40" title="BTC"></i>
                                                <div class="notification-contnet">
                                                    <h5>This is LTC coin</h5> <span class="mail-desc">Just see the my admin!</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> Check all notifications <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                     
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                                <ul class="dropdown-user">
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"> Profile</a></li>
                                    <li><a href="#"> Balance</a></li>
                                    <li><a href="#"> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"> Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
      
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->

        
        <div class="">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><span style="color: black;">Welcome</span> Mr Adnan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" ><a style="color:black" href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashoboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
            <div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="p-20">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a style="color:black" class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                    <li class="nav-item"> <a style="color:black" class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="p-21">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card p-30">
                                                        <div class="media">
                                                            <div class="media-left meida media-middle">
                                                                <span><i class="fa fa-calendar f-s-40 color-success"></i></span>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h4> (26 December 2022, 2pm Sydney time)</h4>
                                                            <p class="m-b-0">  Days until giveaway winner is announced</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card p-30">
                                                        <div class="media">
                                                            <div class="media-left meida media-middle">
                                                                <span><i class="ti-ticket f-s-40 color-success"></i></span>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h4>178</h4>
                                                                <p class="m-b-0">Number of entries
                            
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card p-30">
                                                        <div class="media">
                                                            <div class="media-left meida media-middle">
                                                                <span><i class="fa fa-heart f-s-40 color-success"></i></span>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h4> 19 </h4>
                                                            <p class="m-b-0">  Days you have been a member                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card p-30">
                                                        <div class="media">
                                                            <div class="media-left meida media-middle">
                                                                <span><i class="ti-user f-s-40 color-success"></i></span>
                                                            </div>
                                                            <div class="media-body text-right">
                                                                <h4>Preimium</h4>
                                                                <p class="m-b-0">Current Membership
                            
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                            
                                         
                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Order Summary</h4>
                                                            <h6 class="card-subtitle">All new or old address Made in past</h6>
                                                            <div class="table-responsive m-t-40">
                                                                <table id="myTable" class="table  ">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Order Number</th>
                                                                            <th>Package </th>
                                                                            <th>Start Date </th>
                                                                            <th>End Date </th>
                                                                            <th>Membership Status</th>
                                                                            <th>Next Bill </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>12299629</td>
                                                                            <td>
                                                                                <span class="badge badge-premium">
                                                                                    Premium
                                                                                </span>
                                                                            </td>
                                                                            <td>12-09-2022</td>
                                                                            <td>12-10-2022</td>
                                                                            <td> <span class="badge badge-success">Active </span> </td>
                                                                            <td>12-10-2022</td>
                                                                        </tr>
                            
                                                                        <tr>
                                                                            <td>12299629</td>
                                                                            <td>
                                                                                <span class="badge badge-elite">
                                                                                    Elite
                                                                                </span>
                                                                            </td>
                                                                            <td>12-09-2022</td>
                                                                            <td>12-10-2022</td>
                                                                            <td> <span class="badge badge-danger">Expired </span> </td>
                                                                            <td>12-10-2022
                            </td>
                                                                        </tr>
                            
                                                                        <tr>
                                                                            <td>12299629</td>
                                                                            <td>
                                                                                <span class="badge badge-standard">
                                                                                    Standard
                                                                                </span>
                                                                            </td>
                                                                            <td>12-09-2022</td>
                                                                            <td>12-10-2022</td>
                                                                            <td> <span class="badge badge-success">Active </span> </td>
                                                                            <td>12-10-2022</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            
                            
                            
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-title">
                                                            <h4>Membership / Entires</h4>
                                                        </div>
                                                       <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="team-chart">
                                                                <div id="np-Pie" style="height: 370px"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                                <table style="width:100%">
                                                                    <tr>
                                                                        <td>
                                                                            <h1 class="card-title text-center">
                                                                                Number of one off entries
                                                                                <br> <br>
                                                                                <span style="font-size: 28px;" class="text-primary">   <b>2</b></span>
                                                                            </h1>
                                                                        </td>
                                                                        <td>
                                                                            <h1 class="card-title text-center">
                                                                                Number of one off entries
                                                                                <br> <br>
                                                                                <span style="font-size: 28px;" class="text-primary">   <b>5</b></span>
                                                                            </h1>
                                                                        </td>
                                                                    </tr>
                                                                 
                                                               
                                                                </table>
                                                                <br><br>
                                                                <table style="width:100%">
                                                                    <tr>
                                                                        <td>
                                                                            <h1 class="card-title text-center">
                                                                                Number of one off entries
                                                                                <br> <br>
                                                                                <span style="font-size: 28px;" class="text-primary">   <b>1</b></span>
                                                                            </h1>
                                                                        </td>
                                                                        <td>
                                                                            <h1 class="card-title text-center">
                                                                                Number of one off entries
                                                                                <br> <br>
                                                                                <span style="font-size: 28px;" class="text-primary">   <b>15</b></span>
                                                                            </h1>
                                                                        </td>
                                                                    </tr>
                                                                 
                                                               
                                                                </table>
                                                        </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <!-- /# column -->
                                              
                            
                                            </div>
                            
                                            <div class="row p-20">
                                                <div class="card-body">
                                                   <div class="col-lg-12 card">
                                                       <div class="card-body">
                                              
                                                        <h4 class="card-title"> Giveaway & Events Schedule</h4>
                                                        <h6 class="card-subtitle">All Events Date Will be Announced Here</h6>
                                                       </div>
                                
                                                     <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card">
                                                                 <div class="card-body">
                                                                     <div class="year-calendar"></div>
                                                                 </div>
                                                             </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                           <center>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="">
                                                                         <div class="card-body">
                                                                              <br><br>
                                                                            <p class="events-p"><i class="fa fa-calendar"></i> Monday 26 December 2022</p>
                                                                            <p class="events-p">  <i class="fa fa-hourglass"></i> 02:00 PM</p>
                                                                            <p class="events-p"> <i class="fa fa-location-arrow"></i> Giveaway #1005 Franck Muller Vanguard
                                                                                <br>  <br>
                                                                                
                                                                              <p>
                                                                                <a href="">  <img class="socials" src="images/fb.png" alt=""></a> &nbsp;
                                                                                <a href="">    <img class="socials" src="images/ins.jfif" alt=""></a>
                                                                                 </p>  
                                           
                                                                            </p>
                                        
                                                                         </div>
                                                                     </div>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                                               <div>
                                                                                                <br>
                                                                    <table class="nytable">
                                                                        <tr>
                                                                            <td style="color: #EBCE98;">
                                                                               <b> Days</b>
                                                                            </td>
                                                                            <td style="color: #EBCE98;">
                                                                               <b> Hours</b>
                                                                            </td>
                                                                            <td style="color: #EBCE98;">
                                                                           <b>     Mintues</b>
                                                                            </td>
                                                                            <td style="color: #EBCE98;">
                                                                              <b>  Seconds</b>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td id="dayss" style="text-align: center;">
                                                                                0
                                                                            </td>
                                                                            <td id="hrs" style="text-align: center;">
                                                                                0
                                                                            </td>
                                                                            <td id="mints" style="text-align: center;">
                                                                                0
                                                                            </td>
                                                                            <td id="sec" style="text-align: center;">
                                                                                0
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                        
                                
                                                                   </div>
                                                                   </p>
                                                                </div>
                                                            </div>
                                                           </center>
                                                        </div>
                                                     </div>
                                                        <!-- /# card -->
                                                    </div>
                                                </div>
                                        
                                               </div>        </div>
                                    </div>
                                    <div class="tab-pane  p-21" id="profile" role="tabpanel">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">PARTNER DISCOUNTS PORTAL</h4>
                                                        <h6 class="card-subtitle">Information Guide</h6>
                                                        <div class="table-responsive m-t-40">
                                                            <table id="myTable" class="table  ">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name of Partner</th>
                                                                        <th>Company Logo</th>
                                                                        <th>Description </th>
                                                                        <th>Contact details </th>
                                                                        <th>Discount </th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr style="height: 327px">
                                                                        <td class="s6" >Entermission</td>
                                                                        <td class="s8"></td>

                                                                        <td class="s7" >Entermission is one of the most popular activities in Sydney and Melbourne, and a
                                                                          Travellers’ Choice Award Winner. It’s also Sydney and Melbourne’s only virtual reality escape rooms ‍with
                                                                          real-life SPECIAL EFFECTS!<br><br>Love escape rooms or want to escape from reality? ️‍<br><br>● Journey into
                                                                          Alice’s Wonderland or outer space, see exotic animals in the sky jungle or other fantastical worlds.<br><br>●
                                                                          See, hear and interact as a team to find clues and solve puzzles to complete your mission and have FUN
                                                                          .<br><br>● Fly through space, shoot lasers, defeat the Queen of Hearts or perform other amazing
                                                                          feats.<br><br>● Special effects making the action feel REAL – smell gunpowder and smoke, feel wind on your
                                                                          face.<br><br>● Save the world, escape flying islands or save Wonderland in 60 action packed
                                                                          minutes.<br><br>Take funny pictures and videos playing in your private teams of 2-6. Add extra excitement
                                                                          going head-to-head for larger groups.<br><br> Perfect for friends, families, team building and birthday /
                                                                          bucks / hens parties .Enjoy complimentary tea, coffee, hot chocolate, lemonade and biscuits after your
                                                                          adventure. Take pictures in front of the interactive photo walls as a memento of your experience. Allow 1 hour
                                                                          15 mins for the entire experience.<br><br>HOSTED ONLINE ESCAPE ROOMS<br><br>Entermission’s Hosted Online
                                                                          Escape Rooms is as much fun as a REAL life escape room – but all online! It’s the PERFECT VIRTUAL TEAM
                                                                          BUILDING OR PARTY EXPERIENCE or just a fun way to connect with family and friends from ANYWHERE IN THE
                                                                          WORLD.<br><br>Bring everyone together to get that brain working, problem-solving skills rocking, teamwork
                                                                          going and your AWESOMENESS to solve puzzles and challenges to complete your mission and escape in 60 minutes
                                                                          and have FUN !<br><br>● See and interact with each other through Zoom video<br><br>● Explore 360° views of
                                                                          real-life rooms<br><br>● Investigate the room together<br><br>● Interact with items in the room as you would
                                                                          in real life<br><br>● Input the solutions to the puzzles yourself<br><br>● Be thrilled seeing actual locks
                                                                          open with solved puzzles<br><br>● Fully hosted with real time assistance from live Adventure
                                                                          Master<br><br>Recommended team size of 2-6 people or for larger groups go head to head to see who escapes
                                                                          first! Perfect for large events with over 100 people able to play at the one time!<br><br>Have FUN and BOND
                                                                          like you would in person!</td>
                                                                        <td class="s7" >Sydney<br>Website: enterthemission.com<br>Address: Level 1, 484 Kent Street, Sydney NSW
                                                                          2000<br>Email: sydney@enterthemission.com.au<br>Phone: (02) 9267 3873<br>Melbourne<br>Website:
                                                                          enterthemission.com/melbourne<br>Address:Level 1, 164 Bourke Street, Melbourne VIC 3000 (near intersection
                                                                          with Russell St<br>Email: melbourne@enterthemission.com.au<br>Phone: (03) 8060 0683<br>IG: @entermission.melb
                                                                          ; @entermission.syd</td>
                                                                        <td class="s7" >10% off VR and online escape rooms<br><br>How to redeem :<br>In-store: Present your
                                                                          current membership card to redeem discounts.<br>Online: Use code at checkout DRIP10</td>
                                                                      </tr>                        
                                                                </tbody>  
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        


                                    </div>
                                    <div class="tab-pane p-21" id="messages" role="tabpanel">3</div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>









            
                <!-- /# row -->

             

                
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2022 Drip Culture All Right Reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 26, 2022 02:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("dayss").innerHTML = days;
          document.getElementById("hrs").innerHTML = hours;
          document.getElementById("mints").innerHTML = minutes;
          document.getElementById("sec").innerHTML = seconds;
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Yahoo!";
          }
        }, 1000);
        </script>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
	
	
    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!-- Echart -->
    <script src="js/lib/echart/echarts.js"></script>
    <script src="js/lib/echart/dashboard1-init.js"></script>
    <!--Custom JavaScript -->

    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>




<?php

}

?>