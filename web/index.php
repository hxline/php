<?php
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomInt($length = 2) {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    for ($i=0; $i < 10; $i++) {
        $a[$i]['string'] = generateRandomString();
        $a[$i]['int'] = generateRandomInt();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <table border="1">
        <tr>
            <th width="50px">DATA</th>
            <th width="100px">Set Session</th>
        </tr>
        <tr>
            <td width="50px">Handoyo</td>
            <td width="60px">
                <button onclick="setSession('<?php echo htmlentities(serialize($a))?>');">Action</button>
            </td>
        </tr>
    </table>
</body>
</html>

<script type="text/javascript">
    function setSession(data) {
      $.ajax({
           type: "POST",
           url: 'session.php',
           data: {action:data},
           success:function() {
             window.location.href =  "index2.php";
           },
           error:function() {
            alert("ERROR TEST");
           }
      });
 }
</script>