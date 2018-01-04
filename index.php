<html>
    <head>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.button').click(function() {
                var textboxvalue = $('input[name=txt]').val();
                textboxvalue += "-" + $('input[name=number]').val();
                textboxvalue += "-" + $('input[name=program]').val();
                var ajaxurl = 'ajax.php',
                data =  {'txt1': textboxvalue};
                    $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("action performed successfully");
                    });
                });

            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#remove").click(function() {
                var textboxvalue = $('input[name=txt]').val();
                textboxvalue += "-" + $('input[name=number]').val();
                textboxvalue += "-" + $('input[name=program]').val();
                var ajaxurl = 'ajax.php',
                data =  {'txt1': textboxvalue};
                    $.post(ajaxurl, data, function (response) {
                        // Response div goes here.
                        alert("action performed successfully");
                    });
                });

            });
        </script>
</head>
<body>
    <table style="border: 1px solid black; padding: 100px">
        <tbody>
                <?php
                  $rooms = file_get_contents("rooms.txt");
                  $dataSet = explode(",", $rooms);
                    foreach($dataSet as $data){
                        echo "<tr>
                                <td>" 
                                   . $data . 
                                "</td>";
                                if (!empty($data)){
                                echo "<td>
                                        <input type='submit' class='button' name='remove' value='remove' id='remove'/>
                                    </td>";
                                }
                             echo "</tr>";   
                  }
                ?>
        </tbody>
    </table>
    <form>
        <label for="txt"> Building </label>
        <input type="text" name="txt"/>
        <label for="txt"> Room Number </label>
        <input type="text" name="number"/>
        <label for="program"> Program </label>
        <input type="text" name="program"/>
        <input type="submit" class="button" name="insert" value="insert" />
        <input type="submit" class="button" name="select" value="select" />
    </form>
    </body>
</html>