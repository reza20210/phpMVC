<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>پست ها</h1>
        </div>
        <div class="col-md-6">
            <a class="btn btn-primary pull-left" href="<?php echo URLROOT; ?>/posts/add">
                <i class="fa fa-pencil" aria-hidden="true"></i> درج پست جدید </a>
        </div>
    </div>
<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h4 class="card-title"><?php echo $post->title; ?></h4>
        <div class="bg-light p-2 mb-3">
            اشتراک گذاشته شده توسط <?php echo $post->name; ?> در <?php echo $post->created_at; ?>
        </div>
        <p class="card-text"><?php echo $post->body; ?></p>
        <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">بیشتر</a>
    </div>
<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>