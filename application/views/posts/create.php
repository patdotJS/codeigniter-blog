<h2><?=$title; ?></h2>

<?php echo validation_errors()?>

<?php echo form_open('posts/create'); ?>
  <div class="mb-3">
    <label>Title</label>
    <input type="title" name="title" class="form-control" placeholder="Add Title" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label>Add Body</label>
    <textarea class="form-control" name="body" id="exampleInputPassword1" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>