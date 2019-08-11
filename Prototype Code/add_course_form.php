
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
                                        
                                                
                                            <li  ><a href = "./upload_ques_paper.php" data-toggle="modal">Upload Question Paper</a></li>
                                            <li class="active"><a href = "#" data-toggle="modal">Add Course</a></li>
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
                <form id="add_form" action="./add_course.php" method="post" class="form-horizontal">
                <div class="form-group">
                        <label for="exampleInputPassword1" class="control-label col-xs-2">Course Name</label>
                <div class="col-xs-10">
                            <input type="text" class="form-control " id="C_name" placeholder="Operating Systems">
                </div>
                    </div>
                    <div class="form-group">
                        <label for="Eg CS2002" class="control-label col-xs-2">Course ID </label>
                <div class="col-xs-10">
                            <input type="text" class="form-control" id="C_ID" placeholder="Eg CS2002">
                </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="control-label col-xs-2">Department Id</label>
                <div class="col-xs-10">
                        <input type="text" class="form-control" id="DP_ID" placeholder="CS/CE/CH..">
                </div>
                    </div>
            <div class="form-group">
            <label for="exampleInputPassword1" class="control-label col-xs-2">Semester</label>
            <div class="col-xs-10">
                <select class="form-control" name="Semester">
                    <option value="1">S1</option>
                    <option value="2">S2</option>
                    <option value="3">S3</option>
                    <option value="4">S4</option>
                    <option value="5">S5</option>
                    <option value="6">S6</option>
                    <option value="7">S7</option>
                    <option value="8">S8</option>
                    <option value="9">Elective</option>
                    
                </select>
            </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="control-label col-xs-2">Description</label>
                    <div class="col-xs-10">
                                <textarea class="form-control" rows="7" name="Descr" ></textarea>
                    </div>
                <br>
            </div>
        
                    <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-default">Add Course</button>
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
                    Course succesfully added
                    </div   >';
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
                                <p class = "navbar-text pull-left">All rights Reserved</p>
                                <a href = "http://nitc.ac.in" class = "navbar-btn btn-danger btn pull-right">Visit NITC Home</a>
                        </div>
                
                </div>
                
                
                
                <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>
                
        </body>
</html>
