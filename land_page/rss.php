<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Аренда прокат автомобилей, экскурсии в Израиле | Vastama +972-58-7710101</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Аренда прокат автомобилей, экскурсии в Израиле. Экскурсии Израиль, туры в израиль, отдых в израиле, израиль, индивидуальные экскурсии по израилю" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!--<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>-->
<!--<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>-->
<!-- Source -->
<!--<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>-->
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
	
</head>
<body>

	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><span>V</span>astama</a>
				<br/>Аренда прокат автомобилей, экскурсии в Израиле
				<br/>рег. номер 515052702 <br/>тел +972-58-771-0101
			</div>
			<div class="header-right">
			
	<!-- Large modal -->
			<div class="modal-body">
									     
								</div>

		</div>
		</div>
	</div>

	
		<!-- content-starts-here -->
		<div class="content">
			
			
				<div class="container">
				<!-- slider -->
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters.html"); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters_finance.html"); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters.html"); ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters.html"); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters.html"); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">										 
                                    <div>
                                            <?php include("../reuters.html"); ?>
                                    </div>
                                </div>
				

</div>	
                    </div>
<div class="clearfix"></div>
					
</body>
</html>