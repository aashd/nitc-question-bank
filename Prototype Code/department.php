<!DOCTYPE html>
<html>
        <head>
                <title>NITC QuestionBank</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <style>
                .scroll-top-wrapper {
                    position: fixed;
                    opacity: 0;
                    visibility: hidden;
                    overflow: hidden;
                    text-align: center;
                    z-index: 99999999;
                    background-color: #777777;
                    color: #eeeeee;
                    width: 50px;
                    height: 48px;
                    line-height: 48px;
                    right: 30px;
                    bottom: 30px;
                    padding-top: 2px;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    border-bottom-left-radius: 10px;
                    -webkit-transition: all 0.5s ease-in-out;
                    -moz-transition: all 0.5s ease-in-out;
                    -ms-transition: all 0.5s ease-in-out;
                    -o-transition: all 0.5s ease-in-out;
                    transition: all 0.5s ease-in-out;
                }
                .scroll-top-wrapper:hover {
                    background-color: #888888;
                }
                .scroll-top-wrapper.show {
                    visibility:visible;
                    cursor:pointer;
                    opacity: 1.0;
                }
                .scroll-top-wrapper i.fa {
                    line-height: inherit;
                }
                 
                </style>
                
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
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up  glyphicon glyphicon-arrow-up"></i>
            </span>
        </div>
                
        <div class = "container">
        <?php
            $con = mysqli_connect('localhost', 'b120850cs', '*****', 'db_b120850cs');
            $DP_ID=$_GET['DP_ID'];
            $query="SELECT DP_name FROM department WHERE DP_ID='$DP_ID'";
            $result = mysqli_query($con, $query) ;
            if (!$result) {
                echo 'ERROR: '.mysqli_error($con);
            }
            while ($list=mysqli_fetch_assoc($result)) {
            	echo'<h2>'.$list['DP_name'].'</h2>
                <div class="list-group">';
            }
            
            $i=1;
            while ($i<10) {
                $query="SELECT * FROM course WHERE DP_ID='$DP_ID'AND Sem='$i'";
                $result = mysqli_query($con, $query) ;
                if (!$result) {
                    echo 'ERROR: '.mysqli_error($con);
                }
		if($i==1){
			echo'<h4 class="list-group-heading">Semester 1/2</h4>';
		}
		else if($i==2){
			//continue;
		}
                else if ($i==9) {
                    echo'<h4 class="list-group-heading">Electives</h4>';
                }
                else {
                    echo'<h4 class="list-group-heading">Semester '.$i.'</h4>';
                }
                echo '<div class="list-group">';
                while ($list=mysqli_fetch_assoc($result)) {
                    echo'
                        
                        
                            <a href="course.php?C_ID='.$list['C_ID'].'&DP_ID='.$list['DP_ID'].'"  class="list-group-item">
                                    <div class="list-group-item-heading">'.$list['C_name'].'  '.$list['C_ID'].'</div></a>
                        
                    ';
                }
			 echo '</div>';
                $i=$i+1;
            }
		    mysqli_close($con);
                    
        ?>

                
                        
                </div>     
            
            
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script src = "js/bootstrap.js"></script>
                   
            
                <script>
                 
                $(function(){
                 
                    $(document).on( 'scroll', function(){
                     
                        if ($(window).scrollTop() > 100) {
                            $('.scroll-top-wrapper').addClass('show');
                        } 
                        else {
                            $('.scroll-top-wrapper').removeClass('show');
                        }
                    });
                });
                $(function(){
 
                    $(document).on( 'scroll', function(){
                 
                    if ($(window).scrollTop() > 100) {
                        $('.scroll-top-wrapper').addClass('show');
                    } 
                    else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                    });
                 
                    $('.scroll-top-wrapper').on('click', scrollToTop);
                });
                 
                function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                }
                </script>
                
        </body>
</html>
