<?php
if (!isset($_SESSION['ADCompleted'])) {

    // deny access
header("Location: https://haexacutor.github.io/stopitthankok/");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Rozu Keygen</title>

        <meta name="description" content="Rozu Keygen">
        <meta name="author" content="Rozu Keygen">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Rozu Keygen">
        <meta property="og:site_name" content="Rozu Keygen">
        <meta property="og:description" content="Rozu Keygen">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="assets/media/favicons/logo.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/logo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


		<style>.mySlides {display:none;}</style>
    <script src="https://kit.fontawesome.com/4044f3a51c.js" crossorigin="anonymous"></script>
    <script src="assets/javascript.js"></script>
    <script type="text/javascript">
keyshow.disabled = true;
keyshow.hide = true;
document.getElementById("keyshow").style.display = "none";
</script>
<?php
	window.location.hash = "#!about-us";
?>
    </head>
    <body>

        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="bg-image" style="background-image: url('assets/media/photos/dashboard.jpg');">
                    <div class="hero bg-black-75 overflow-hidden">
                        <div class="hero-inner">
                            <div class="content content-full text-center">
                                <div class="mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown">
                                    <img style="width: 192px;height: 192px;" src="assets/media/favicons/logo.png" />
                                </div>
                                <h1 class="display-4 font-w600 mb-3 text-white invisible" data-toggle="appear" data-class="animated fadeInDown"><strong>Rozu Keygen</strong></h1>
								<br>
                                <span id="test" class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a data-toggle="click-ripple">
                                        <button id="keybutton" class="btn btn-success px-4 py-2" onclick="newQuotes();disableIt()"> <i class="fa fa-fw fa-key mr-1"></i> Get Key</button>
                                    </a>
                                </span>
                                <script type="text/javascript">
function disableIt() {
keybutton.disabled = true;
keybutton.hide = true;
document.getElementById("keyshow").style.display = "block";
}
</script>
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" target="_BLANK" href="https://discord.gg/jjVrYg3">
                                        <i class="fa fa-fw fa-link mr-1"></i> Discord
                                    </a>
                                </span>
                                <div id="keyshow" style="display:none">
                                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <div class="block block-rounded block-fx-pop">
                                        <div class="block-content block-content-full">
                                            <h4 class="mb-2">Your Key</h4>
                                            <hr/>
                                            <a id="keyDisplay"class="font-w600"></a>
                                        </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script>
            if (sessionStorage.getItem('beenhere') ==='1') {
                window.location="https://haexacutor.github.io/stopitthankok/";
            }
            sessionStorage.setItem('beenhere', '1');
        </script>

        <script src="assets/js/oneui.core.min.js"></script>
        <script src="assets/js/oneui.app.min.js"></script>

		<script>
			var slideIndex = 1;
			showDivs(slideIndex);
			function plusDivs(n) {
				showDivs(slideIndex += n);
			}
			function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length} ;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				x[slideIndex-1].style.display = "block";
			}
		</script>
                <script>
                      function disable_f5(e)
                               {
                      if ((e.which || e.keyCode) == 116)
                               {
                                 e.preventDefault();
                               }
                               }

                              $(document).ready(function(){
                             $(document).bind("keydown", disable_f5);    
                              });
               </script>
<script>
$(document).ready(function()
{ 
       $(document).bind("contextmenu",function(e){
              return false;
       }); 
})
</script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85 )) {
            return false;
        }
};
</script>
    </body>
</html>