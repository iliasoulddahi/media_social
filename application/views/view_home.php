<!-- PEMBUNGKUS UTAMA -->

<!-- wrapper -->
<div class="h-5/6 md:flex justify-evenly bg-gray-500 w-full md:w-5/6 lg:w-3/4 xl:w-3/4 mx-auto mt-5">
    <!-- main wrapper -->
    <div class="flex justify-center items-start">
        <!-- sidebar left -->

            <div class="flex flex-col h-full w-28 overflow-y-scroll hide-scrollbar mt-4">
                <div id="home-friend-list">
                    
                </div>
            </div>


        <!-- scrollable -->
        <!-- center main wrapper -->
        <div class="overflow-y-scroll hide-scrollbar w-650px h-full">
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
                    <div class="flex justify-between w-28 absolute right-24 bottom-2">
                        <div class="w-10 h-10 bg-blue-700 hover:bg-blue-300 rounded-full text-center"><button href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                                    image
                                </span></button></div>
                        <div class="w-10 h-10 bg-blue-700 hover:bg-blue-300 rounded-full text-center "><button href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                                    source
                                </span></button></div>
                    </div>
                </div>
            </div>
            <!-- POSTINGAN -->
            <div id="postingan-timeline"></div>

        </div>


    </div>
</div>

    