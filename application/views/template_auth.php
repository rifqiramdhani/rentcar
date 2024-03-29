<!DOCTYPE html>

<html lang="en">
 
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>

    <link href="<?= base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>" rel="stylesheet">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/img/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?= base_url('assets/img/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- style core ui -->
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/pace-progress/css/pace.min.css') ?>" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <?php echo $contents; ?>
        </div>
    </div>

    <script src="<?= base_url('assets/vendors/jquery/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/@coreui/coreui/js/coreui.min.js') ?>"></script>
    <!-- form validation -->
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap-validator/dist/validator.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/5e43405e99.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.btn-register').click(function() {
                $('#form-forgot-password').hide()
                $('#form-login').hide()
                $('#form-register').show()
            })

            $('.btn-login').click(function() {
                $('#form-register').hide()
                $('#form-forgot-password').hide()
                $('#form-login').show()
            })

            $('.btn-forgot-password').click(function() {
                $('#form-register').hide()
                $('#form-login').hide()
                $('#form-forgot-password').show()
            })

            // setTimeout(function() {
            //     $(".btn-register").click();
            // }, 1000);
            <?= isset($script) ? $script : ''; ?>
        })
    </script>

    <!-- script menampilkan form regist -->
    

</body>

</html>