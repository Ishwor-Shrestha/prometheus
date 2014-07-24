<!-- carousel CSS and Jquery -->
<link href="css/flexistyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!------ carousel CSS and Jquery ------>


<h3 class="custom-heading">Our Partners & Networking</h3>

<ul id="flexiselDemo3">
    <li>
      <img src="images/1.jpg" />
      <p>test</p>
    </li>
    <li><img src="images/2.jpg" /><p>test</p></li>
    <li><img src="images/3.jpg" /><p>test</p></li>
    <li><img src="images/4.jpg" /><p>test</p></li>                                                 
</ul>   
<div class="clearout"></div>
<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

    $("#flexiselDemo4").flexisel({
        clone:false
    });
    
});
</script>