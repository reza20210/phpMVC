<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="row">
    <div class="col-md-6 mx-auto mb-4">
        <div class="card card-body bg-light mt-5">
            <h2>ثبت نام</h2>
            <p>لطفا اطلاعات مورد نیاز را وارد کنید.</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="form-group">
                    <label>نام :<sup>*</label>
                    <input type="text" name="name"
                           class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                </div>
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
                <div class="form-group">
                    <label>تایید رمز عبور :<sup>*</sup></label>
                    <input type="password" name="confirm_password"
                           class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>

                <div class="form-row">
                    <div class="col">
                        <input type="submit" class="btn btn-success btn-block" value="ثبت نام">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">ورود</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>