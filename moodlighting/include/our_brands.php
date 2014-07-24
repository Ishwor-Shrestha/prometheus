<!-- carousel CSS and Jquery -->
<link href="css/flexistyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!------ carousel CSS and Jquery ------>
<ul id="flexiselDemo3">
    <li>
      <img src="img/a.jpg" alt="FIAM" />
      <p>FIAM</p>
    </li>
    <li><img src="img/b.jpg" alt="Decon" /><p>Decon Lighting</p></li>
    <li><img src="img/c.png" alt="Reiz" /><p>Reiz</p></li>
    <li><img src="img/d.jpg" alt="Wipro" /><p>Wipro</p></li>                                                 
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
        visibleItems: 3,
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