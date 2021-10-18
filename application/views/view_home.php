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
        <div id="notification-info-notification">

        </div>
    </div>
</div>
</div>

<div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url('js/home.js') ?>"></script>

    <!-- AJAX FUNCTION -->
    <script>
        /**
         * AJAX FUNCTION
         */
        //friend search
        $(document).ready(function(e) {
            $('#keyword_add_friend_search').on('keyup', function() {
                $.ajax({
                    url: "<?= base_url('notification/search_friend') ?>",
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

        const add_friend = (id_receiver) => {
            $.ajax({
                url: "<?= base_url('friend/add_friend') ?>",
                method: "POST",
                data: {
                    'receiver_id': id_receiver
                },
                success: function(msg) {
                    $(`#add-friend-${id_receiver}`).hide('fast')
                }
            })
        }

        const accept_friend = (id_requester) => {
            $.ajax({
                url: "<?= base_url('friend/accept_friend') ?>",
                method: "POST",
                data: {
                    'requester_id': id_requester
                },
                success: function(msg) {
                    $(`#accept-friend-${id_requester}`).hide('fast')
                }
            })
        }

        /*
         *   NOTIFICATION
         */

        $.ajax({
            url: "<?= base_url('notification') ?>",
            method: 'POST',
            success: function(data) {
                $('#notification-info-notification').html(data);


                $.ajax({
                    url: "<?= base_url('posting/time_line') ?>",
                    method: 'POST',
                    success: function(data) {
                        $('#postingan-timeline').html(data);

                    }
                })
            }
        })
    </script>