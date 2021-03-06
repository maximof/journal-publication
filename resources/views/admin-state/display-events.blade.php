<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--    <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>NACP | State Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="/adminassets/css/jumbo-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="/adminassets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="dark-indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
   
      
            <!-- Sidebar header  -->
           @include('statechapter-sidebar')
            <!-- /sidebar header -->

           

    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
       @include('adminheader')
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">

                <div class="animated slideInUpTiny animation-duration-3">

                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">Event Details</h2>
                        <nav class="breadcrumb">
                            <a href="/state" class="breadcrumb-item">Dashboard</a>
                        
                         <!--    <span class="active breadcrumb-item">{{ $staevent->position }}</span> -->
                        </nav>
                    </div>

                  

                   


                    <div class="row mb-md-12">
                        <div class="col-md-12 col-12">
                            <div class="shadow border-0 card">
                                <div class="card-header">
                                  <span style="text-transform: uppercase;">Title: {{$staevent->title}}</span>
                                </div>
                                <div class="card-body">
                                   
                           <h3 class="mb-4">Date: {{$staevent->date}}</h3> 
                             <p class="mb-4" ><b></b> {{$staevent->location}}</p>
                                    <h3>Event/Conference Details:</h3>
                                    <p class="card-text"> {!! $staevent->event_details !!} </p>
                                    <h3>Uploaded mage:</h3>
                                    <img src="/stategallery/{{$staevent->image}}" width="400px">
                                  

                                </div>
                            </div>
                        </div>
                    
                    </div>

        


              



            
                </div>

            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div>NACP © {{now()->year}}</p>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

    <!-- Theme Options Button -->
    
    <!-- /Theme Options Button -->

</div>
<!-- /page container -->

<!-- Right Sidebar-->

<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="/adminassets/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="/adminassets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="/adminassets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="/adminassets/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:33 GMT -->
</html>

