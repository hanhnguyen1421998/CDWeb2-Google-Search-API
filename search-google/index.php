<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1111.less', 'css/1111.css');
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Google Search</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="<?php echo $url_path ?>/css/1111.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/script.js"></script>
        
        <!--  013470019275622855400:wnauzapjisg-->
        <script>
          (function() {
            var cx = '015735391145657819826:l6f8ycxn8jk';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();

            var elementName = '';
  var initGCSEInputField = function() {
    $( '.gcse-container form.gsc-search-box input.gsc-input' )
      .on( "keyup", function( e ) {
      if( e.which == 13 ) { // 13 = enter
        var searchTerm = $.trim( this.value );
        if( searchTerm != '' ) {
          console.log( "Enter detected for search term: " + searchTerm );
          // execute your custom CODE for Keyboard Enter HERE
               $("button").css("background-color", "yellow");
                  // var links = document.getElementsByTagName('a'), hrefs = [];
                  // for (var i = 0; i<links.length; i++)
                  // {   
                  //     hrefs.push(links[i].href);

                  // }
                  // var arrays=[];
                  // for(var i=1;i<links.length;i++){
                  //    // console.log(links[i].href);
                  //     arrays.push(links[i].href);
                  //     i+=3;
                  // }
                  // alert(arrays);


        }
      }
    });
    $( '.gcse-container form.gsc-search-box input.gsc-search-button' )
      .on( "click", function( e ) {
      var searchTerm = $.trim( $( '.gcse-container form.gsc-search-box input.gsc-input' ).val() );
      if( searchTerm != '' ) {
        console.log( "Search Button Click detected for search term: " + searchTerm );
        // execute your custom CODE for Search Button Click HERE

      }
    });
  };
        </script> 

        <script type="text/javascript">
            
            function CallAjax() {
                var links = document.getElementsByTagName('a'), hrefs = [];
                var search = $('#gsc-i-id1').val();
                  for (var i = 0; i<links.length; i++)
                  {   
                      hrefs.push(links[i].href);
                  }
                  var arrays=[];
                  for(var i=1;i<links.length;i++){
                     // console.log(links[i].href);
                      arrays.push(links[i].href);
                      i+=3;
                  }
                  // if (search !="") {
                  // luu du lieu qua json
                    $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    data: 'string=' + arrays,
                    success: function (data) {
                       console.log(data);
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                    });

                    // luu du lieu qua json
                    $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    data: {search: search},
                    success: function (data) {
                       console.log(data);
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                    });
                  // }else{
                  //   alert('Please fill all the field !');
                  // }

            }
        </script>

    </head>
    <body>
        <?php  include $dir_block.'/1111-content.php'; ?>
        
    </body>
</html>