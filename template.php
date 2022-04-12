<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet"/>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <title>Document</title>
</head>
<body>

  <h1>Blog Posts</h1>

  <div class="articles">
<?php
foreach($articles as $article)
{
    //echo $article->title()."<br/>";
    include 'article-accueil.php'; 
}
?>
  </div>
  <script>
   function changeTitle(){
     document.querySelector('h1').innerHTML = document.getElementById('changeTitle').value;
   }
  </script>
  <div class="changeTitle">
    <input id="changeTitle" name="changeTitle" type="text" value=""/>
    <button onclick="changeTitle()">ChangeTitle</button>
  </div>

</body>
</html>

