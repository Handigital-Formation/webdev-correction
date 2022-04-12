<div class="article">
    <img alt="" src="<?= $article->image()?>"/>
    <div class="text">
    <h3><?= $article->title() ?></h3>
    <p>
      <?php
      if (strlen($article->content()) >= 150) {
	echo substr($article->content(), 0, 150). " ... ";
      }
      else {
	echo $article->content();
      }
      $article->content()
      ?>
    </p>
    <div class="date"><small>le <?php echo $article->date();?></small></div>
    </div>
</div>
