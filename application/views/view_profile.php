<div class="md:flex justify-between bg-gray-600 w-full md:w-5/6 lg:w-3/4 xl:w-3/4 h-screen mx-auto overflow-y-scroll mt-5 hide-scrollbar p-5">
    <!--PEMBUNGKUS UTAMA-->

    <div class="">
        <img src="<?= base_url('assets/img/' . $profile_profile_image) ?>" alt="" class="w-64">
        <div class="bg-red-400 w-64 mt-4 p-4">
            <div class="text-2xl capitalize text-gray-800 "><?= $profile_name ?></div>
            <div class="text-xl text-gray-700">Jakarta,indonesia</div>
            <div class=" text-gray-700"><a href="#">manemint.com</a></div>
            <?php if ($is_admin) : ?>
                <button class="bg-blue-500 rounded-lg w-full h-8">Edit Profile</button>
            <?php else : ?>

                <?php if ($is_friend) : ?>
                    <div class="flex justify-end">
                        <a href="#" class="flex justify-center items-center w-16 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-2xl">
                                chat
                            </span></a>
                    </div>
                <?php else : ?>
                    <div class="flex justify-end">
                        <a href="#" class="flex justify-center items-center w-16 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-2xl">
                                person_add_alt
                            </span></a>
                    </div>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>

    <div class="w-full md:w-550px lg:w-650px xl:w-700px">

        <?php foreach ($posts as $post) : ?>
            <div class="w-full bg-red-400 rounded-2xl mb-3 pb-3 relative">
                <div class="flex justify-between w-full">
                    <a href="#">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/img/' . $profile_profile_image) ?>" alt="" class="w-16 h-16 bg-white rounded-tl-xl">
                            <div class="text-xl"><?= $profile_name ?></div>
                        </div>
                    </a>
                    <div class="font-light mt-4 mr-3"><?= $post['date_created'] ?></div>
                </div>

                <div class="mt-2 ml-3 text-xl">
                    <?= $post['post_content'] ?>
                </div>

                <div class="flex w-full min-w-max justify-evenly mt-5">
                    <a href="#" class="flex justify-center items-center w-16 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-2xl">
                            thumb_up
                        </span></a>
                    <a href="#" class="flex justify-center items-center w-16 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-2xl">
                            comment
                        </span></a>
                </div>
                <!-- form insert comment -->
                <form action="<?= base_url('') ?>" method="post" id="form-comment" class="w-full px-3 hidden">
                    <div class="flex">
                        <textarea name="comment" id="comment" rows="2" placeholder="berikan komentar" class="w-full hide-scrollbar p-2 mt-3"></textarea>
                        <button type="submit">
                            <span class="material-icons text-4xl absolute right-6 bottom-6">
                                send
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        <?php endforeach ?>
    </div>
</div>