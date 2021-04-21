<div>
    <div class="container mx-auto w-full h-full fixed">
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 7%"></div>
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-3 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                </div>
                <div class="order-2 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">言語知識（文字・漢字・文法）</h3>
                    <p class="text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-3 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                </div>
                <div class="order-2 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">言語知識（文字・漢字・文法）</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100 social-buttons">
                        <button class="neo-button">1 : A</button> <button class="neo-button">2 : C</button> <button class="neo-button">3 : D</button> <button class="neo-button">4 : D</button> <button class="neo-button">5 : C</button>
                </div>
            </div>

            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-3 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                </div>
                <div class="order-2 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">言語知識（文字・漢字・文法）</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100 social-buttons">
                        <button class="neo-button">1 : A</button> <button class="neo-button">2 : C</button> <button class="neo-button">3 : D</button> <button class="neo-button">4 : D</button> <button class="neo-button">5 : C</button>
                </div>
            </div>

            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-3 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                </div>
                <div class="order-2 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">言語知識（文字・漢字・文法）</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100 social-buttons">
                        <button class="neo-button">1 : A</button> <button class="neo-button">2 : C</button> <button class="neo-button">3 : D</button> <button class="neo-button">4 : D</button> <button class="neo-button">5 : C</button>
                </div>
            </div>

            <div>
                <a @click="openTab = 2" :class="{ 'active': openTab === 2 }" class="effect-button"> animation <span class="effect-button"></span>
                    <span class="effect-button"></span>
                    <span class="effect-button"></span>
                    <span class="effect-button"></span>
                </a>
            </div>
            <div>
                <a class="effect-button" type="submit"> animation <span class="effect-button"></span>
                    <span class="effect-button"></span>
                    <span class="effect-button"></span>
                    <span class="effect-button"></span>
                </a>
            </div>
        </div>
    </div>
    <style>


        * {
            font-family: 'Roboto', sans-serif;
            /*text-align: center*/
        }

        /*body {*/
        /*    background: #ebf5fc*/
        /*}*/

        /*.clock {*/
        /*    color: #000;*/
        /*    font-size: 56px;*/
        /*    !*text-align: center;*!*/
        /*    position: absolute;*/
        /*    top: 30%;*/
        /*    left: 70%;*/
        /*    !*transform: translate(-50%, -50%);*!*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    padding: 0 20px*/
        /*}*/

        /*h2 {*/
        /*    color: #85C1E9;*/
        /*    padding: 30px*/
        /*}*/

        /*#m {*/
        /*    margin: 0 10px 0 10px*/
        /*}*/

        /*.bg {*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    width: 1.5em;*/
        /*    height: 1.5em;*/
        /*    background: inherit;*/
        /*    position: relative;*/
        /*    border-radius: 50%;*/
        /*    box-shadow: inset -2px -2px 5px rgba(255, 255, 255, 1), inset 3px 3px 5px rgba(0, 0, 0, 0.2)*/
        /*}*/

        /*.bg:last-child {*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    background: inherit;*/
        /*    position: relative;*/
        /*    margin-left: 20px;*/
        /*    width: 2em;*/
        /*    height: 2em;*/
        /*    font-size: 16px;*/
        /*    padding: 15px;*/
        /*    border-radius: 50%;*/
        /*    box-shadow: inset -2px -2px 5px rgba(255, 255, 255, 1), inset 3px 3px 5px rgba(0, 0, 0, 0.2)*/
        /*}*/

        @import url(https://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            /*text-align: center;*/
            font-family: 'Calibri', sans-serif !important;
            background-color: #55b9f3
        }

        .social-buttons {
            margin-top: 20px
        }

        .social-buttons button {
            margin-right: 10px
        }

        .neo-button {
            width: 50px;
            height: 50px;
            cursor: pointer;
            border: none;
            outline: none;
            border-radius: 11px;
            background: linear-gradient(145deg, #5bc6ff, #4da7db);
            /*box-shadow: 6px 6px 13px #489dcf, -6px -6px 13px #62d5ff*/
        }

        .neo-button:hover {
            width: 70px;
            height: 70px;
            border: none;
            outline: none;
            border-radius: 11px;
            background: linear-gradient(145deg, #4da7db, #5bc6ff);
            /*box-shadow: inset 6px 6px 13px #489dcf, inset -6px -6px 13px #62d5ff*/
        }

        .neo-button .fa {
            color: #eee
        }

        a.effect-button {
            text-decoration: none;
            display: inline-block;
            position: relative;
            padding: 20px 40px;
            text-transform: uppercase;
            color: #ddd;
            background: linear-gradient(145deg, #4da7db, #5bc6ff);
            /*box-shadow: inset 6px 6px 13px #489dcf, inset -6px -6px 13px #62d5ff;*/
            font-size: 16px;
            margin: 20px;
            letter-spacing: 0.7em;
            border-radius: 2px
        }

        a.effect-button span.effect-button {
            position: absolute;
            display: block;
            background: Green;
        }

        a.effect-button span.effect-button:nth-child(1) {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.25s
        }

        a.effect-button:hover span.effect-button:nth-child(1) {
            transform: scaleX(1);
            transform-origin: left;
            transition: transform 0.25s
        }

        a.effect-button span.effect-button:nth-child(2) {
            right: 0;
            bottom: 0;
            width: 2px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.25s
        }

        a.effect-button:hover span.effect-button:nth-child(2) {
            transform: scaleY(1);
            transform-origin: bottom;
            transition: transform 0.25s;
            transition-delay: 0.25s
        }

        a.effect-button span.effect-button:nth-child(3) {
            top: 0;
            right: 0;
            width: 100%;
            height: 2px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.25s
        }

        a.effect-button:hover span.effect-button:nth-child(3) {
            transform: scaleX(1);
            transform-origin: right;
            transition: transform 0.25s;
            transition-delay: 0.35s
        }

        a.effect-button span.effect-button:nth-child(4) {
            top: 0;
            left: 0;
            width: 2px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: bottom
        }

        a.effect-button:hover span.effect-button:nth-child(4) {
            transform: scaleY(1);
            transform-origin: top;
            transition: transform 0.25s;
            transition-delay: 0.45s
        }

        a.effect-button:hover {
            transition: 0.5s;
            transition-delay: 1s;
            background: Green;
        }
    </style>
</div>
