<p>Here is a list of all posts:</p>

<form action="?controller=posts&action=create" method="post">
  <label for="author">Author :</label>
  <input type="text" name="author" />
  <label for="content">Content :</label>
 <textarea type="text" name="content"></textarea>
 <p><input type="submit" value="OK"></p>
</form>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
    <a href='?controller=posts&action=delete&id=<?php echo $post->id; ?>'>Suprimer</a>

  </p>
<?php } ?>