<h2><?= $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<div class="post-body">
    <?= $post['body'];?>
</div>
<hr>

<a class="btn btn-secondary float-start" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
<input type="submit" value='delete' class="btn btn-danger">
</form>

