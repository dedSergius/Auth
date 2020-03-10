<div class="container d-flex flex-column justify-content-center">
    <div class="row flex-column align-items-center">
        <h4><?= LANG_REGISTRATION_TITLE ?></h4>
        <div class="col-8">
            <?php (new \App\Core\View())->getFile("template/feedback"); ?>
            <form class="form" role="form" method="post" action="<?= $this->makeUrl("reg/_register"); ?>"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="inputFirstname" class="col-lg-12 control-label"><?= LANG_FIRSTNAME ?></label>
                            <div class="col-lg-12">
                                <input type="name" name="firstname" class="form-control" id="inputFirstname"
                                       placeholder="<?= LANG_FIRSTNAME ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSurname" class="col-lg-12 control-label"><?= LANG_SURNAME ?></label>
                            <div class="col-lg-12">
                                <input type="name" name="surname" class="form-control" id="inputSurname"
                                       placeholder="<?= LANG_SURNAME ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 control-label"><?= LANG_DATE_OF_BIRTH ?></label>
                            <div class="col-lg-12">
                                <input type="text" name="dob" class="form-control date-of-birth" name="dob"
                                       placeholder="<?= LANG_DATE_OF_BIRTH ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-auto control-label"><?= LANG_GENDER ?></label>
                            <div class="d-flex align-items-baseline">
                                <div class="col-4">
                                    <label class="radio" for="radio1">
                                        <input type="radio" name="gender" value="0" id="radio1" data-toggle="radio"
                                               class="custom-radio" checked><span class="icons"><span
                                                    class="icon-unchecked"></span><span
                                                    class="icon-checked"></span></span>
                                        <?= LANG_MALE ?>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="radio" for="radio2">
                                        <input type="radio" name="gender" value="1" id="radio2" data-toggle="radio"
                                               class="custom-radio"><span class="icons"><span
                                                    class="icon-unchecked"></span><span
                                                    class="icon-checked"></span></span>
                                        <?= LANG_FEMALE ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-auto control-label"><?= LANG_AVATAR ?>
                                <i class="far fa-question-circle popover-dismiss" data-toggle="popover"
                                   data-content="<?= LANG_AVATAR_INPUT_DESC ?>"></i>
                            </label>
                            <input type="file" name="avatar" id="file" accept="image/jpeg,image/png,image/gif"
                                   class="input-file">
                            <label for="file" class="btn btn-tertiary js-labelFile">
                                <i class="icon fa fa-check"></i>
                                <span class="js-fileName"><?= LANG_SELECT_A_FILE ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="inputUsername" class="col-lg-12 control-label"><?= LANG_USERNAME ?>
                                <i class="far fa-question-circle popover-dismiss" data-toggle="popover"
                                   data-title="<?= LANG_REQUIRED_FIELD ?>"
                                   data-content="<?= LANG_USERNAME_INPUT_DESC ?>"></i>
                            </label>
                            <div class="col-lg-12">
                                <input type="name" name="username" class="form-control" id="inputUsername"
                                       placeholder="<?= LANG_USERNAME ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-12 control-label"><?= LANG_EMAIL ?></label>
                            <div class="col-lg-12">
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                       placeholder="<?= LANG_EMAIL ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="col-lg-12 control-label"><?= LANG_PASSWORD ?>
                                <i class="far fa-question-circle popover-dismiss" data-toggle="popover"
                                   data-title="<?= LANG_REQUIRED_FIELD ?>"
                                   data-content="<?= LANG_PASSWORD_INPUT_DESC ?>"></i>
                            </label>
                            <div class="col-lg-12">
                                <input type="password" name="password" class="form-control" id="inputPassword1"
                                       placeholder="<?= LANG_PASSWORD ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="password" name="password_repeat" class="form-control" id="inputPassword2"
                                       placeholder="<?= LANG_CONFIRM ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-12">
                                <label class="checkbox" for="checkbox3">
                                    <input type="checkbox" name="agreement" data-toggle="checkbox" id="checkbox3"
                                           class="custom-checkbox" required><span class="icons"><span
                                                class="icon-unchecked"></span><span class="icon-checked"></span></span>
                                    <?= LANG_AGREEMENT ?>
                                </label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 45px;">
                            <input type="hidden" name="csrf_token" value="<?= App\Utility\Token::generate(); ?>"/>
                            <div class="col-lg-12 d-flex align-items-baseline justify-content-between">
                                <button type="submit" class="btn btn-primary"><?= LANG_SIGN_UP ?></button>
                                <p> <?= LANG_OR ?> </p>
                                <a class="float-right" href="<?= $this->makeUrl("login"); ?>"><?= LANG_LOGIN ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>