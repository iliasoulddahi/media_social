<!-- form -->
<div>
    <form class="flex flex-col" action="<?= base_url('auth/registration') ?>" method="POST">
        <input class="" type="text" id="name" name="name" placeholder="name" value="<?= set_value('name') ?>">
        <?= form_error('name', '<div class="text-red-500">','</div>'); ?>
        <input class="" type="text" id="email" name="email" placeholder="email" value="<?= set_value('email') ?>">
        <?= form_error('email', '<div class="text-red-500">','</div>'); ?>
        <input type="radio" name="gender" value="pria">Pria
        <input type="radio" name="gender" value="wanita">Wanita
        <input class="" type="password" id="password" name="password" placeholder="password">
        <?= form_error('email', '<div class="text-red-500">','</div>'); ?>
        <input class="" type="password" id="password_match" name="password_match" placeholder="password_match">
        <button class="w-4 h-4" type="submit">Daftar</button>
    </form>
</div>