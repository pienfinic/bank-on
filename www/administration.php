<!DOCTYPE html>
<html>
	<head>
		<title>administration</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../www/dist/css/bootstrap.css" />
	</head><style>
		.etat {
			text-align: center;
			border-radius: 10px;
			width: 15px;
			height: 15px;
		}

		.etat.on {
			background-color: green;
		}

		.etat.off {
			background-color: red;
		}
									</style>
<body>
	<nav class="navbar navbar-default" >
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
							<span style="font-family:Arial; text-align:center; font-size:0.8cm;">Guichets</span>
				</div>
				<div class="collapse navbar-collapse"id="myNavbar">
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="login.php" data-toggle="popover" title="Pupover" data-placement="bottom" data-content="some fadfkladf;aldfjadlfa;3elja;sdlkfjadslfjaskdfl"><span class="glyphicon glyphicon-user"><?php echo " " . $_SESSION['username_admin']; ?></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
					<div class="row">
				<div class="col-sm-3" >
					</div>
					<div class="col-sm-6" >
						<table class="table table-striped">
    <thead>
      <tr >
        <th style="text-align:center;"> Banque</th>
        <th style="text-align:center;">Code</th>
        <th style="text-align:center;">Etat</th>
        <th style="text-align:center;">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb01</td>
        
        <td style="text-align:center;"  class="oneDab" key="1">
        	<div class="item-media">
											<div class="etat"></div>
										</div></td>
        <td style="text-align:center;"><button id="bntON1" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb02</td>
        <td class="oneDab" key="2">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON2" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb03</td>
        <td class="oneDab" key="3">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON3" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb04</td>
        <td class="oneDab" key="4">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON4" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb05</td>
        <td class="oneDab" key="5">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON5" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">TMB</td>
        <td style="text-align:center;">tmb06</td>
        <td class="oneDab" key="6">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON6" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">RAWBANK</td>
        <td style="text-align:center;">rwb011</td>
        <td class="oneDab" key="7">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
        </td>
        <td style="text-align:center;"><button id="bntON7" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
      <tr>
        <td style="text-align:center;">EQUITY</td>
        <td style="text-align:center;">eqt01</td>
        <td class="oneDab" key="8">
        	<div class="item-media">
											<div style="text-align:center;" class="etat"></div>
										</div>
		</td>
        <td style="text-align:center;"><button id="bntON8" type="button" class="btn btn-success btn-xs">change</button></td>
      </tr>
    </tbody>
  </table>
					</div>
					<div class="col-sm-3" >
					</div>
					</div>
		
		
	<script type="text/javascript" src="../jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../www/dist/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#bntON1").click(function() {
				var da = {
					"ac" :'tmb01',
					"id" : 1,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON2").click(function() {
				var da = {
					"ac" :'tmb02',
					"id":2,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON3").click(function() {
				var da = {
					"ac" :'tmb03',
					"id":3,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON4").click(function() {
				var da = {
					"ac" :'tmb04',
					"id":3,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON5").click(function() {
				var da = {
					"ac" :'tmb05',
					"id":5,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON6").click(function() {
				var da = {
					"ac" :'tmb06',
					"id":6,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON7").click(function() {
				var da = {
					"ac" :'rwb1',
					"id":7,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});
			$("#bntON8").click(function() {
				var da = {
					"ac" :'eqt01',
					"id":8,
				}
				$.post("../controleur.php", da, function(data) {
					alert(data);
				});
			});

			var donnees = {
				"ac" : 1,
			};
			setInterval(function(){
				$.post("../controleur.php", donnees, function(data) {
					data = eval(data);
					var etat;
					for (var i = 0; i < data.length; i++) {
						etat = data[i].etat == "1" ? "on" : "off";
						$(".oneDab[key='" + (i + 1) + "'] .etat").addClass(etat);
					}
				});

			}, 2000);
		});

	</script>
</body>
</html>