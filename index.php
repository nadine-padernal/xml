<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlfaus.herokuapp.com/rss-cnn.php");
 
 $cnt = $domOBJ->getElementsByTagName("pets");
?>

 <h2> Top 5 Best Pets</h2>

<?php
 foreach( $cnt as $data ){
     $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
     $sciname = $data->getElementsByTagName("sciname")->item(0)->nodeValue;
     $lifespan = $data->getElementsByTagName("lifespan")->item(0)->nodeValue;
     $family = $data->getElementsByTagName("family")->item(0)->nodeValue;
     echo "<ul>
            <h3>$name</h3>
              <ul>
                  <li>Scientific Name: $sciname </li>
                  <li>Average Lifespan: $lifespan </li>
                  <li>Family: $family </li>
              </ul>
          </ul>";
 }
?>
