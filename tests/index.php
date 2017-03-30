<?php
session_start();
$_SESSION['KCFINDER'] = [
    'uploadURL' => '/tests/data',
    'uploadDir' => __DIR__ . '/data',
    'disabled'=>false,
    'denyZipDownload' => true,
    'denyUpdateCheck' => true,
    'denyExtensionRename' => true,
    'theme' => 'default',
    'access' => [
        'files' => [
            'upload' => true,
            'delete' => false,
            'copy' => false,
            'move' => false,
            'rename' => false,
        ],
        'dirs' => [
            'create' => true,
            'delete' => false,
            'rename' => false,
        ],
    ],
    'imageDriversPriority' => 'gd',
    'types'=>[
        'files' => [
            'type' => '',
        ],
        'images' => [
            'type' => '*img',
        ],
    ],
    'thumbsDir' => '.thumbs',
    'thumbWidth' => 100,
    'thumbHeight' => 100,
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ckeditor-image tests</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="../vendor/ckeditor/ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="editor-test" contenteditable="true">Test</div>
<script>
    CKEDITOR.plugins.addExternal('image-uf', '../../../dist/plugin.js', '');
    CKEDITOR.inline('editor-test', {
        removePlugins: 'image',
        extraPlugins: 'image-uf',
        filebrowserBrowseUrl: '../vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=files',
        filebrowserUploadUrl: '../vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=files',
        toolbar: [
            ['image-uf']
        ]
    });
</script>
</body>
</html>