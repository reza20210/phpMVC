<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>" class="btn btn-light mb-3 pull-left">
        <i class="fa fa-forward" aria-hidden="true"></i> برگشت</a>
    <br>
    <h1 class="mb-4"><?php echo $data['post']->title; ?></h1>
    <div class="bg-secondary text-white p-2 mb-3">
        اشتراک گذاشته شده توسط <?php echo $data['user']->name; ?> در تاریخ <?php echo $data['post']->created_at; ?>
    </div>
    <p><?php echo $data['post']->body; ?></p>
<?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
    <hr>
    <div class="row">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <form class="pull-left" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>"
                  method="post">
                <input type="submit" class="btn btn-danger" value="حذف">
            </form>
            <a class="btn btn-info pull-left ml-1"
               href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>">ویرایش</a>
        </div>
    </div>

<?php endif; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>