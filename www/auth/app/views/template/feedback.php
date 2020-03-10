<?php

use App\Utility\Config;
use App\Utility\Flash;

if (($danger = Flash::danger())): ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?=LANG_ALERT_DANGER?></strong><br>
        <?= $this->escapeHTML($danger); ?>
    </div>
<?php
endif;
if (($info = Flash::info())):
    ?>
    <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?=LANG_ALERT_INFO?></strong><br>
        <?= $this->escapeHTML($info); ?>
    </div>
<?php
endif;
if (($success = Flash::success())):
    ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?=LANG_ALERT_SUCCESS?></strong><br>
        <?= $this->escapeHTML($success); ?>
    </div>
<?php
endif;
if (($warning = Flash::warning())):
    ?>
    <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?=LANG_ALERT_WARNING?></strong><br>
        <?= $this->escapeHTML($warning); ?>
    </div>
<?php
endif;
if (($errors = Flash::session(Config::get("SESSION_ERRORS")))):
    ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?=LANG_ALERT_ERRORS?></strong>
        <ul>
            <?php foreach ($errors as $key => $values): ?>
                <?php foreach ($values as $value): ?>
                    <li><?= $this->escapeHTML($value); ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
