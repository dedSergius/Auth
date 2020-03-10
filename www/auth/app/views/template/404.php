<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex flex-column justify-content-center">
    <div class="row flex-column justify-content-center align-items-center">
        <div class="col-5 d-flex flex-column justify-content-center align-items-center">
            <h1>404</h1>
            <h6><?=LANG_404?></h6>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-4 d-flex justify-content-around">
            <button class="btn btn-primary" onclick="window.location.href = '/';"><?=LANG_TO_HOME?></button>
            <button class="btn btn-default" onclick="document.location.reload(true);"><?=LANG_UPDATE_PAGE?></button>
        </div>
    </div>
</div>

</body>
</html>
