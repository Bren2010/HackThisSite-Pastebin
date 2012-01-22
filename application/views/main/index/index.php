<?php echo Partial::render('newpaste'); ?>

<h3>Newest Pastes</h3>
<ul>
<?php
    foreach ($new as $paste) {
        echo '<li><a href="' . Url::format('/paste/view/' . $paste['shortId']) . '">' . (empty($paste['title']) ? 'Untitled' : $paste['title']) . '</a><br />
        <span>Posted ' . Date::durationFormat(time() - $paste['date'], true) . ' ago.</span></li>';
    }
?>
</ul>
