<h2><?=$title; ?></h2>

<?php echo validation_errors()?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="mb-3">
    <label>Title</label>
    <input type="title" name="title" class="form-control" value="<?php echo $post['title'];?>" placeholder="Add Title" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label>Add Body</label>
    <textarea class="form-control" name="body" id="exampleInputPassword1" placeholder="Add Body"><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>