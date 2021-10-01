<!-- form -->
<div>
    <form class="flex flex-col" action="<?= base_url('auth/login') ?>" method="POST">
        <input class="" type="text" id="email" name="email" placeholder="email" value="<?= set_value('email')?>">
        <?= form_error('email', '<div class="text-red-500">','</div>'); ?>
        <input class="" type="text" id="password" name="password" placeholder="password">
        <?= form_error('password', '<div class="text-red-500">','</div>'); ?>
        <button type="submit">Login</button>
    </form>
</div>

<?= $this->session->flashdata('message'); ?>