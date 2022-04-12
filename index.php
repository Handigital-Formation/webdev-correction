<?php


function getArticle()
{
    $db = new PDO('mysql:host=localhost;dbname=blogpost', 'blogpost', 'blogpost');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    $query = 'SELECT * FROM article';

    $statement = $db->prepare($query);


    try {

        $statement->execute();
    } catch (\PDOException $e) {
        echo "Statement failed: " . $e->getMessage();
        return false;
    }

    return $statement->fetchAll(\PDO::FETCH_ASSOC);
}

$donnees_articles = getArticle();

require 'Article.php';

$articles = [];

foreach($donnees_articles as $article) {
    $articles[] = new Article($article);
}

require 'template.php';

?>
