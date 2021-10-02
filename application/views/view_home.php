<!-- PEMBUNGKUS UTAMA -->
<style>
    .custom-layout-main-wrapper {
        display: flex;
        justify-content: space-evenly;
        align-items: flex-start;
        flex-wrap: wrap-reverse;
        position: relative;
    }

    .custom-layout-main-wrapper .left {
        width: 350px;
        height: 100vh;
        background-color: aqua;
    }

    .custom-layout-main-wrapper .center {
        width: 800px;
        height: 100vh;
        background-color: aquamarine;
    }

    .custom-triangle {
        width: 0;
        height: 0;
        border-left: 100px solid transparent;
        border-right: 100px solid transparent;
        border-bottom: 50px solid white;
        transform: rotate(-20deg);
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
</style>

<!-- wrapper -->
<div class="">
    <!-- main wrapper -->
    <div class="custom-layout-main-wrapper">
        <!-- sidebar left -->
        <div class="left flex flex-col p-3">
            <!-- online user tailwind grid -->
            <div class="w-full bg-gray-500 mb-3 shadow-xl">
                <div class="text-2xl border-b border-gray-700">Teman</div>
                <div class="flex flex-wrap items-center w-11/12 mx-auto mt-4">
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>
                    <div class="bg-white w-16 h-16 rounded-full ml-2 mb-4"></div>

                </div>
            </div>
            <!-- scroolable -->
            <div class="w-full h-full bg-gray-500 rounded-md shadow-xl overflow-y-scroll hide-scrollbar">
                <!-- postingan anda -->
                <div class="text-2xl border-b border-gray-700">Postingan Anda</div>
                <div class="w-full bg-red-400 rounded-2xl mt-3 pb-2">
                    <div class="flex justify-between w-full">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/img/' . $profil_image) ?>" alt="" class="w-10 h-10 bg-white rounded-tl-xl">
                            <div class="text-lg"><?= $name; ?></div>
                        </div>
                        <div class="font-light mt-4 mr-3">01/01/2021-12.00</div>
                    </div>

                    <div class="mt-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum dolores sunt quibusdam reiciendis repellat molestias veniam eos autem rem velit.
                    </div>
                </div>
            </div>
        </div>
        <!-- scrollable -->
        <!-- center main wrapper -->
        <div class="center overflow-y-scroll hide-scrollbar">
            <div class="bg-gray-500 w-full h-72 relative">
                <img src="<?= base_url('assets/img/' . $profil_image) ?>" alt="" class="transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 absolute w-14 h-14 rounded-full bottom-2 left-2">
                <div class="absolute bg-gray-800 w-4/5 h-5/6 right-4 top-3 rounded-lg">
                    <form action="index.html" method="post">

                        <textarea name="user_post" id="user_post" cols="" rows="10" placeholder="<?= $name . ' ' ?>Apa Yang Anda Pikirkan?" class="w-full rounded-md bg-white p-2 border-1 focus:border-0"></textarea>

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
                <label class="custom-triangle absolute bottom-24 left-14" for="user_post"></label>

            </div>
            <!-- POSTINGAN -->
            <div class="w-full bg-red-400 rounded-2xl mt-3 pb-3 relative">
                <div class="flex justify-between w-full">
                    <div class="flex items-center">
                        <img src="<?= base_url('assets/img/' . $profil_image) ?>" alt="" class="w-16 h-16 bg-white rounded-tl-xl">
                        <div class="text-xl"><?= $name; ?></div>
                    </div>
                    <div class="font-light mt-4 mr-3">01/01/2021-12.00</div>
                </div>

                <div class="mt-2 ml-3 text-xl">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum dolores sunt quibusdam reiciendis repellat molestias veniam eos autem rem velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, saepe? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam eum praesentium voluptate saepe temporibus laboriosam delectus, quibusdam sint recusandae unde?
                </div>

                <div class="flex w-72 min-w-max justify-between ml-56 mt-5">
                    <button href="#" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                            thumb_up
                        </span></button>
                    <button onclick="comentBtnExpandToInput()" id="btn-masukan-komen" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center" id="btn-coment"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                            insert_comment
                        </span></button>
                </div>
                <!-- form insert comment -->
                <form action="" method="post" id="form-comment" class="w-full px-3 hidden">
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
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= base_url("js/home.js"); ?>"></script>