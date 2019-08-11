
<!DOCTYPE html>
<html>
            <head>
                    <title>NITC QuestionBank</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
            </head>
            <body>
                   
                    <div class = "navbar navbar-inverse navbar-static-top">
                            <div class = "container">
                                    <div class="navbar-brand">
                                        <a href="./index.php" ><img alt="Brand" src="./images/nitc_logo_without_background1.png" width="30"><a>
                                    </div>
                                   
                                    <a href = "./index.php" class = "navbar-brand" style="margin:  10px 10px 10px 0px;" >NITC QuestionBank</a>
                                    
                                   
                                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                    </button>
                                
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                                
                                        <ul class = "nav navbar-nav navbar-right">
                                        
                                                
                        
                                        
                                        </ul>
                                
                                </div>
                                
                        </div>
                </div>



        <div class = "navbar navbar-inverse navbar-static-top" id="sec-navbar">
                        <div class = "container">
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                                
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                                
                                        <ul class = "nav navbar-nav navbar-left">
                                        
                                                
                                            <li  class="active" ><a href = "#" data-toggle="modal">Upload Question Paper</a></li>
                                            <li><a href = "./add_course_form.php" data-toggle="modal">Add Course</a></li>
                                            <li ><a href = "./add_department_form.php" data-toggle="modal">Add Department</a></li>
                        
                                        
                                        </ul>
                    <ul class = "nav navbar-nav navbar-right">
                        <li class = "dropdown">
                                                    
                                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Hi,Admin<b class = "caret"></b></a>
                                                    <ul class = "dropdown-menu">
                                                            <li><a href = "./logout.php">Logout</a></li>
                                                    </ul>
                                            
                                                </li>
                                        
                                        </ul>
                                
                                </div>
                                
                        </div>
                </div>
                
                <div class = "container">

                </div>
                
        <div class = "container">
	</br>
			<?php
				session_start();
				if (isset($_SESSION['pass'])) {
				echo'
			            <form enctype="multipart/form-data"  id="Upload_form" action="./upload.php" method="POST" class="form-horizontal" >
			                <div class="form-group">
			                    <label for="Eg CS2002" class="control-label col-xs-2">Course ID </label>
						<div class="col-xs-10">
			                    		<input type="text" class="form-control" id="C_ID" name="C_ID" placeholder="Eg CS2002">
						</div>
			                </div>
			                <div class="form-group">
			                    <label for="exampleInputPassword1" class="control-label col-xs-2">Department Id</label>
						<div class="col-xs-10">
			                    		<input type="text" class="form-control" id="DP_ID" name="DP_ID" placeholder="CS/CE/CH..">
						</div>
			                </div>
			                <div class="form-group">
			                    <label for="exampleInputPassword1" class="control-label col-xs-2">Academic Year</label>
						<div class="col-xs-10">
			                    		<input type="text" class="form-control" id="Acc_year" name="Acc_year" placeholder="2012-2013">
						</div>
			                </div>
					<div class="form-group ">
						<div class="col-xs-offset-2 col-xs-10">
			 				<div class="radio-inline" >
					  			<label>
					    				<input type="radio" name="Monsoon/Winter" id="Monsoon" value="M" checked>
					    				Monsoon
					  			</label>
							</div>
				
							<div class="radio-inline">
					  			<label>
					    				<input type="radio" name="Monsoon/Winter" id="Winter" value="W" checked>
					    				Winter
					  			</label>
							</div>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-xs-offset-2 col-xs-10">
							<div class="radio-inline">
					  			<label>
					    				<input type="radio" name="Test_type" id="T1" value="T1" checked>
					    				T1
					  			</label>
							</div>
							<div class="radio-inline">
					  			<label>
					    				<input type="radio" name="Test_type" id="T2" value="T2" checked>
					    				T2
					  			</label>
							</div>
							<div class="radio-inline">
					  			<label>
					    				<input type="radio" name="Test_type" id="T3" value="T3" checked>
					    				End Semester
					  			</label>
						</div>
					</div>
			                <div class="form-group">
			                    <label for="exampleInputFile" class="control-label col-xs-2">Browse Question paper</label>
						<div class="col-xs-10">
			                    		<input type="file" id="browse_qpaper" name="ques_paper">
						</div>
						
			                </div>
			 		<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10">
			                	<input type="submit" class="btn btn-default" value="Upload Question paper"></input>
						</div>
					</div>                
			            </form>';
				    
					$i=$_GET['i'];
					if($i==1){
				    	echo'
						<div class="alert alert-danger col-xs-offset-2 col-xs-10" role="alert">
				  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  			<span class="sr-only">Error:</span>
				 		 	Error: Please give correct input
					    	</div>';
					}
					else if($i==2){
					echo'
				    		<div class="alert alert-success col-xs-offset-2 col-xs-10" role="alert">
			  				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			  				<span class="sr-only">Error:</span>
			 				Question paper succesfully added
				    		</div	>';
					}
				}
				else{
					echo'
					<div class="alert alert-danger " role="alert">
			  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  			<span class="sr-only">Error:</span>
			 		 	Error: YOU should\'t be here...YOU ARE BEING WATCHED
				    	</div>';
				}
	    ?>
            
        </div>
                
                <div class = "navbar navbar-default navbar-fixed-bottom">
                
                        <div class = "container">
                                <p class = "navbar-text pull-left">Maintained By Students Affairs Council</p>
                                <a href = "http://nitc.ac.in" class = "navbar-btn btn-danger btn pull-right">Visit NITC Home</a>
                        </div>
                
                </div>
                
                <div class = "modal fade" id = "login" role = "dialog">
                    <div class = "modal-dialog">
                        <div class = "modal-content">
                            <form class = "form-horizontal">
                                <div class = "modal-header">
                                    <h4>Login</h4>
                                </div>
                                <div class = "modal-body">
                                
                                    <div class = "form-group">
                                        
                                        <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "email" class = "form-control" id = "contact-email" placeholder = "you@example.com">
                                            
                                        </div>
                                        
                                    </div>
                                    
                
                                    <div class = "form-group">
                                        
                                        <label for = "contact-name" class = "col-lg-2 control-label">Password:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "password" class = "form-control" id = "contact-name" placeholder = "">
                                            
                                        </div>
                                        
                                    </div>
                                    
                                                    
                                </div>
                                <div class = "modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                    <button class = "btn btn-primary" type = "submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




        <div class = "modal fade" id = "register" role = "dialog">
                    <div class = "modal-dialog">
                        <div class = "modal-content">
                            <form class = "form-horizontal">
                                <div class = "modal-header">
                                    <h4>New Registration</h4>
                                </div>
                                <div class = "modal-body">
                                
                                    <div class = "form-group">
                                        
                                        <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class = "form-group">
                                        
                                        <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "email" class = "form-control" id = "contact-email" placeholder = "abcd@nitc.ac.in">
                                            
                                        </div>
                                        
                                    </div>
                                    
                <div class = "form-group">
                                        
                                        <label for = "register-password" class = "col-lg-2 control-label">Password:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "password" class = "form-control" id = "register-password" placeholder = "">
                                            
                                        </div>
                                        
                                    </div>
                                
                
                <div class = "form-group">
                                        
                                        <label for = "sec_register-password" class = "col-lg-2 control-label">Retype Password:</label>
                                        <div class = "col-lg-10">
                                            
                                            <input type = "password" class = "form-control" id = "sec_register-password" placeholder = "">
                                            
                                        </div>
                                        
                                    </div>


                                </div>
                                <div class = "modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                    <button class = "btn btn-primary" type = "submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>
                
        </body>
</html>
