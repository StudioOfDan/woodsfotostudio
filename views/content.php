
<div class="container">
    <div class="row">
    <div class="col-xs-12">
<?php

while($data = $info->fetch_assoc()){
    echo "<div class='col-xs-6 info'>";
    echo "<h3>" .$data['Title']. "</h3>";
    echo "<br>";
    echo "<p class='text-left'>" .$data['info']. "</p>";
    echo "</div>";

}
?>
    </div>
    </div>
</div>
