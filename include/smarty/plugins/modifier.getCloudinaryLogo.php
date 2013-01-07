<?php
function smarty_modifier_getCloudinaryLogo($images,$isLittle = FALSE)
{
    $unserialize = unserialize($images);
    return $isLittle ? $unserialize['logo']['transformations_url_little'] : $unserialize['logo']['transformations_url'];
}
?>
