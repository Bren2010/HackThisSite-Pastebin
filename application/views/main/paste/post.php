<?php if (!empty($valid) && $valid): ?>
<?php echo Partial::render('newpaste'); ?>
<?php elseif (isset($valid) && !$valid && !empty($return)): ?>
<div class="center">
    <a href="<?php echo Url::format('/paste/view/' . $return['id']); ?>">Your Paste</a>
</div>
<?php endif; ?>
