<h1><?php echo $blog_title ?></h1>
<h2><?php echo $blog_heading ?></h2>

<ul>
  <?php foreach ($blog_entries as $item): ?>

    <li>
      <h3><?php echo $item['title'] ?></h3>

      <p><?php echo $item['body'] ?></p>
    </li>

  <?php endforeach; ?>
</ul>
