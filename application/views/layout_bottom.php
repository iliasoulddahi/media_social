<!-- navbar info - notification di paling bawah agar overide-->
<div class="flex justify-between items-center absolute bg-gray-500 w-96 h-12 left-1/2 top-0 ">

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
        <div id="add_friend_form" class="overflow-y-scroll hide-scrollbar max-h-56">

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

                        $.ajax({
                            url: "<?= base_url('friend/friends_list') ?>",
                            method: 'POST',
                            success: function(data) {
                                $('#home-friend-list').html(data);
                            }
                        })
                    }
                })
            }
        })


        //custom function
        function myToggle(target) {
            $('#' + target).toggle()
        }

        /**
         * Dom Manipulation Function
         */
        // DOCUMENT SUDAH READY FUNCTION
        $(document).ready(function(e) {


            const notifAddFriend = $("#notification-addfriend");
            const notifInfoAddFriend = $('#notification-info-addfriend')
            notifAddFriend.click(function(e) {
                notifInfoAddFriend.animate({
                    width: "show"
                });
            });
            $(document).mouseup(function(e) {
                if (!notifInfoAddFriend.is(e.target) && notifInfoAddFriend.has(e.target).length === 0 && !notifAddFriend.is(e.target) && notifAddFriend.has(e.target).length === 0) {
                    notifInfoAddFriend.animate({
                        width: "hide"
                    });
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



        //form upload
        $('#post-upload-image').change(function(e) {
            $.ajax({
                url: "<?= base_url('upload/do_upload') ?>",
                method: 'POST',
                success: function(data) {
                    console.log('ok')
                }
            })
        })
    </script>

    </body>

    </html>

    <!-- ini bottom memang sebagai penutup bawah page -->