<!-- PEMBUNGKUS UTAMA -->
<style>
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

    textarea {
        resize: none;
    }

    .w-50rem{
        width: 50rem;
    }
</style>

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
        <div class="overflow-y-scroll hide-scrollbar w-50rem">
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

                <div class="flex w-full min-w-max justify-evenly mt-5">
                    <button href="#" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
                            thumb_up
                        </span></button>
                    <button id="btn-comment" class="w-14 h-8 bg-blue-700 hover:bg-blue-300 rounded-lg text-center" id="btn-comment"><span class="material-icons text-blue-300 hover:text-blue-700 text-xl">
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

        <div class="bg-red-100 w-80 h-screen">

        </div>
    </div>
</div>

<!-- navbar info - notification di paling bawah agar overide-->
<div class="flex justify-between items-center absolute bg-blue-400 w-96 h-12 left-1/2 top-0 ">

    <button id="notification-addfriend" class="flex w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                person_add_alt
            </span>
    </button>

    <button class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                groups
            </span></button>

    <button id="notification-chat" class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                chat
            </span></button>

    <button id="notification-global" class="w-10 h-10 transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-300 transform hover:-translate-y-1 hover:scale-105 rounded-sm text-center"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                notifications_none
            </span></button>

    <!-- notification info add friend-->
    <div class="absolute bg-purple-200 w-full top-0 hidden" id="notification-info-addfriend">
        <form autocomplete="off" method="POST" class="flex justify-between items-center bg-blue-900 w-full h-12">
            <input type="text" id="keyword_add_friend_search" name="keyword_add_friend_search" placeholder="Cari Teman" class="w-full h-full p-4">
        </form>
        <!-- form tambah teman -->
        <div id="add_friend_form">

        </div>
    </div>

    <!-- notification info chat-->
    <div class="absolute bg-purple-200 w-full h-44 top-12 p-1 overflow-y-scroll hide-scrollbar hidden" id="notification-info-chat">
        CHAT
    </div>

    <!-- notification info notification global-->
    <div class="absolute bg-purple-200 w-full h-44 top-12 -mr-60 p-1 overflow-y-scroll hide-scrollbar hidden" id="notification-info-notification-global">
        <form action="<?= base_url('friend/accept_friend') ?>" method="POST" class="flex justify-between items-center bg-blue-900 w-full h-10 border-b-2 border-black p-1 mb-2">
            <div>Dony Siregar</div>
            <button class="bg-green-300" name="receiver" value="312">accept</button>
        </form>
    </div>
</div>                    
</div>

<div>
    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    /**
     * Api function
     */
    //friend search
    $(document).ready(function(e) {
        $('#keyword_add_friend_search').on('keyup', function() {
            $.ajax({
                url: "<?= base_url('friend/search_friend') ?>",
                method: 'GET',
                data: {
                    'keyword': $('#keyword_add_friend_search').val()
                },
                success: function(data) {
                    $('#add_friend_form').html(data);
                }
            })
        });

        
    })
    /**
     * Dom Manipulation Function
     */
    $(document).ready(function(e) {

        const notifAddFriend = $("#notification-addfriend");
        const notifInfoAddFriend =$('#notification-info-addfriend')   
        notifAddFriend.click(function(e) {
            notifInfoAddFriend.animate({width : "show"});
        });
        $(document).mouseup(function(e) {
            if (!notifInfoAddFriend.is(e.target) && notifInfoAddFriend.has(e.target).length === 0 && !notifAddFriend.is(e.target) && notifAddFriend.has(e.target).length === 0) {
                notifInfoAddFriend.animate({width: "hide"});
            }
        });

        const notifChat = $('#notification-chat')
        const notifInfoChat = $("#notification-info-chat")
        notifChat.click(function(e) {
            notifInfoChat.toggle();
        });
        $(document).mouseup(function(e) {
            if (!notifInfoChat.is(e.target) && notifInfoChat.has(e.target).length === 0 && !notifChat.is(e.target) && notifChat.has(e.target).length === 0) {
                notifInfoChat.hide();
            }
        });

        const notifGlobal = $('#notification-global')
        const notifInfoGlobal = $("#notification-info-notification-global")
        notifGlobal.click(function(e) {
            notifInfoGlobal.toggle();
        });
        $(document).mouseup(function(e) {
            if (!notifInfoGlobal.is(e.target) && notifInfoGlobal.has(e.target).length === 0 && !notifGlobal.is(e.target) && notifGlobal.has(e.target).length === 0) {
                notifInfoGlobal.hide();
            }
        });
        //show insert comment
        const btnComment = $('#btn-comment')
        const formComment = $("#form-comment")
        btnComment.click(function(e) {
            formComment.toggle();
        });

    })
</script>