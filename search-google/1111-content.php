<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1112">
	<div class="img-gg-search">
		<img src="logo-google.PNG" alt="image-google-search" class="img-thumbnail">
	</div>
    
	<div class="type-1112-search">
        <gcse:searchbox></gcse:searchbox>
        <?php  include $dir_block.'/abc.php'; ?>
    </div>

    <div>
        <gcse:searchresults></gcse:searchresults>
    </div>

</div>