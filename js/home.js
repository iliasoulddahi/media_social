
        /**
         * Dom Manipulation Function
         */
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