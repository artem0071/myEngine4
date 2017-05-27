<!DOCTYPE html>
<html>
<head>

    <title><?= $title ?></title>

    <? foreach ($myCSS as $CSS) : ?>

        <link href="<?= CSS.$CSS.E_CSS ?>" rel="stylesheet">

    <? endforeach; ?>

    <? foreach ($myJS as $js) : ?>

        <script src="<?= JS.$js.E_JS ?>"></script>

    <? endforeach; ?>

</head>
<body>