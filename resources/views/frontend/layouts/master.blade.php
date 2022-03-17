<!doctype html>

<html lang="en" class="minimal-style is-menu-fixed is-always-fixed is-selection-shareable blog-animated header-light header-small" data-effect="slideUp">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Impose - Responsive HTML5 Template">
    <meta name="keywords" content="personal, blog, html5">
    <meta name="author" content="Pixelwars">
     @include('frontend.layouts.head')
</head>

<body class="  ">

    <!-- page -->
    <div id="page" class="hfeed site">
        
      
    @include('frontend.layouts.main-headerbar')
        
        
        
        <!-- site-main -->
        <div id="main" class="site-main">
<div class="layout-medium"> 
            <div id="primary" class="content-area">
             
            
            
            
             
        
        	

            
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main"> <!-- .hentry -->
                       @yield('content')
                               
                                
                    </div>
                    <!-- site-content -->
            
            </div>
                <!-- primary -->    
            
            
            	
            
            
            </div>
            <!-- layout -->
        
        
        </div>
        <!-- site-main -->
        
        
        
     @include('frontend.layouts.footer')

        
	</div>
    <!-- page -->
    
     @include('frontend.layouts.footer-scripts')
</body>
</html>
