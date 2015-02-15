
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 3.0. responsive pricing tables - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    @import url("http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css");
@import url("http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&subset=latin,latin-ext");

body {
        padding-top: 40px;
        padding-bottom: 40px;
    	
      }
	
	/* COMMON PRICING STYLES */
		.panel.price,
		.panel.price>.panel-heading{
			border-radius:0px;
			 -moz-transition: all .3s ease;
			-o-transition:  all .3s ease;
			-webkit-transition:  all .3s ease;
		}
		.panel.price:hover{
			box-shadow: 0px 0px 30px rgba(0,0,0, .2);
		}
		.panel.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .2) inset;
		}
		
				
		.panel.price>.panel-heading{
			box-shadow: 0px 5px 0px rgba(50,50,50, .2) inset;
			text-shadow:0px 3px 0px rgba(50,50,50, .6);
		}
			
		.price .list-group-item{
			border-bottom-:1px solid rgba(250,250,250, .5);
		}
		
		.panel.price .list-group-item:last-child {
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}
		.panel.price .list-group-item:first-child {
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
		}
		
		.price .panel-footer {
			color: #fff;
			border-bottom:0px;
			background-color:  rgba(0,0,0, .1);
			box-shadow: 0px 3px 0px rgba(0,0,0, .3);
		}
		
		
		.panel.price .btn{
			box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;
			border:0px;
		}
		
	/* green panel */
	
		
		.price.panel-green>.panel-heading {
			color: #fff;
			background-color: #57AC57;
			border-color: #71DF71;
			border-bottom: 1px solid #71DF71;
		}
		
			
		.price.panel-green>.panel-body {
			color: #fff;
			background-color: #65C965;
		}
				
		
		.price.panel-green>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-green .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* blue panel */
	
		
		.price.panel-blue>.panel-heading {
			color: #fff;
			background-color: #608BB4;
			border-color: #78AEE1;
			border-bottom: 1px solid #78AEE1;
		}
		
			
		.price.panel-blue>.panel-body {
			color: #fff;
			background-color: #73A3D4;
		}
				
		
		.price.panel-blue>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-blue .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* red price */
		
	
		.price.panel-red>.panel-heading {
			color: #fff;
			background-color: #D04E50;
			border-color: #FF6062;
			border-bottom: 1px solid #FF6062;
		}
		
			
		.price.panel-red>.panel-body {
			color: #fff;
			background-color: #EF5A5C;
		}
		
		
		
		
		.price.panel-red>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-red .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* grey price */
		
	
		.price.panel-grey>.panel-heading {
			color: #fff;
			background-color: #6D6D6D;
			border-color: #B7B7B7;
			border-bottom: 1px solid #B7B7B7;
		}
		
			
		.price.panel-grey>.panel-body {
			color: #fff;
			background-color: #808080;
		}
		

		
		.price.panel-grey>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-grey .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* white price */
		
	
		.price.panel-white>.panel-heading {
			color: #333;
			background-color: #f9f9f9;
			border-color: #ccc;
			border-bottom: 1px solid #ccc;
			text-shadow: 0px 2px 0px rgba(250,250,250, .7);
		}
		
		.panel.panel-white.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .05) inset;
		}
			
		.price.panel-white>.panel-body {
			color: #fff;
			background-color: #dfdfdf;
		}
				
		.price.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .8);
				color:#666;
		}
		
		.price:hover.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .9);
				color:#333;
		}
		
		.price.panel-white .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
	<div class="container">
	<div class="row">
    			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-red">
						<div class="panel-heading  text-center">
						<h3>PRO PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$10 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-danger"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-blue">
						<div class="panel-heading arrow_box text-center">
						<h3>DEV PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$20 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-info"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-info"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-info"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-info" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-green">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				
					<!-- PRICE ITEM -->
					<div class="panel price panel-white">
						<div class="panel-heading arrow_box text-center">
						<h3>FREE PLAN</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:40px"><strong>$0 / month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-default" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->
					
					
				</div>
				
				
			</div>
            
</div>
	<script type="text/javascript">
	
	</script>
</body>
</html>
