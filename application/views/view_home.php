<!-- PEMBUNGKUS UTAMA -->

<!-- wrapper -->
<div class="h-5/6 flex justify-evenly bg-gray-500 w-full mt-5">
    <!-- main wrapper -->
    <div class="flex justify-evenly items-start w-full">
        <!-- sidebar left -->

        <div class="flex flex-col h-full w-52 overflow-y-scroll hide-scrollbar mt-1 border-r border-gray-300 pr-10">
            <div class="bg-green-300 rounded-md text-center">Teman Anda</div>
            <div id="home-friend-list" class="mt-3 bg-gray-400">

            </div>
        </div>


        <!-- scrollable -->
        <!-- center main wrapper -->
        <div class="overflow-y-scroll hide-scrollbar w-650px h-full border-r border-gray-300 pr-10">
            <div class="bg-gray-500 w-full relative p-3">
                <div class=" w-full rounded-lg relative">
                    <form action="<?= base_url('posting/add') ?>" method="post">
                        <textarea name="user_post" id="user_post" cols="" rows="3" placeholder="<?= $name . ' ' ?>Apa Yang Anda Pikirkan?" class="w-full rounded-md bg-white p-2 border-1 focus:border-0 text-xl" required></textarea>

                        <button type="submit" class="absolute rounded-sm bottom-0 right-1 p-1">
                            <span class="material-icons text-4xl">
                                send
                            </span>
                        </button>

                    </form>
                    <div class="flex justify-between w-28 absolute right-5 bottom-2">


                        <label for="post-upload-image" class="cursor-pointer">
                            <div class="w-10 h-10 bg-blue-700 hover:bg-blue-300 rounded-full text-center"><div><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                                        image
                                    </span></div></div>
                            <input type="file" name="user_image" size="20" id="post-upload-image" class="hidden"/>
                        </label>

                    </div>
                </div>
            </div>
            <!-- POSTINGAN -->
            <div id="postingan-timeline"></div>

        </div>

        <!-- right side -->
        <div class="bg-gray-100 h-full w-72 overflow-y-scroll hide-scrollbar">
            <div class="w-full min-h-72 bg-gray-700">
            <div class="bg-green-300 rounded-md text-center">Groub Anda</div>
                sugest friend
            </div>

            <div class="w-full h-40 bg-red-400">
                Groub
            </div>
        </div>


    </div>
</div>

<script src=" <?= base_url( 'assets/js/home_page/doman.js' ) ?> "></script>
<script src=" <?= base_url( 'assets/js/home_page/ajax.js' ) ?> "></script>