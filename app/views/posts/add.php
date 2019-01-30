<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6">

    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>" class="btn btn-light pull-left">
            <i class="fa fa-forward" aria-hidden="true"></i> برگشت</a>
    </div>
</div>

<div class="card card-body bg-light mt-3">
    <h2>ایجاد پست</h2>
    <p>فرم ایجاد پست حدید</p>
    <form action="<?php echo URLROOT; ?>/posts/add" method="post">
        <div class="form-group">
            <label>عنوان :<sup>*</sup></label>
            <input type="text" name="title"
                   class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $data['title']; ?>" placeholder="عنوان پست ...">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group">
            <label>متن :<sup>*</sup></label>
            <textarea name="body"
                      class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"
                      placeholder="متن پست ..."><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
        </div>
        <input type="submit" class="btn btn-success" value="ارسال">
    </form>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
