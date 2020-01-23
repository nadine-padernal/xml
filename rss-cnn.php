<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("http://feeds.bbci.co.uk/news/world/asia/rss.xml");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $date = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
  
   echo "<li>$title...$date
            <ul>
                <li>$link</li>
            </ul>
        </li>";
 }
?>
</ul>
