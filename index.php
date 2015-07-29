<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Meetings using Adobe Connect</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<div style="float: left;">
					<a href="http://www.adobe.com/products/adobeconnect.html" target="_blank"><img src="images/AcrobatConnect.png" style="height: 50px; width: auto; margin-top: 0px; margin-right: 10px;" class="img-responsive" alt="adobe connect logo"></a>
				</div>
				<h1 style="margin-top: 10px; text-align: left;">Adobe Connect <small>Documentation</small></h1>
			</div>
		</div>
		
		<div class="container">
				<p> <?php 
					date_default_timezone_set('America/New_York');
					
					$time = date('H');
					if ($time >= 0 && $time <= 11) {
						echo "Good morning! ";
					} else if ($time >= 12 && $time <= 16) {
						echo "Good afternoon! ";
					} else {
						echo "Good evening! ";
					}					
				?> 
				
				Today is: <?php echo date('M j, Y'); ?>
				
				- last refreshed at
				
				<script type="text/javascript">
					
						<!--
						var AM_PM;
						var theDate = new Date();
						var theHour = theDate.getHours();
						
						if (theHour < 12) {
							AM_PM = "AM";
						} else {
							AM_PM = "PM";
						}
						
						if (theHour == 0) {
							theHour = 12; 
						}
						
						if (theHour > 12) {
							theHour = theHour - 12 ;
						}
						
						var theMinutes = theDate.getMinutes();
						theMinutes = theMinutes + "";
						
						if (theMinutes < 10) {
							theMinutes = "0" + theMinutes;
						}
						
						var theFullTime = theHour + ":" + theMinutes + " " + AM_PM;
						document.write(theFullTime);
						//-->
				
				</script>
				</p>
		</div>
		
		<div class="jumbotron">
			<h2 style="text-align: center; margin-bottom: 20px;">How to set up a meeting</h2>
			<p class="text-center" style="margin-bottom: 20px;">Hello, my name is Adam Fendler, and in this tutorial I will teach you how to use the Adobe Connect software to set up a meeting and invite attendees.</p>
			
			<div style="float: center; text-align: center;">
				<a class="btn btn-primary btn-lg" href="adobeconnect.pdf" download="MeetingDocumentation.pdf" role="download">Download PDF</a>
			</div>
		</div>
		
		

		<div class="container">
			<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Watch Video Tutorial
			</a>
			<div class="collapse" id="collapseExample">
				<div class="well">
					<center><video src="images/My_First_Meeting.mp4" controls="controls" width="80%" height="auto"></video></center>
  				</div>
			</div>
		</div>

		
		<div class="container">
	   		<h1>Instructions <small> <a href="https://helpx.adobe.com/adobe-connect/tech-specs.html" target="_blank">Technical Requirements</a></small></h1> 
		</div>
		
		<div class="container">
			<div class="row visible-md visible-lg" style="background: #555; border-top-left-radius:2em; border-top-right-radius:2em; color: #fff;">
				<div class="col-md-3">
					<h3>Brief Description</h3>
				</div>
				<div class="col-md-9 visible-md visible-lg">
					<h3>Full Description</h3>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 1: <br/><small><strong>Login</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
						0%
  					</div>
				</div>
			</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">The first step is to log in to the Adobe Connect software using your Adobe ID and password.</h4>
					<p>&nbsp;</p>
					<p><img src="images/login.png" alt="login screen" class="img-responsive img-thumbnail"></p>
					<p>&nbsp;</p>	
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 2: <br/><small><strong>Create New Meeting</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
						10%
  					</div>
				</div>
			</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Once you log in you will be redirected to the main dashboard. At the top you will see a label that says "Create New." Select the option entitled "Meeting."</h4>
					<p>&nbsp;</p>
					<p>
						<img src="images/dashboard.png" class="img-responsive img-thumbnail" usemap="#Map" alt="Dashboard">
						<map name="Map" id="Map">
							<area shape="rect" coords="57,101,108,120" title="CORRECT!" nohref="#" alt="CORRECT!" />
						</map>
					</p>
					<p>&nbsp;</p>

				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 3:<br/><small><strong>Enter the name</strong></small></h2>
					<div class="alert alert-success" style="text-align: center;" role="alert">You will now see a form that you will fill out with the meeting 				information (Steps 3 - 9)		
					</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
						20%
  							</div>
						</div>
					</div>
					<div class="col-md-9">
						<h4 style="opacity: 0.7;">This is a required field, so you <strong>must</strong> enter the name of your meeting.</h4>
						<p>&nbsp;</p>
						<p><img src="images/meetingInfo.png" alt="meeting information screen" class="img-responsive img-thumbnail" onmouseover="this.src='images/meetingName.png'" onmouseout="this.src='images/meetingInfo.png'"></p>
						<p>&nbsp;</p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 4:<br/><small><strong>Not Required</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
						20%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Custom URL can be left blank if you don't mind the URL being auto generated - or you can give the link a specific name.</h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 5:<br/><small><strong>Not Required</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
						20%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Summary is also not required, but can be utilized to give a brief description of your event.</h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 6:<br/><small><strong>Enter the date/time/duration</strong></small></h2>
					<div class="alert alert-info" style="text-align: center;" role="alert">If you are running late or run over time, the system won't start without you or cut you off.
					</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
						30%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">For the start time and the duration, these are simply meant to provide your attendees with the time you intend on starting your meeting and how long you expect it to be.</h4>
				</div>
			</div>
		</div>		
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 7:<br/><small><strong>Not Required</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
						30%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">You can leave "Select Template" as is - that is a complex feature not typically needed for a general meeting.</h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 8:<br/><small><strong>Select the Language</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
						40%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">The default language is set to English, but you can select another language if that is your preference.</h4>
					<p>&nbsp;</p>
					<p><img src="images/selectLanguage.png" alt="select language" class="img-responsive img-thumbnail"></p>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 9:<br/><small><strong>Select Level of Access</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
						50%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">There are three levels of security for "Access" to select from.</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Option 1:</td>
									<td>The highest level of security - it will only allow people with Adobe registered accounts to attend.</td>
								</tr>
								<tr>
									<td>Option 2:</td>
									<td>The default option is secure - only allowing registered accounts and accepted guests.</td>
								</tr>
								<tr>
									<td>Option 3:</td>
									<td>No privacy settings - anyone with the URL can enter the meeting.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 10:<br/><small><strong>Not Required</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
						50%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">For the purpose of this tutorial we will keep the default setting for audio options. Skip to the bottom and click "Next."</h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 11:<br/><small><strong>Add Attendees</strong></small></h2>
					<div class="alert alert-success" style="text-align: center;" role="alert">Now we are at the point where we can begin to invite attendees.</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						60%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Click on the user(s) you'd like to participate in the meeting and add each one individually by clicking their name and then the "Add" button.</h4>
					<p>&nbsp;</p>
					<p><img src="images/attendees.png" alt="add attendees list" class="img-responsive img-thumbnail"></p>
					<p>&nbsp;</p>

				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 12:<br/><small><strong>Set the Attendees' Role</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
						70%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Once you've added users, you need to set what we call their permissions. You select their name from the right side and then click "Permissions."<br/><br/>There are four different roles to choose from:</h4>

				<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td style="width: 90px;">Option 1:</td>
									<td>(Participant) This is the default permission - it allows people to simply attend the meeting.</td>
								</tr>
								<tr>
									<td>Option 2:</td>
									<td>(Presenter) This gives the user a higher level of functionality in the 	meeting. For example, the host can set the meeting allowing only presenters to talk.</td>
								</tr>
								<tr>
									<td>Option 3:</td>
									<td>(Host) This gives the user governing control of the meeting.</td>
								</tr>
								<tr>
									<td>Option 3:</td>
									<td>(Denied) This prohibits the user from actions such as participating in a poll, or speaking</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 13:<br/><small><strong>Review, then hit Next</strong></small></h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
						80%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">The participants and roles aren't finalized; they can be changed at any point before or during the meeting. Once you are satisfied with the set roles of your participants, click "Next."</h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #E5E5E5;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 14:<br/><small><strong>Select an Email Option, then hit Finish</strong></small></h2>
					<div class="alert alert-success" style="text-align: center;" role="alert">Now we are at the point where we can send out invitations.</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
						90%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">You can choose to send the email to all attendees or limit the email to a certain role such as Hosts, Presenters, or Participants. Once you press "Finish," your attendees will receive an email with the specifics of your meeting, such as when, where, and who will be presenting.</h4>
					<p>&nbsp;</p>
					<p><img src="images/email.png" alt="email screen" class="img-responsive img-thumbnail"></p>
					<p>&nbsp;</p>

				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row" style="background: #F1F1F1;">
				<div class="col-md-3">
					<h2 style="vertical-align: top;">Step 15:<br/><small><strong>You're done!</strong></small></h2>
					<div class="alert alert-success" style="text-align: center;" role="alert">Mark it on your calendar because this meeting is now scheduled!</div>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
						100%
  						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="opacity: 0.7;">Your attendees will RSVP to the email and you will be notified. At the time of the event you simply need to login to the Adobe Connect software, click on the "Meetings" tab, click on the name of your meeting, and finally click on "Enter Meeting."</h4>
				</div>
			</div>
		</div>		
		
		<div class="row" style="background: #333333; width: 100%;">
		<div class="container">
				<div class="col-md-9">
				<p style="color: #fff; height: 35px; vertical-align: middle !important; margin-top: 20px; opacity: 0.5;"><span class="glyphicon glyphicon-copyright-mark">&nbsp;</span>Adam Fendler 2015</p>
				</div>
				<div class="col-md-3 visible-md visible-lg">
					<p style="color: #fff; height: 35px; vertical-align: middle !important; margin-top: 20px; opacity: 0.8;"><a href="http://www.adobe.com/products/adobeconnect.html" target="_blank">Abobe Connect</a> | <a href="#">Back to Top</a></p>
				</div>
				</div>
			</div>
		</div>
		
	<!-- Script calls at the end for performance purposes -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	</body>
</html>