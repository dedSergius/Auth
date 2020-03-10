<div class="container d-flex flex-column justify-content-center">
    <div class="row flex-column align-items-center">
        <h4><?= LANG_LOGIN_TITLE ?></h4>
        <div class="col-5">
            <?php (new \App\Core\View())->getFile("template/feedback"); ?>
            <form class="form-horizontal" role="form" method="post" action="<?= $this->makeUrl("login/_login"); ?>">
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-12 control-label"><?= LANG_USERNAME ?></label>
                    <div class="col-lg-12">
                        <input type="name" name="username" class="form-control" id="inputUsername"
                               placeholder="<?= LANG_USERNAME ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-12 control-label"><?= LANG_PASSWORD ?></label>
                    <div class="col-lg-12">
                        <input type="password" name="password" class="form-control" id="inputPassword"
                               placeholder="<?= LANG_PASSWORD ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label class="checkbox" for="checkbox2">
                            <input name="remember" type="checkbox" id="checkbox2" checked="checked"
                                   data-toggle="checkbox" class="custom-checkbox"><span class="icons"><span
                                        class="icon-unchecked"></span><span class="icon-checked"></span></span>
                            <?= LANG_REMEMBER_ME ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="hidden" name="csrf_token" value="<?= App\Utility\Token::generate(); ?>"/>
                        <button type="submit" class="btn btn-primary"><?= LANG_LOGIN ?></button>
                    </div>
                </div>
            </form>
            <p><?= LANG_NO_ACCOUNT ?> <a class="float-right"
                                         href="<?= $this->makeUrl("reg"); ?>"><?= LANG_SIGN_UP ?></a></p>
        </div>
    </div>
</div>
