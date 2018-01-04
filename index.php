<html>
    <head>  
        <title>BCIT StudyBuddy</title>  
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        
        
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <!-- Add-a-room code -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#makeRoom').click(function() {
                var textboxvalue = $('input[name=building]').val();
                textboxvalue += "-" + $('input[name=number]').val();
                textboxvalue += "-" + $('input[name=program]').val();
                textboxvalue += "-" + $('input[name=capacity]').val();
                var ajaxurl = 'ajax.php',
                data =  {'txt1': textboxvalue};
                    $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("action performed successfully");
                    });
                });

            });
        </script>
        <!-- Remove-a-room code  -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".remove").click(function() {
                    var removeNumber = $(this).val();
                    removeNumber = removeNumber.match(/\d+$/)[0]
                    var ajaxurl = 'removeAjax.php',
                    data =  {'rem': removeNumber};
                        $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("remove action performed successfully");
                    });
                });

            });
        </script>
    </head>  
    <body>
        <header class="navbar navbar-fixed-top">
            <img src="Images/BCIT.png" alt="BCIT"/>
        </header>
        <div class="container">
            <h1>Welcome to BCIT StudyBuddy!</h1>
            <form method="post">
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Building:</span>
	               <input type="text" name="building" class="form-control" placeholder="SW1" required>
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Room #:</span>
	               <input type="text" name="number" class="form-control" placeholder="123" required>
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Program:</span>
	               <input type="text" name="program" class="form-control" placeholder="CST" required>
                </div>
                <div class="input-group input-group-sm col-xs-12 col-md-3">
	               <span class="input-group-addon">Capacity:</span>
	               <input type="text" name="capacity" class="form-control" placeholder="25" required>
                </div><br>
                <input type="submit" name="makeRoom" value="Create" class="btn btn-success" id="makeRoom"><br>
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
                        <th>
                            Remove
                        </th>
                    </tr>
                    <?php
                        $rooms = file_get_contents("rooms.txt");
                        $dataSet = explode(",", $rooms);
                        $count = 0;
                        foreach($dataSet as $data){
                            $information = explode("-", $data);
                            echo "<tr>
                                    <td>" 
                                        . $information[0] . 
                                    "</td>
                                    <td>"
                                        . $information[1] .
                                    "</td>
                                    <td>"
                                        . $information[2] .
                                    "</td>
                                    <td>"
                                        . $information[3] .
                                    "</td>
                                    <td>";
                                if (!empty($data)){
                                echo "
                                        <form>
                                        <input type='submit' class='remove' name='remove$count' value='remove $count'/>
                                        </form>
                                    ";
                                }
                             echo "</td></tr>"; 
                        $count++;
                  }
                ?>
                </table>
         </div>
    </div>
</body>
</html>