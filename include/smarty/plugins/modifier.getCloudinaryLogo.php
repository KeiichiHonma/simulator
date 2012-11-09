<?php
function smarty_modifier_getCloudinaryLogo($images)
{
    $unserialize = unserialize($images);
    return $unserialize['logo']['transformations_url'];
}
?>
