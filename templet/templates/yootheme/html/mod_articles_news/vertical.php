<?php

defined('_JEXEC') or die;

?>

<?php if (count($list) > 0) : ?>
<ul class="uk-list uk-list-divider newsflash <?= $moduleclass_sfx ?>">
    <?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
    <?php $item = $list[$i] ?>
    <li><?php include JModuleHelper::getLayoutPath('mod_articles_news', '_item') ?></li>
    <?php endfor ?>
</ul>
<?php endif ?>
