

<!-- PEMBUNGKUS UTAMA -->
<style>  
        .custom-layout-main-wrapper{
            display: flex;
            justify-content: space-evenly;
            align-items: flex-start;
            flex-wrap: wrap-reverse;
            position: relative;
        }
        .custom-layout-main-wrapper .left{
            width: 350px;
            height: 100vh;
            background-color: aqua;
        }
        .custom-layout-main-wrapper .center{
            width: 750px;
            height: 100vh;
            background-color: aquamarine;
        }
        .custom-layout-main-wrapper .online-user{
            width: 65px;
            position: fixed;
            right: 2px;
            top: 75px;
        }
        .custom-triangle{
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
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }
    </style>

    <!-- wrapper -->
<div class="">
    <!-- main wrapper -->
    <div class="custom-layout-main-wrapper">
        <!-- online user -->
        <div class="online-user">
            <span class="material-icons text-2xl bg-pink-400 w-full">
                keyboard_double_arrow_left
                </span>
            <div class="bg-blue-300 w-full h-auto text-center ">
                <div class="relative font-semibold w-11/12 bg-gray-500 mx-auto rounded-md text-right"> <div class="bg-green-300 w-2 h-2 rounded absolute mt-2"></div> Online</div> <hr class="border-black mt-1">
                <div class="bg-blue-200 border-b border-gray-500 mb-1 rounded-md">user a</div>
                <div class="bg-blue-200 border-b border-gray-500 mb-1 rounded-md">user a</div>
                <div class="bg-blue-200 border-b border-gray-500 mb-1 rounded-md">user a</div>
                <div class="bg-blue-200 border-b border-gray-500 mb-1 rounded-md">user a</div>
                <div class="bg-blue-200 border-b border-gray-500 mb-1 rounded-md">user a</div>
            </div>
        </div>
        <div class="left">left</div>
        <!-- scrollable -->
        <div class="center overflow-y-scroll hide-scrollbar">
            <div class="bg-gray-500 w-full h-72 relative">
                    <img src="<?= base_url('assets/img/default_profile_pria.jpg')?>" alt="" class="absolute w-14 h-14 bg-blue-700 rounded-full bottom-2 left-2">
                        <div class="absolute bg-gray-800 w-4/5 h-44 right-4 top-3 rounded-lg">
                            <form action="index.html" method="post">

                                <textarea name="user_post" id="user_post" cols="" rows="7" placeholder="Apa Yang Anda Pikirkan?" class="w-full rounded-md bg-white p-2 border-1 focus:border-0"></textarea>

                                <button type="submit" class="absolute bg-indigo-600 rounded-sm bottom-3 right-3 p-1">Send Post</button>
                            </form>
                        </div>
                    <label class="custom-triangle absolute bottom-24 left-14" for="user_post"></label>
                <div class="flex justify-between items-center absolute bg-blue-400 w-3/5 h-14 bottom-6 right-4 ">
                    <div class="w-28 h-10 bg-blue-700 hover:bg-blue-300 rounded-lg text-left"><a href="#" class="flex justify-center text-blue-300 hover:text-blue-700 text-sm"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                        image
                    </span> Upload Gambar </a></div>
                    <div class="w-28 h-10 bg-blue-700 hover:bg-blue-300 rounded-lg text-left"><a href="#" class="flex justify-center text-blue-300 hover:text-blue-700 text-sm"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                        snippet_folder
                    </span> Upload </a></div>
                    <div class="w-28 h-10 bg-blue-700 hover:bg-blue-300 rounded-lg text-left"><a href="#" class="flex justify-center text-blue-300 hover:text-blue-700 text-sm"><span class="material-icons text-blue-300 hover:text-blue-700 text-4xl">
                        image
                    </span> Upload <br> Gambar </a></div>
                </div>
            </div>

            
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, itaque?</div>
        </div>
    </div>
</div>



<script>

</script>