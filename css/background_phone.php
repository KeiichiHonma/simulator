<?php
header('content-type: text/css');
include('fw/css_path.php');
?>
.phone-info {
    background-image: url('<?php echo $ssl_path; ?>info.png');
}
.phone-success {
    background-image:url('<?php echo $ssl_path; ?>success.png');
}
.phone-warning {
    background-image: url('<?php echo $ssl_path; ?>warning.png');
}
.phone-error {
    background-image: url('<?php echo $ssl_path; ?>error.png');
}