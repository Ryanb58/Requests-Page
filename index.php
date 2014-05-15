<?php
/*
#Forces page to be loaded with HTTPS:

if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
*/

//turn on reporting for all errors and display
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>

<!-- Headers -->
<p>HEADERS:</p>
<pre>
<?php
var_dump(headers_list());
?>
</pre>

<!-- Posts -->
<p>POSTS:</p>
<pre>
<?php
var_dump($_POST);
?>
</pre>

<!-- Gets -->
<p>GETS:</p>
<pre>
<?php
var_dump($_GET);
?>
</pre>
