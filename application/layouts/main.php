<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Hack This Site!<?php if (isset($title)): ?> | <?php echo $title; ?><?php endif; ?></title>
    </head>
    
    <body>
        <a href="<?php echo Url::format('/'); ?>">Home</a><br />
        <center>
        <?php
        if (Error::has()):
        foreach(Error::getAllNotices() as $notice): ?>
        <?php echo $notice; ?><br />
        <?php endforeach; foreach(Error::getAllErrors() as $error): ?>
        <?php echo $error; ?><br />
        <?php endforeach;endif; ?>
        </center>
        
<?php echo $content; ?>
        
        <br /><hr /><br />
        <center>Page rendered in <strong><?php echo $pageExecutionTime; ?></strong> seconds.</center>
    </body>
</html>
