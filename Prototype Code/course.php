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
                                                    <li><a href = "#register" data-toggle="modal" style="margin:  10px 10px 10px 0px;">About Us</a></li>
                                           
                                                    <li ><a href = "#login" data-toggle="modal"><button type="button" class="btn btn-danger">Login</button></a></li>
                                                    <!--<li><a href = "#register" data-toggle="modal">Register</a></li>-->
                                           
                                            </ul>
                                   
                                    </div>
                                   
                            </div>
                    </div>
            <div class = "container">  
            <?php 
                $DP_ID= $_GET['DP_ID'];
                $C_ID= $_GET['C_ID'];
                //echo $DP_ID.$C_ID;
                $con = mysqli_connect('localhost', 'root', '*****', 'ACETHEXAM');
                $query="SELECT * FROM course WHERE C_ID='$C_ID' AND DP_ID='$DP_ID'";
                $result = mysqli_query($con, $query) ;
                if (!$result) {
                    echo 'ERROR: '.mysqli_error($con);
                }
                while ($list=mysqli_fetch_assoc($result)) {
                    echo'
                    <h2>'.$list['C_name'].'</h2> 
                    ';
                }
                $query="SELECT * FROM question_paper WHERE DP_ID='$DP_ID' AND C_ID='$C_ID' ORDER BY Acc_year, MorW, exam_type ";
                $result = mysqli_query($con, $query) ;
                if (!$result) {
                    echo 'ERROR: '.mysqli_error($con);
                }
                echo'<ul class="list-group">';
                $i="asdf";
                echo '<li class="list-group-item">';
                echo '<div class = "row">';
                while ($list=mysqli_fetch_assoc($result)) {
                 
                 if ($i!=$list['Acc_year']) {
                    $i=$list['Acc_year'];
                        echo "</div>";
                        echo "</li";
                        echo '<li class="list-group-item">';
                        echo '<h4>'.$list['Acc_year'].'</h4>';
                        echo '<div class = "row">';
                    } 
                    if ($list['exam_type']=="T3") {
                          if ($list['MorW']=="M") {
                              echo'
                                <div class = "col-md-3">
                                            <a href="./question_paper.php?Q_ID='.$list['Q_ID'].'" class="list-group-item">
                                                <h5 class="list-group-item-heading">Monsoon/EndSem</h5>
                                                
                                            </a>
                                </div>
                             ';
                          }
                          else{
                                echo'
                                <div class = "col-md-3">
                                            <a href="./question_paper.php?Q_ID='.$list['Q_ID'].'" class="list-group-item">
                                                <h5 class="list-group-item-heading">Winter/EndSem</h5>
                                                
                                            </a>
                                            
                                            
                                </div>
                             ';
                          }
                    }
                    else{
                        if ($list['MorW']=="M") {
                              echo'
                                <div class = "col-md-3">
                                            <a href="./question_paper.php?Q_ID='.$list['Q_ID'].'" class="list-group-item">
                                                <h5 class="list-group-item-heading">Monsoon/'.$list['exam_type'].'</h5>
                                                
                                            </a>
                                            
                                            
                                </div>
                             ';
                          }
                          else{
                                echo'
                                <div class = "col-md-3">
                                            <a href="./question_paper.php?Q_ID='.$list['Q_ID'].'" class="list-group-item">
                                                <h5 class="list-group-item-heading">Winter/'.$list['exam_type'].'</h5>
                                                
                                            </a>
                                            
                                            
                                </div>
                             ';
                          }

                    }  
                 
                }
                echo "</li";
                echo'</ul>';
                    
                       
                       
                       
                    
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
                               <form enctype="multipart/form-data"  id="Login_form" action="./admin.php" method="POST" class="form-horizontal" >
                                    <div class = "modal-header">
                                        <h4>Login</h4>
                                    </div>
                                    <div class = "modal-body">
                                   
                                        <div class = "form-group">
                                           
                                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                            <div class = "col-lg-10">
                                               
                                                <input type = "text" name ="userid" class = "form-control" id = "contact-email" placeholder = "you@example.com">
                                               
                                            </div>
                                           
                                        </div>
                                        
					
                                        <div class = "form-group">
                                           
                                            <label for = "contact-name" class = "col-lg-2 control-label">Password:</label>
                                            <div class = "col-lg-10">
                                               
                                                <input type = "password" name="password" class = "form-control" id = "contact-name" placeholder = "">
                                               
                                            </div>
                                           
                                        </div>

					
				
                                       
					                                  
                                    </div>
                                    <div class = "modal-footer">
                                	<a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                        <button class = "btn btn-primary" type = "submit" name="submit" value="submit">Login</button>
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
                                        <h4>About Us</h4>
                                    </div>
                                    <div class = "modal-body">
                                   <p>Developed By Aashish Duddukuri and Arpit Augustine Batch of 2012 BTech CSED</p>
                                   <p>For Further Details and suggestions contact Student Affairs Council</p>
                                   <ul>
                                   	<li>Vigil Vinayan T P</li>
                                   </ul>
                                        
                                       
					
                                    <div class = "modal-footer">
                                <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script src = "js/bootstrap.js"></script>
                   
            </body>
    </html>
