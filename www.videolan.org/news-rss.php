<?php
  // This is a minimum example of using the class
  require("include/FeedWriter/FeedWriter.php");
  require("include/FeedWriter/FeedItem.php");

  //Creating an instance of FeedWriter class.
  $TestFeed = new FeedWriter(RSS2);

  //Setting the channel elements
  //Use wrapper functions for common channel elements
  $TestFeed->setTitle('VideoLAN project - News feed');
  $TestFeed->setLink('http://www.videolan.org/news.rss');
  $TestFeed->setDescription('This is the main new feed from the VideoLAN project');

  //Image title and link must match with the 'title' and 'link' channel elements for valid RSS 2.0
  //$TestFeed->setImage('Testing the RSS writer class','http://www.ajaxray.com/projects/rss','http://www.rightbrainsolution.com/images/logo.gif');

  $file=fopen("news.msg","r");
  $count = 0;

  if(!$file)
      return(0);

  while( !feof($file) )
  {
      $line=ereg_replace("\n","",fgets($file,4096));

      // Comments are allowed
      if( !ereg("^ *#",$line) && !ereg("^ *$",$line) )
      {
          // Topics start with "|"
          if( ereg("^ *\|",$line) && $msg )
          {
              $ex=explode("|",$msg);
              $date = $ex[1];
              $title = $ex[2];
              $short = $ex[3];
              $remain = $ex[4];

              if( $count ++ < 15 ) {
                  $newItem = $TestFeed->createNewItem();
                  $newItem->setTitle($title);
                  $newItem->setDate($date);
                  $newItem->setLink("http://www.videolan.org/news.html");
                  $newItem->setDescription($short."<br />".$remain);
                  $TestFeed->addItem($newItem);
              }
          $msg="";
          }
          $msg.=" ".$line;
      }
  }
  fclose($file);

  //OK. Everything is done. Now genarate the feed.
  $TestFeed->genarateFeed();
?>
