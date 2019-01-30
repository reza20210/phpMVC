<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto mb-4">
        <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
            <h2>ورود</h2>
            <p>لطفا اطلاعات ورود را وارد کنید.</p>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
                <div class="form-group">
                    <label>ایمیل :<sup>*</sup></label>
                    <input type="text" name="email"
                           class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label>رمز عبور :<sup>*</sup></label>
                    <input type="password" name="password"
                           class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="submit" class="btn btn-success btn-block" value="ورود">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">ثبت نام</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
