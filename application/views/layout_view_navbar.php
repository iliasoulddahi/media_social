<!-- navbar -->
<div class="flex justify-between bg-gray-500 w-full" id="navbar">
    <div class="flex flex-col justify-center items-center w-3/5">
        <a href="<?= base_url('home') ?>"><img class="w-300px" src="<?= base_url('assets/img/medsos_kel4_brand.png') ?>" alt=""></a>
    </div>
    <div class="flex justify-between items-center relative">
        <button onclick="myToggle('nav-toggle')" class="flex items-center justify-start">
            <img src="<?= base_url('assets/img/' . $profile_image) ?>" alt="" class="w-12 h-12 rounded-full mr-3">
            <div class="mr-14"><?= $name ?></div>
        </button>

        <div id="nav-toggle" class="absolute w-32 bg-gray-500 top-full left-0 hidden">
            <ul class="text-gray-200 text-center p-3">
                <li class="bg-green-400 mb-3"><a href="<?php echo base_url('profile?p=').$this->session->userdata('user_id');?>">Profile</a></li>
                <li class="bg-green-400"><a href="">Groups</a></li>
                <li class="bg-red-400 mt-7"><a href="<?=base_url('auth/logout')?>">Logout</a></li>
            </ul>
        </div>
    </div>
</div>