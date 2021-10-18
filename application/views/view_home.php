<!-- PEMBUNGKUS UTAMA -->

<!-- wrapper -->
<div class="mt-4">
    <!-- main wrapper -->
    <div class="flex justify-center items-start">
        <!-- sidebar left -->
        <div class="flex flex-col p-3 w-28 h-screen">
            <div class="flex flex-wrap items-center h-screen w-11/12 overflow-y-scroll hide-scrollbar">
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>
                <div class="bg-white rounded-full m-auto mb-3 w-8 sm:w-10 md:w-14 xl:w-16 h-8 sm:h-10 md:h-14 xl:h-16"></div>

            </div>
        </div>

        <!-- scrollable -->
        <!-- center main wrapper -->
        <div class="overflow-y-scroll hide-scrollbar w-50rem h-screen">
            <div class="bg-gray-500 w-full h-72 relative p-3">
                <div class="bg-gray-800 w-full rounded-lg relative">
                    <form action="<?= base_url('posting/add') ?>" method="post">
                        <textarea name="user_post" id="user_post" cols="" rows="8" placeholder="<?= $name . ' ' ?>Apa Yang Anda Pikirkan?" class="w-full rounded-md bg-white p-2 border-1 focus:border-0 text-xl" required></textarea>

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

        <div class="bg-red-100 w-80 h-screen">

        </div>
    </div>
</div>

    