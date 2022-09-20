<?php
require 'sendmail/mail.php';

$sendto = $_POST['_email'];
$description = $_POST['_text'];

send_mail($sendto, $description);

?>
<script>
    history.back();
</script>