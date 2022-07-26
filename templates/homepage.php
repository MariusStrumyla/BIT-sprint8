<?php include "templates/include/header.php" ?>
<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=archive">Articles</a></li>
</ul>
</div>
<div id="welcome">
  <h1>Peters Bakery!</h1>
  <p>Welcome to Peter's Bakery page!</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, autem.</p>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consequatur et commodi laboriosam ducimus reprehenderit.</p>
  <img src="https://images.pexels.com/photos/1070946/pexels-photo-1070946.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="cooking" width="500" /></br></br>
  <h2>Articles</h2></br>
</div>

<ul id="headlines" style="margin-bottom:80px;">

  <?php foreach ($results['articles'] as $article) { ?>

    <li>
      <h3>
        <span class="pubDate"><?php echo date('j F', $article->publicationDate) ?></span><a class="article" href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h3>
      <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
    </li>

  <?php } ?>

</ul>

<?php include "templates/include/footer.php" ?>