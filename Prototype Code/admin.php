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



        
                
                <div class = "container">

                </div>
                
        <div class = "container">
	<?php
        session_start();
			
			if(isset($_POST['submit'])){
				$userid=$_POST['userid'];
				$pass=$_POST['password'];
				$con = mysqli_connect('localhost', 'b120850cs', $pass, 'db_b120850cs');
			
				if(!$con||$userid!="admin"){
					echo'
					</br>
					<form id="add_form" action="./admin.php" method="POST" class="form-horizontal">
					<div class = "form-group">
                           
                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "text" name="userid" class = "form-control" id = "contact-email" placeholder = "UserID">
                               
                            </div>
                           
                        </div>
                        
	
                        <div class = "form-group">
                           
                            <label for = "contact-name" class = "col-lg-2 control-label">Password:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "password" name= "password" class = "form-control" id = "contact-name" placeholder = "">
                               
                            </div>
					</div>
					<div class="alert alert-danger col-xs-offset-2 col-xs-10" role="alert">
  						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  						<span class="sr-only">Error:</span>
 						Give Valid details
	    				</div>
					<div class="form-group">
						<div class="col-xs-offset-2 col-xs-10">
                				<input type="submit"  name="submit" class="btn btn-default" value="Login"></input>
						</div>
					</div>  
			                       
			                </form>
					
					
					';
					
				}
					
				else{
					
                    $_SESSION['userid']=$userid;
					$_SESSION['pass']=$pass;	
					echo'
                        </br>
						<div class = "jumbotron">
                                   			 <center><h1>Welcome Admin </h1>
                                    
                            			</div>
						
		    
                
                
                				<div class="list-group"> 
                
                    					<a href="./add_course_form.php" class="list-group-item">
                        					<h4 class="list-group-item-heading">Add Course</h4>
                           					 <p class="list-group-item-text">'.$list['Descr'].'</p>
                    					</a>
							<a href="./add_department_form.php" class="list-group-item">
                        					<h4 class="list-group-item-heading">Add Department</h4>
                           					 <p class="list-group-item-text">'.$list['Descr'].'</p>
                    					</a>
							<a href="./upload_ques_paper.php" class="list-group-item">
                        					<h4 class="list-group-item-heading">Upload Question Paper</h4>
                           					 <p class="list-group-item-text">'.$list['Descr'].'</p>
                    					</a>
                
                				</div>
					
						
					';
					
				}
			}
			else{
                if (isset($_SESSION['pass'])) {
                    $user=$_SESSION['userid'];
                    $pass=$_SESSION['pass'];
                    $con = mysqli_connect('localhost', 'root', $pass, 'ACETHEXAM');
                    if(!$con||$user!="admin"){
                            
                        echo'
                        </br>
                        <form id="add_form" action="./admin.php" method="POST" class="form-horizontal">
                        <div class = "form-group">
                                               
                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "text" name="userid" class = "form-control" id = "contact-email" placeholder = "UserID">
                               
                            </div>
                           
                        </div>
                        

                        <div class = "form-group">
                           
                            <label for = "contact-name" class = "col-lg-2 control-label">Passwordasfasd:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "password" name= "password" class = "form-control" id = "contact-name" placeholder = "">
                               
                            </div>
                        </div>
                        <div class="alert alert-danger col-xs-offset-2 col-xs-10" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Give Valid details
                            </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                    <input type="submit"  name="submit" class="btn btn-default" value="Login"></input>
                            </div>
                        </div>  
                                       
                                </form>
                        
                        
                        ';
                    }
                    else {
                        echo'
                            </br>
                            <div class = "jumbotron">
                                             <center><h1>Welcome Admin</h1>
                                    
                             </div>
                        
            
                
                
                            <div class="list-group"> 
                
                                        <a href="./add_course_form.php" class="list-group-item">
                                            <h4 class="list-group-item-heading">Add Course</h4>
                                             <p class="list-group-item-text">'.$list['Descr'].'</p>
                                        </a>
                            <a href="./add_department_form.php" class="list-group-item">
                                            <h4 class="list-group-item-heading">Add Department</h4>
                                             <p class="list-group-item-text">'.$list['Descr'].'</p>
                                        </a>
                            <a href="./upload_ques_paper.php" class="list-group-item">
                                            <h4 class="list-group-item-heading">Upload Question Paper</h4>
                                             <p class="list-group-item-text">'.$list['Descr'].'</p>
                                        </a>
                
                                </div>
                    
                        
                        ';
                    }
                    
                }
                else{
                    echo'
                        
                        </br>
                        <form id="add_form" action="./admin.php" method="post" class="form-horizontal">
                        <div class = "form-group">
                                               
                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "text" name="userid" class = "form-control" id = "contact-email" placeholder = "UserID">
                               
                            </div>
                           
                        </div>
                        

                        <div class = "form-group">
                           
                            <label for = "contact-name" class = "col-lg-2 control-label">Password:</label>
                            <div class = "col-lg-10">
                               
                                <input type = "password" name="password" class = "form-control" id = "contact-name" placeholder = "">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                    <input type="submit" name="submit"  class="btn btn-default" value="Login"></input>
                            </div>
                        </div> 
              
                                       
                                </form>
                        
                        
                        ';

                }
			}
	?>
	</div>
                   
                    <div class = "navbar navbar-default navbar-fixed-bottom">
                   
                            <div class = "container">
                                    <p class = "navbar-text pull-left">All rights Reserved</p>
                                    <a href = "http://nitc.ac.in" class = "navbar-btn btn-danger btn pull-right">Visit NITC Home</a>
                            </div>
                   
                    </div>
                   
                    
                   
                    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script src = "js/bootstrap.js"></script>
                   
            </body>
    </html>
