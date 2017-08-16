<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>class 9-10</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
        p{text-align: justify !important;}
          .revealed h2 {
            font-size: 30px !important;
          }

          .revealed .main-frame-container {
            padding-right: 10px;
          }

          .activity {
            border: 3px solid #3C72B3;
            background: #B0CEE3;
            border-radius: 20px;
            padding: 8px 15px;
            color: #000;
            margin: 15px 0;
            line-height: 1.5em;
            font-size: 16px;
          }
          .content_table table tr td {
            padding: 4px;
            border: 1px solid #ccc;
            margin: 0;
            /* text-align: justify; */
        }

            .content_table {
            margin: 2px auto 10px;
            overflow-y: auto;
       }

            .style3 {
            color: #FFF;
            font-weight: bold;
      }

           .main-frame-container divide {
           display: inline-block;
           vertical-align: middle;
     }
          .main-frame-container divide upper {
          border-bottom: 1px solid #222;
          display: block;
          text-align: center;
     }
         .main-frame-container divide lower {
         display: block;
         text-align: center;
}

        </style>
        
    </head>
    <body>
        <div class="header" id="header">
            <div class="container">
                <div class="row">
                    <!--Logo-->
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="#"><img src="../images/logo.png" alt="BDeducation logo"></a>
                        </div>
                    </div>
                    <!--Header Menu-->
                    <div class="col-md-9 col-xs-12">
                        <div class="header-menu">
                            <ul class="top-menu">
                                <li><a class="dropdown" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i></a>
                                    <!--onclick dropdown menu for notification icon-->
                                   <ul class="dropdown-menu">
                                        <li>Notification</li>
                                    </ul>
                                </li>
                                <li><a class="dropdown" data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i></a>
                                    <!--onclick dropdown menu for message icon-->
                                   <ul class="dropdown-menu">
                                        <li>message</li>
                                    </ul>
                                </li>
                                <li><a class="dropdown" data-toggle="dropdown" href="#"><i class="fa fa-calendar"></i></a>
                                    <!--onclick dropdown menu for calendar icon-->
                                   <ul class="dropdown-menu">
                                        <li>calendar</li>
                                    </ul>
                                </li>
                                <li><a class="dropdown" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Admin</a>
                                    <!--onclick dropdown menu for admin icon-->
                                   <ul class="dropdown-menu">
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                        <li>Logout</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Language Selector button-->
                    <div class="col-md-1 col-xs-12">
                        <div class="language">
                            <a href="#">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-content-wrapper">
            <div class="container special-container">
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <!--Sidebar Menu-->
                        <div class="mainmenu">
                            <div class="navbar-header">
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                  <span class="sr-only">Toggle navigation</span> 
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                               </button>
                           </div> 
                           <div style="height: 1px;" class="navbar-collapse special-nav collapse">
                               <ul class="nav navbar-nav">
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home1">Chapter 1</a>
                                       <div id="home1" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home2" href="#home2">Chapter 2</a>
                                       <div id="home2" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class="active"><a data-toggle="collapse" area-expand="true" href="#home3">Chapter 3</a>
                                       <div id="home3" class="collapse in">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                   </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home4">Chapter 4</a>
                                       <div id="home4" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home5">Chapter 5</a>
                                       <div id="home5" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home6">Chapter 6</a>
                                       <div id="home6" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home7">Chapter 7</a>
                                       <div id="home7" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home8">Chapter 8</a>
                                       <div id="home8" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                                   <li class=""><a data-toggle="collapse" area-expand="true" href="#home9">Chapter 9</a>
                                       <div id="home9" class="collapse">
                                          <img class="chapter-cover" src="../images/topic/books_2.png" alt="">
                                           <a href="#" class="topic-link">topic 1</a>
                                           <a href="#" class="topic-link">topic 2</a>
                                           <a href="#" class="topic-link">topic 3</a>
                                           <a href="#" class="topic-link">topic 4</a>
                                       </div>
                                    </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <!--breadcrumb area-->
                        <div class="breadcrumb col-xs-12">
                            <ul class="bradcrumb-area">
                                <li><i class="fa fa-home"></i>Home</li>
                                <li>Elements</li>
                            </ul>
                        </div>
                        <!--Main Content Starts here-->
                        <div class="main-content-box col-xs-12">
                            <!--Page Heading-->
                            <div class="main-content-box-top-portion col-xs-12">   
                                <div class="col-sm-6 col-xs-12">
                                    <h2>Chapter:3 Content</h2>
                                </div>
                                <!--Download Buttons-->
                                <div class="col-sm-6 col-xs-12">
                                    <a class="dnld-button" href="#">Reference Book  <i class="fa fa-download"></i></a>
                                    <a class="dnld-button" href="#">Text Book  <i class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <!-- Choice Large Buttons-->
                            <div class="large-button-container col-xs-12">
                                <div class="col-sm-12 col-xs-12">
                                    <a class="large-button" href="index.html"><span class="icon"><i class="fa fa-book"></i></span><br/><span class="large-button-text">Pre-requisite</span></a>

                                    <a class="large-button active" href="ch3_full_chapter.html"><span class="icon"><i class="fa fa-list-alt"></i></span><br/><span class="large-button-text">Full Chapter</span></a>

                                    <a class="large-button" href="#"><span class="icon"><i class="fa fa-play-circle"></i></span><br/><span class="large-button-text">Video Class</span></a>

                                    <a class="large-button" href="index.html"><span class="icon"><i class="fa fa-rub"></i></span><br/><span class="large-button-text">Theorems</span></a>
                                    
                                    <a class="large-button" href="vocabulary.html"><span class="icon"><i class="fa fa-sitemap"></i></span><br/><span class="large-button-text">Diagram</span></a>
                                
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <a class="large-button" href="paragraph-writing.html"><span class="icon"><i class="fa fa-code"></i></span><br/><span class="large-button-text">Mathematical Problems and Solution</span></a>

                                    <a class="large-button" href="paragraph-writing.html"><span class="icon"><i class="fa fa-list-alt"></i></span><br/><span class="large-button-text">Objective</span></a>

                                    <a class="large-button" href="reading-writing.html"><span class="icon"><i class="fa fa-check-square-o"></i></span><br/><span class="large-button-text">Crerative Question</span></a>

                                    <a class="large-button" href="#"><span class="icon"><i class="fa fa-stack-exchange"></i></span><br/><span class="large-button-text">Chapter Summary</span></a>

                                    <a class="large-button" href="#"><span class="icon"><i class="fa fa-sun-o"></i></span><br/><span class="large-button-text">Technique to Remember</span></a>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <a class="large-button" href="paragraph-writing.html"><span class="icon"><i class="fa fa-copy"></i></span><br/><span class="large-button-text">Previous Questions</span></a>

                                    <a class="large-button" href="paragraph-writing.html"><span class="icon"><i class="fa fa-pie-chart"></i></span><br/><span class="large-button-text">Planning</span></a>

                                    <a class="large-button" href="reading-writing.html"><span class="icon"><i class="fa fa-newspaper-o"></i></span><br/><span class="large-button-text">E-paper</span></a>

                                    <a class="large-button" href="#"><span class="icon"><i class="fa fa-cubes"></i></span><br/><span class="large-button-text">Others</span></a>

                                    <a class="large-button" href="#"><span class="icon"><i class="fa fa-paste"></i></span><br/><span class="large-button-text">Exam/Test</span></a>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <a class="large-button " href="paragraph-writing.html"><span class="icon"><i class="fa fa-list-alt"></i></span><br/><span class="large-button-text">Practice</span></a>

                                    <a class="large-button" href="paragraph-writing.html"><span class="icon"><i class="fa fa-cogs"></i></span><br/><span class="large-button-text">Handwritting</span></a>

                                    <a class="large-button" href="reading-writing.html"><span class="icon"><i class="fa fa-play-circle"></i></span><br/><span class="large-button-text">Photo/Video</span></a>
                                </div>
                            </div>
                            <!--Blocked Area-->
                            <div class="col-sm-12 col-xs-12">
                                <div class="status-container">
                                     <h2><i class="fa fa-list-alt"></i> Full Chapter</h2>
                                 </div>
                            </div>