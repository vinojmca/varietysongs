<?php
    require_once('includes/config.php');
?>


    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <title>varietysongs</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<div id="wrapper">
  <div class="title">
    <div class="title-top">
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">
            <div class="title-top-left">
              <div class="title-bottom-left">
                <div class="title-top-right">
                  <div class="title-bottom-right">
                    <h1><a href="#"><span>variety</span> songs</a></h1>
                  </div>
                </div>
            
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">
    <div class="column-left" >
   
      <h2 style="color: #660000; text-align: center; letter-spacing:3px; font-size: 30px ">welcome to varietysongs</h2>
      
    </div>
    
</div>
<style type="text/css">
            .albumname {
                cursor: pointer;
            }
        </style>
<h1 id="nowplaying"></h1>
<?php
// $artist = R::dispense('artist');
// $artist->name = "Yuvan";
// R::store( $artist );

// $artist = R::load("artist", 1);

// $album = R::dispense('album');
// $album->title = "Mankatha";
// R::store( $album );

// $album2 = R::dispense('album');
// $album2->title = "Billa";
// R::store( $album2 );

// $album3 = R::dispense('album');
// $album3->title = "Billa 2";
// R::store( $album3 );

// $artist->ownAlbumList[] = $album;
// $artist->ownAlbumList[] = $album2;
// $artist->ownAlbumList[] = $album3;
// R::store( $artist );

$artists = R::find('artist');
?>
        <ul>
            <?php foreach($artists as $artist) { ?>
                <li class="artistname" data-name="<?php echo $artist->name; ?>">
                    <?php echo $artist->id; ?> - <?php echo $artist->name; ?>
                </li>
                <ol>
                    <?php foreach( $artist->ownAlbumList as $album ) { ?>
                        <li data-url="Http://youub/asdasd" class="albumname" data-name="<?php echo $album->title; ?>"><?php echo $album->title; ?></li>
                    <?php } ?>
                </ol>
            <?php } ?>
        </ul>
        <script type="text/javascript">
            $('.artistname').click(function(e){
                console.log( "Artist clicked: " + $(e.target).data('name') );
            });
            $('.albumname').click(function(e){
                $("#nowplaying").text( "Now playing album: " + $(e.target).data('name') );
                console.log( "Album clicked: " + $(e.target).data('name') );
            })
        </script>
    <div align=center>&copy; 2014  All Rights Reserved.</div>
    </body>
</html>