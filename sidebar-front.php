<?php

if(!is_active_sidebar("front-sidebar")){
    return;
}

?>
<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar("front-sidebar") ?>
</aside>