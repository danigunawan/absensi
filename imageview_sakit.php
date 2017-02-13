<?php

    mysql_connect("localhost", "absensin_admin", "absensinet");
	mysql_select_db("absensin_demo");
    if(isset($_GET['image_id'])) {
        $sql = "SELECT * FROM sakit WHERE id=" . $_GET['image_id'];
		$result = mysql_query("$sql")
        or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysql_fetch_array($result);
		//header("Content-type: " . $row["imageType"]);
        echo $row["foto_sakit"];
	}
	mysql_close($conn);
?>