<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" style="direction: rtl">
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URLROOT; ?>">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">درباره ما</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out"
                                                                                          aria-hidden="true"></i>
                            خروج</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">ورود</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">ثبت نام</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>