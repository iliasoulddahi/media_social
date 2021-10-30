<!-- pembungkus utama -->
<div class="w-full h-screen relative">
    <!-- form -->
    <div class="absolute w-500px h-500px p-3 bg-gray-900 opacity-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-100">

        <div class="mt-8">
            <img class="mx-auto w-1/2" src="<?= base_url('assets/img/medsos_kel4_brand.png') ?>" alt="">
            <div class="font-semibold text-gray-100 text-center">Buat Akun Anda .. </div>
        </div>

        <form class="flex flex-col justify-between h-2/3 w-80 mx-auto mt-12" action="<?= base_url('auth/registration') ?>" method="POST">
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="text" id="name" name="name" placeholder="name" value="<?= set_value('name') ?>">
            <?= form_error('name', '<div class="text-red-500">', '</div>'); ?>
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="text" id="email" name="email" placeholder="email" value="<?= set_value('email') ?>">
            <?= form_error('email', '<div class="text-red-500">', '</div>'); ?>
            <div class="w-full flex justify-evenly text-gray-100">
                <div>
                    <input type="radio" name="gender" value="pria">Pria
                </div>
                <div>
                    <input type="radio" name="gender" value="wanita">Wanita
                </div>
            </div>
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="password" id="password" name="password" placeholder="password">
            <?= form_error('email', '<div class="text-red-500">', '</div>'); ?>
            <input class="border-l-0 border-r-0 border-t-0 border-b-2 border-gray-600 border-solid bg-transparent text-lg placeholder-gray-100 font-semibold" type="password" id="password_match" name="password_match" placeholder="konfirmasi password">
            <button class="bg-gradient-to-r from-blue-700 via-blue-400 to-blue-600 text-xl text-gray-100" type="submit">Daftar</button>
        </form>

        <div class="mt-14 w-full text-center text-lg text-white">
            sudah punya akun? Login <a class="text-green-900" href="<?= base_url('auth/login') ?>">di sini</a>
        </div>
    </div>
</div>

</body>

</html>