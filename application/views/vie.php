<ul class="slimmenu">
    <?php foreach($menus as $menu): ?>

    <li>
        <a href="#"><?php echo $menu -> Menu_Name;?></a>
        <ul>
        <?php foreach($submenus as $submenu): ?>
            <li>
                <a href="#"><?php echo $submenu -> Sub_Menu_Name;?></a>


            </li>

        <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>

</ul>