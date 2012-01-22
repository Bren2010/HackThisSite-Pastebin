<?php if (!empty($valid) && $valid): ?>
Title:  <?php echo (empty($paste['title']) ? 'None' : $paste['title']); ?><br /><br />

Posted: <?php echo Date::dayFormat($paste['date']); ?><br />
Exposure:  <?php echo ucwords(array_search($paste['exposure'], $modelInfo['exposures'])); ?><br />
Expiration:  <?php echo ($paste['expiration'] === INF ? 'Never' : Date::minuteFormat($paste['expiration'])); ?><br />
Language:  <?php echo ucwords($paste['language']); ?><br />
<?php if ($paste['language'] == 'none'): ?>
<pre style="width: 100%;padding: 1%;border: 1px grey dashed;white-space: pre-wrap;"><?php echo $paste['paste']; ?></pre>
<?php 
else:
$geshi = new GeSHi(html_entity_decode($paste['paste'], ENT_QUOTES, 'ISO8859-15'), $paste['language']);
$lines = explode("\n", $geshi->parse_code());
$count = count($lines);
echo $count;
?>
<style type="text/css">
    pre {
        width: 500px;
        white-space: pre-wrap;
    }
<?php
for ($i = 1;$i <= $count - 1;++$i) {
    echo 'span.line' . $i . ':before {content: "' . $i . '. ";margin-left: -25px;}' . "\n";
}
?>
</style>
<?php
$i = 1;

foreach ($lines as $line) {
    if ($i == 1) {
        $where = strpos($line, '>') + 1;
        $pre = substr($line, 0, $where);
        $line = substr($line, $where);
        echo $pre;
    }
    
    if ($i != $count) {
        echo '<span class="line' . $i . '">' . $line . '</span>' . "\n";
    } else {
        echo $line;
    }
    ++$i;
}
endif;
?>
<?php endif; ?>
