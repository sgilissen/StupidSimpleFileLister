<html>
<?php 
$basedirname = basename(__DIR__);
?>
<head>
<title><?php echo "[$basedirname] directory listing"; ?></title>
<style>
body {
  background-color: #252525;
  color: #fff;
  font-family: "Lucida Console", "Courier New", monospace;
  
}

a {
  color: #fff;
  text-decoration: underline;
}


table.steelBlueCols {
  background-color: #555555;
  width: 50%;
  text-align: left;
  border-collapse: collapse;
}
table.steelBlueCols td, table.steelBlueCols th {
  border: 1px solid #4C4545;
  padding: 5px 10px;
}
table.steelBlueCols tbody td {
  font-size: 12px;
  font-weight: bold;
  color: #FFFFFF;
}
table.steelBlueCols thead {
  background: #398AA4;
  color: #000;
  background: -moz-linear-gradient(top, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
  background: -webkit-linear-gradient(top, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
  background: linear-gradient(to bottom, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
}
table.steelBlueCols thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000;
  text-align: left;
}
table.steelBlueCols tfoot {
  background: #398AA4;
  color: #000;
  background: -moz-linear-gradient(top, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
  background: -webkit-linear-gradient(top, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
  background: linear-gradient(to bottom, #6aa7bb 0%, #4c95ad 66%, #398AA4 100%);
}
table.steelBlueCols tfoot td {
  font-size: 13px;
  text-align: right;
}
table.steelBlueCols tfoot .links {
  text-align: right;
}
table.steelBlueCols tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #398AA4;
  padding: 2px 8px;
  border-radius: 5px;
}
</style>

<body>

<center>
<h2>Stupid Simple File Lister</h2>
<p><?php echo "Directory listing of /$basedirname/"; ?></p>
<table class="steelBlueCols">
<thead>
<tr>
<th>Filename</th>
<th>Size (bytes)</th>
</tr>
</thead>
<tbody>

<?php
$path = ".";
$dh = opendir($path);
$i=0;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
    	$filesize = filesize($file);
        echo "<tr><td><a href='$path/$file'>$file</a></td><td>$filesize</td></tr>";
        $i++;
    }
}
closedir($dh);
echo "</tbody>";
echo "<tfoot><tr><td></td><td>$i files found</td></tr></tfoot>";
?> 

</table>
</center>

</body>
</html>
