<?php 

?>

<!-- index.html, log in page, register.  -->

<html>
    <head>  
        <title>BCIT StudyBuddy</title>  
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>
        <header class="navbar navbar-fixed-top">
            <img src="Images/BCIT.png" alt="BCIT"/>
        </header>
        <div class="container">
            <h1>Welcome to BCIT StudyBuddy!</h1>
            <form action="rooms.txt" method="post">
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Building:</span>
	               <input type="text" name="name" class="form-control" placeholder="SW-1" >
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Room #:</span>
	               <input type="text" name="name" class="form-control" placeholder="123" >
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Program:</span>
	               <input type="text" name="name" class="form-control" placeholder="CST" >
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Capacity:</span>
	               <input type="text" name="name" class="form-control" placeholder="25" >
                </div><br>
                <input type="submit" name="submit" value="Create" class="btn btn-success"><br>
            </form>
            <div class="img col-xs-6 col-md-3">
                <a href="https://www.bcit.ca/files/maps/pdf/bcit_wayfinding.pdf" class="thumbnail">
                    <img src="Images/map.png" alt="map">
                </a>
            </div>
            <div class="table">  
                <table class ="table table-striped table-hover" border="1">
                    <tr>
                        <th>
                            Building
                        </th>
                        <th>
                            Room #
                        </th>
                        <th>
                            Program
                        </th>
                        <th>
                            Capacity
                        </th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                            <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </table>
         </div>
    </div>
</body>
</html>