<?php
session_start();

session_destroy();
?>
<script type="text/javascript">
    localStorage.clear();
    location.replace("login.html");
</script>
