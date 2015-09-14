<div class="banner">
        <?php
        foreach ($nodesList as $n) {
            if(isset($n['LinkedAssets']['FeaturedImage'])) {
                echo $this->Html->link(
                    $n['Node']['title'] . " " .
                    $this->Html->image($n['LinkedAssets']['FeaturedImage']['path'], array('alt' => $n['Node']['title'])),
                    array(
                        'plugin' => $options['plugin'],
                        'controller' => $options['controller'],
                        'action' => $options['action'],
                        'type' => $n['Node']['type'],
                        'slug' => $n['Node']['slug'],
                    ),
                    array(
                        'escape' => false
                    )
                );
            }
        }
        ?>
</div>