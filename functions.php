
<?php

function filter_request($requestname){


    return htmlspecialchars(strip_tags($_POST[$requestname]));
}
?>