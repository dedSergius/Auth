<select class="form-control select select-language select-block mbl">
    <?php
    foreach (\App\Core\Lang::loadLanguages() as $code => $name) {
        if (\App\Core\Lang::getLanguage() == $code) {
            echo "<option value=\"" . $code . "\" selected>" . $name . "</option>";
        } else echo "<option value=\"" . $code . "\">" . $name . "</option>";
    }
    ?>
</select>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Bootstrap 4 requires Popper.js -->
<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

<script src="scripts/bootstrap-datepicker.min.js"></script>
<script src="scripts/locales/bootstrap-datepicker.ru.min.js"></script>

<script src="scripts/flat-ui.js"></script>
<?
if (file_exists(__DIR__ . "/../../../public/scripts/pages/" . $this->page . ".js")) {
    echo "<script>\n";
    include __DIR__ . "/../../../public/scripts/pages/" . $this->page . ".js";
    echo "\n</script>";
}
?>
<script>
    $(".select-language").select2();
    $(".select-language").on('change', function (event) {
        event.preventDefault();
        $.ajax({
            url: '<?= $this->makeUrl("lang/change"); ?>',
            data: {l: this.value},
        })
            .done(function () {
                document.location.reload();
            });

    });

    $(".popover-dismiss").popover({trigger: "hover"});
</script>
</body>

</html>