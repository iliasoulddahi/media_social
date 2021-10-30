<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medsoskel4 -<?php echo $title; ?></title>
    <link rel="icon" href="<?=base_url('assets/img/admin_profile_image.png')?>" type="image/gif">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Chrome, Safari and Opera */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* IE, Edge and Firefox */
        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        textarea,
        input {
            border: none;
            overflow: auto;
            outline: none;

            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            resize: none;
        }

        input:focus::placeholder {
            color: transparent;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-500 via-gray-400 to-purple-800 h-screen text-gray-900">