<?php if($messages): ?>
    <div id="messages">
        <div class="section clearfix">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
            <?php print $messages; ?>
        </div>
    </div>
<?php endif; ?>

<?php print render($page['content']); ?>

<?php
$searchBlock = module_invoke('search', 'block_view', 'search');
print render($searchBlock['content']);
?>

<?php
$mpnBlock = module_invoke('menu', 'block_view', 'navigation');
print render($mpnBlock['content']);
?>

<?php print render($myModuleForm); ?>