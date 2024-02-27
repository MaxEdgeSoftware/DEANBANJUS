<div class="col-lg-4 col-sx-12">
    <div class="single-sidebar-widget">
        <div class="special-links">
            <ul>
                <?php
                foreach ($services as $serv) { ?>
                    <li>
                        <a class="<?php echo $serv['page'] == $slug ? 'active' : '' ?>" href="/services/<?php echo $serv['page']; ?>.php"><?php echo $serv['name']; ?></a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</div>