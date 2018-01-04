<html>
    <head>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#select').click(function() {
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
    <table style="border: 1px solid black; padding: 100px">
        <tbody>
                <?php
                  $rooms = file_get_contents("rooms.txt");
                  $dataSet = explode(",", $rooms);
                  $count = 0;
                    foreach($dataSet as $data){
                        echo "<tr>
                                <td>" 
                                   . $data . 
                                "</td>";
                                if (!empty($data)){
                                echo "<td>
                                        <form>
                                        <input type='submit' class='remove' name='remove$count' value='remove $count'/>
                                        </form>
                                    </td>";
                                }
                             echo "</tr>"; 
                        $count++;
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
        <input type="submit" class="button" name="select" value="select" id="select" />
    </form>
    </body>
</html>