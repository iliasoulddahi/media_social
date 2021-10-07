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
<div class="mt-4">
    <!-- main wrapper -->
    <div class="custom-layout-main-wrapper">
        <!-- sidebar left -->
        <div class="left flex flex-col p-3">

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
                <div class="text-2xl border-b border-gray-700">Postingan Anda</div>
                <!-- 
                    -(postingan anda)-
                    1. Proses check apabila post tersedia di database
                    2. Proses perulangan dari array yang mengkoleksi data post 
                -->
                <?php if (count($post_anda) < 1) : ?>
                    <div>POSTINGAN TIDAK ADA</div>
                <?php else : ?>
                    <?php foreach ($post_anda as $p) : ?>
                        <div class="w-full bg-red-400 rounded-2xl mt-3 pb-2">
                            <div class="flex justify-between w-full">
                                <div class="flex items-center">
                                    <img src="<?= base_url('assets/img/' . $profile_image) ?>" alt="" class="w-10 h-10 bg-white rounded-tl-xl">
                                    <div class="text-lg"><?= $name; ?></div>
                                </div>
                                <div class="font-light mt-4 mr-3"><?= $p['date_created'] ?></div>
                            </div>
                            <!-- content postingan anda -->
                            <div class="mt-2">
                                <?= $p['post_content'] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- scrollable -->
        <!-- center main wrapper -->
        <div class="center overflow-y-scroll hide-scrollbar">
            <div class="bg-gray-500 w-full h-72 relative">
                <img src="<?= base_url('assets/img/' . $profile_image) ?>" alt="" class="transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 absolute w-14 h-14 rounded-full bottom-2 left-2">
                <div class="absolute bg-gray-800 w-4/5 h-5/6 right-4 top-3 rounded-lg">
                    <form action="<?= base_url('posting/add') ?>" method="post">

                        <textarea name="user_post" id="user_post" cols="" rows="10" placeholder="<?= $name . ' ' ?>Apa Yang Anda Pikirkan?" class="w-full rounded-md bg-white p-2 border-1 focus:border-0" required></textarea>

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
                        <img src="<?= base_url('assets/img/' . $profile_image) ?>" alt="" class="w-16 h-16 bg-white rounded-tl-xl">
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
                    <button onclick="showAndHide('#form-comment')" id="btn-masukan-komen" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center" id="btn-comment"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                            insert_comment
                        </span></button>
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
        </div>
    </div>
</div>

<!-- navbar info - notification di paling bawah agar overide-->
<div class="flex justify-between items-center absolute bg-blue-400 w-72 h-12 left-1/2 top-0 ">

    <div onclick="show('#notification-info-addfriend')" class="flex w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><a href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                person_add_alt
            </span></a>
    </div>
    <!-- notification info -->
    <div class="absolute bg-purple-200 w-full top-12 p-1 hidden" id="notification-info-addfriend">
        <form method="POST" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <input type="text" id="keyword_add_friend_search" name="keyword_add_friend_search" placeholder="Cari Teman">
            <button type="submit" class="bg-green-300" id="btn_search_friend">Cari</button>
        </form>
        <!-- form tambah teman -->
        <div id="add_friend_form">
            
        </div>
    </div>
    <div class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><a href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                groups
            </span></a></div>

    <div onclick="show('#notification-info-chat')" class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><a href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                chat
            </span></a></div>
    <!-- notification info chat-->
    <div class="absolute bg-purple-200 w-full h-44 top-12 p-1 overflow-y-scroll hide-scrollbar hidden" id="notification-info-chat">
        CHAT
    </div>
    <div onclick="show('#notification-info-notification-global')" class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><a href="#"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                notifications_none
            </span></a></div>
    <!-- notification info notification global-->
    <div class="absolute bg-purple-200 w-full h-44 top-12 -mr-60 p-1 overflow-y-scroll hide-scrollbar hidden" id="notification-info-notification-global">
        <form action="<?= base_url('friend/accept_friend') ?>" method="POST" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <div>Dony Siregar</div>
            <button class="bg-green-300" name="receiver" value="312">accept</button>
        </form>
    </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    /**
     * Api function
     */
    //add friend search
    $(document).ready(function(){
        $('#keyword_add_friend_search').on('keyup', function(){
            $.ajax({
                url: "<?=base_url('friend/search_friend')?>",
                method:'GET',
                data:{'keyword':$('#keyword_add_friend_search').val()},
                success:function(data){
                    $('#add_friend_form').html(data);
                }
            })
        })
    }) 
    /**
     * Dom Manipulation Function
     */
    function show(n) {
        var el = document.querySelector(n);
        if (!el.style.display || el.style.display == 'none') {
            el.style.display = 'block'
        } else {
            el.style.display = 'none'
        }
    }
</script>