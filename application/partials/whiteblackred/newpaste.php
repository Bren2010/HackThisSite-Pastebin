<?php
$mongobase = new mongoBase;

function safeKeyGet($key, $mongobase) {    
    if (!isset($_POST[$key]))
        return null;
    
    return $mongobase->clean($_POST[$key]);
}
?>
<h2>New Paste</h2>
<form action="<?php echo Url::format('paste/post/save'); ?>" method="post">
    <div class="block">
        <label>Title:</label>  <input type="text" name="title" value="<?php echo safeKeyGet('title', $mongobase); ?>" /><br />
        <textarea rows="30" name="paste"><?php echo safeKeyGet('paste', $mongobase); ?></textarea><br />
    </div>
    
    <?php $highlighting = safeKeyGet('language', $mongobase); ?>
    <label>Highlighting:</label>  <select name="language">
    <option value="none"<?php echo ($highlighting == null || $highlighting == 'none' ? ' selected="selected"' : ''); ?>>None</option>
    <option value="php"<?php echo ($highlighting == 'php' ? ' selected = "selected"' : ''); ?>>PHP</option>
    <option value="javascript"<?php echo ($highlighting == 'javascript' ? ' selected = "selected"' : ''); ?>>JavaScript</option>
    </select>
    
    <?php $expiration = safeKeyGet('expiration', $mongobase); ?>
    <label>Expiration:</label>  <select name="expiration">
    <option value="never"<?php echo ($expiration == null || $expiration == 'never' ? ' selected="selected"' : ''); ?>>Never</option>
    <option value="10m"<?php echo ($expiration == '10m' ? ' selected="selected"' : ''); ?>>10 Minutes</option>
    </select><br />
    
    <?php $exposure = safeKeyGet('exposure', $mongobase); ?>
    <label>Exposure:</label>  <span><input type="radio" name="exposure" value="public"<?php echo ($exposure == null || $exposure == 'public' ? ' checked="checked"' : ''); ?> /> Public&nbsp;&nbsp;
    <input type="radio" name="exposure" value="private"<?php echo ($exposure == 'private' ? ' checked="checked"' : ''); ?> /> Private</span><br />

    <img src="<?php echo Url::format('/captcha.php'); ?>" /><br />
    <label>Image Validation:</label>  <input type="text" name="captcha" />
    
    <div class="center">
        <input type="submit" name="submit" value="Post Paste" />&nbsp;&nbsp;-&nbsp;&nbsp;<input type="reset" value="Clear" />
    </div>
</form>
