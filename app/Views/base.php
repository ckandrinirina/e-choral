<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= $this->include('link_script/link') ?>
    <title>Document</title>
</head>

<body>
    <?= $this->include('templates/loader') ?>
    <header>

    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>

    </footer>
    <?= $this->include('link_script/script') ?>
</body>

</html>