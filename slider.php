<!DOCTYPE html>
<html>
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <style>
        .mySlides {display:none;}
    </style>
    <body>


        <div class="w3-content w3-section" style="max-width:100%; ">
            <img class="mySlides" src="banner/12.jpg" style="width:100%">
            <img class="mySlides" src="banner/13.jpg" style="width:100%">
            <img class="mySlides" src="banner/14.jpg" style="width:100%">
            <img class="mySlides" src="banner/15.jpg" style="width:100%">
	<!-- 		<img class="mySlides" src="banner/16.jpg" style="width:100%">
            <img class="mySlides" src="banner/17.jpg" style="width:100%">
           <img class="mySlides" src="banner/agency-freelancer.jpg" style="width:100%">
            <img class="mySlides" src="banner/C1aMi_JUsAApM_m.jpg" style="width:100%">
            <img class="mySlides" src="banner/footer-image.jpg" style="width:100%">
            <img class="mySlides" src="banner/freelancing.jpg" style="width:100%">-->
        </div>
        <div class="carousel-caption"  style="padding-bottom: 5%!important; text-align:left;">
            <h1 class="makeh1">Solution is Here...</h1><br /><br />
            <p class="makeh1">Find the best student for your bussiness...</p><br /><br />
            <p ><form action="listing.php" method="post"> <input type="text" name="skills" class="searchtext" placeholder="Type the Required Skills..."/>
                <input type="submit" value=" Find now " class="searchbutton" /></form></p>

        <p class="makeh1-new">Do you have any question?</p>
    </div>
    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>

</body>
</html>
