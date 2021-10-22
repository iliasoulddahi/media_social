<div class="w-full h-screen bg-gradient-to-br from-purple-500 via-black to-purple-800 relative ">
    <!-- WRAPPER || PEMBUNGKUT UTAMA -->
    <!-- form -->
    <div class="absolute w-500px h-96 p-3 bg-gray-900 opacity-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-100">

        <div class="mt-8">
            <img class="mx-auto w-1/2" src="<?= base_url('assets/img/medsos_kel4_brand.png') ?>" alt="">
            <div class="font-semibold text-gray-100 text-center">Masuk Ke Akun Anda .. </div>
        </div>

        <form class="flex flex-col justify-between h-1/2 w-80 mx-auto mt-12" action="<?= base_url('auth/login') ?>" method="POST">
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="text" id="email" name="email" placeholder="email" value="<?= set_value('email') ?>">
            <?= form_error('email', '<div class="text-red-500">', '</div>'); ?>
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="text" id="password" name="password" placeholder="password">
            <?= form_error('password', '<div class="text-red-500">', '</div>'); ?>
            <button class="bg-gradient-to-r from-blue-700 via-blue-400 to-blue-600 text-xl text-gray-100" type="submit">Login</button>
        </form>
        <?php
        $message = $this->session->flashdata('message');
        if (isset($message)) {
            echo '<div class="bg-red-400">' . $message . '</div>';
            $this->session->unset_userdata('message');
        }
        ?>

<div class="mt-20 w-full text-center text-lg text-white">
    belum punya akun? buat <a class="text-green-300" href="<?= base_url('auth/registration') ?>">di sini</a>
</div>
    </div>

</div>




</body>

</html>