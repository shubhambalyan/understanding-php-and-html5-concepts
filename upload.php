<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
	<title>Show Images</title>
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    background: #acacac;
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
    display: block;
    margin: 20px auto 10px;
    max-width: 900px;
    outline: none;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
 
<?php
$word=$_POST["key"];
if($word=="happy" || $word=="sad")
        echo "Success";
    else
        header("Location: login.php?q=1");
$folder = $word.'/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
echo '<table>';
for ($i = 0; $i < $count; $i++) {
    echo '<tr><td>';
    echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" width="100" height="100"/></a>';
    //echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    echo '<a href="'.rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$files[$i].'" download>';
//   echo '<br/><br/>Image address: http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$files[$i];
   //echo '<br/><br/>Image address: <b>http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$files[$i].'</b>';
    echo '<input type="submit" value="Download">';
   echo '</a>';
        echo '</td></tr>';
}
echo '</table>';
?>
</body>
</html>