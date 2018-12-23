<!DOCTYPE HTML>
<html>
<head>
<style>

</style>
</head>
<body >
<div ng-app="crpt">
            <form class="form-horizontal" method="POST" ng-controller="dbcontroller" name="aform" novalidate>
                    <legend>Contact Me<i class="fa fa-pencil pull-right"></i></legend>
					<div  class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                         	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Don't hesitate to contact me</h3>
                        		</div>
								<div class="description">
	                            	<h4 class="bg-secondary">
									We would like to hear your valuable suggestions in form of Feedback.</h4>
								</div>
                        		<br><br>
                            </div>
                            <div class="form-bottom">
							    <div class="form-group">
								YOUR EMAIL-ID: <input type="email" name="email" ng-model="email" placeholder="abc@example.com" class="form-username form-control" id="form-username" autocomplete="email"  required>
								<span style="color:white" ng-show="aform.email.$dirty && aform.email.$invalid">
								<span ng-show="aform.email.$error.required" >Email is required.</span>
								<span ng-show="aform.email.$error.email">Invalid email address.</span>
								</span>
								</div>
								<br>
								<div class="form-group">
								SUBJECT<input type="text" name="subject" ng-model="subject" placeholder=" Enter the subject..." class="form-username form-control" id="form-username" required>
								<span style="color:white" ng-show="aform.subject.$dirty && aform.subject.$invalid">
								<span ng-show="aform.subject.$error.required">Subject is required.</span>
								</span>
								</div>
								<br>
								<div class="form-group">
								MESSAGE<textarea name="message" ng-model="message" rows="5" placeholder=" Enter the message..." class="form-username form-control" id="form-username" required></textarea>
								<span style="color:white" ng-show="aform.message.$dirty && aform.message.$invalid">
								<span ng-show="aform.message.$error.required">Message is required.</span>
								</span>
								</div>
								<br>
								<div class="form-group">
									<button type="reset" class="btn btn-warning">
										Reset</button> &nbsp;&nbsp;
											<button type="Submit" class="btn btn-primary" ng-click="sendEmail()" value="Submit" ng-disabled="aform.subject.$dirty && aform.subject.$invalid || aform.message.$dirty && aform.message.$invalid ||  
											aform.email.$dirty && aform.email.$invalid">
										Send Email</button>
								</div>
							</div>
					</div>
			</form>
</div>			
</body>
</html>
	  