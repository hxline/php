<?php
    $a[0]['nama'] = "Handoyo";
    $a[0]['kelas'] = "VII B";
    $a[1]['nama'] = "Hxline";
    $a[1]['kelas'] = "VIII B";
    
    $b[0]['nama'] = "Bag";
    $b[0]['kelas'] = "VII B";
    $b[1]['nama'] = "Asara";
    $b[1]['kelas'] = "VIII B";
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
            <td width="10px">No</td>
            <td width="30px">Nama</td>
            <td width="40px">OPTION</td>
        </tr>
        <tr>
            <td width="10px">1</td>
            <td width="30px">Handoyo</td>
            <td width="40px">
                <button onclick="setSession('<?php echo htmlentities(serialize($a))?>');">Action</button>
            </td>
        </tr>
        <tr>
            <td width="10px">2</td>
            <td width="30px">Xaaw</td>
            <td width="40px">
                <button onclick="setSession('<?php echo htmlentities(serialize($b))?>');">Action</button>
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