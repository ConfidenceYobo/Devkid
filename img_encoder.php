<!DOCTYPE html>
<html>
<head>
    <title>Data Image maker</title>
</head>
    <body>
        <form method="post">
        <input type="text" name="trmk" id="trmk"/><br><input type="submit" name="go_trmk" id="go_trmk" value="Submit"/>
        </form>
        <div><strong>Output:</strong>
<?php 
 if (isset($_POST['go_trmk'])) {
    $trmk = $_POST['trmk'];  
    
    $path = $trmk;
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    echo $base64;
  
}
  
?>
        </div>
    </body>
</html>
