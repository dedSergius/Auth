<?php $user = $this->user; ?>
<div class="container d-flex flex-column justify-content-center">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
                <div class="col-3">
                    <img src="images/<?= !empty($user->avatar) ? "avatars/" . $user->avatar : "default.png" ?>"
                         class="avatar">
                </div>
                <div class="col-9">
                    <?php
                    if (!empty($user->firstname) || !empty($user->surname)) {
                        echo "<h5 class=\"mb-0\">";
                        if (!empty($user->firstname))
                            echo $user->firstname . " ";
                        if (empty($user->firstname) && !empty($user->surname))
                            echo $user->surname . "さん";
                        else echo $user->surname;
                        echo "</h5> <small>$user->username</small>";
                    } else echo "<h5 class=\"mb-0\">$user->username</h5>";
                    ?>
                    <p class="mb-0"><?= ($user->gender == 0) ? LANG_MAN : LANG_WOMAN ?>
                        • <?= strftime("%d %B %Y", strtotime($user->dob)) ?></p>
                    <?= !empty($user->email) ? "<a href=\"mailto:$user->email\">$user->email</a>" : "" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<button onclick="window.location.href = '<?= $this->makeUrl("logout"); ?>'" class="btn btn-primary btn-sm btn-logout"
        type="button"><?= LANG_LOGOUT ?></button>