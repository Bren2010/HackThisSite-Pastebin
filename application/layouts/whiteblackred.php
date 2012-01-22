<html>
    <head>
        <title>HackThisSite Pastebin<?php echo (isset($title) ? ':: ' . $title : null); ?></title>
        
        <style type="text/css">
            body {
                font-family: sans;
            }
            
            img.header {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            
            div.body {
                width: 500px;
                padding: 20px;
                display: block;
                margin: 20px auto;
                border-top: 1px dashed grey;
                border-bottom: 1px dashed grey;
            }
            
            h2, label {
                text-decoration: underline;
                margin-bottom: 5px;
            }
            
            label {
                font-size: 14px;
            }
            
            span {
                font-size: 12px;
            }
            
            select {
                margin-right: 10px;
            }
            
            div.center {
                margin-top: 20px;
                text-align: center;
            }
            
            form {
                text-align: center;
            }
            
            div.block {
                display: block;
                width: 500px;
                margin: 0 auto;
                text-align: left;
            }
            
            div.newSection {
                border-top: 1 dashed grey;
                width: 100%;
                margin-top: 20px;
            }
            
            textarea {
                border: 1px solid rgb(204, 184, 184);
                background-color: rgb(244, 224, 224);
                width: 100%;
            }
            
            ul {
                display: block;
                width: 100%;
                list-style-type: none;
                padding: 0px;
                margin: 10px;
                border-top: 1px dashed rgb(204, 184, 184);
                overflow: hidden;
            }
            
            li {
                padding: 10px;
                border-bottom: 1px dashed rgb(204, 184, 184);
                float: left;
                display: inline;
                width: 29%;
                height: 6%;
            }
        </style>
    </head>
    <body>
        <a href="<?php echo Url::format('/'); ?>">
        <img src="<?php echo Url::format('/pastebin.jpg'); ?>" class="header" /></a>
        
        <div class="center">
            <?php
            if (Error::has()):
            foreach(Error::getAllNotices() as $notice): ?>
            <?php echo $notice; ?><br />
            <?php endforeach; foreach(Error::getAllErrors() as $error): ?>
            <?php echo $error; ?><br />
            <?php endforeach;endif; ?>
        </div>
        
        <div class="body">
<?php echo $content; ?>
        </div>
        <div class="center"><span>Page rendered in <strong><?php echo $pageExecutionTime; ?></strong> seconds.</span></div>
    </body>
</html>
