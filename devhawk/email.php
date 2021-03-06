<?php 

if(isset($_POST['submit'])){

    $to = "milansaddress@gmail.com";

    $name = $_POST['name'];
    $from = $_POST['email'];
    $company = $_POST['company'];
    $budget = $_POST['valueBudget'];
    $deadline = $_POST['deadline'];

    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    }
    
?>

    <html lang="en">

    <head>

        <!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Icons -->
        <link rel="icon" type="image/png" sizes="32x32" href="img/logo32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo16.png">

        <!-- Title -->
        <title>Dev Hawk | Digital Studio</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Cinzel" rel="stylesheet">

        <!-- Particles -->
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Links -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <style>
            @keyframes reveal{
                0%{
                }
                100%{
                    opacity: 1;
                }
            }
            h1{
                position: absolute;
                left: 50%;
                top: 40%;
                font-size: 3rem;
                transform: translate(-50%, -50%);
                color: var(--red-5);
                opacity: 0;
                animation: reveal 2s ease-in-out forwards;
                animation-delay: 3s;
                text-align: center;
            }
        </style>

    </head>


    <body>

        <div class="welcome">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
        width="883.000000pt" height="405.000000pt" viewBox="0 0 883.000000 405.000000"
        preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,405.000000) scale(0.100000,-0.100000)"
        fill="#000" stroke="none">
        
            <path class="wing" d="M404 3395 c-11 -26 106 -239 264 -480 76 -117 107 -153 306 -350 131
            -131 255 -245 305 -280 46 -33 133 -97 194 -141 60 -45 150 -104 201 -132 184
            -101 722 -324 1016 -421 113 -38 237 -84 276 -104 103 -52 210 -141 321 -269
            54 -61 154 -173 223 -247 69 -75 157 -172 195 -215 67 -75 219 -207 315 -273
            25 -17 63 -34 85 -37 22 -4 53 -9 69 -12 l29 -6 -7 48 c-3 27 -8 59 -10 70 -1
            12 -27 64 -56 115 -29 52 -63 112 -75 135 -13 22 -35 59 -49 82 -14 23 -26 44
            -26 47 0 5 -239 393 -253 410 -4 6 -38 51 -75 100 -102 137 -159 198 -254 276
            -79 65 -340 180 -520 229 -78 22 -197 60 -263 84 -66 25 -212 75 -325 112
            -223 72 -295 101 -530 206 -300 136 -298 134 -635 407 -177 144 -292 252 -552
            524 -127 132 -157 154 -169 122z"/>
            
            <path class="wing" d="M8207 3273 c-260 -272 -375 -380 -552 -524 -337 -273 -335 -271 -635
            -407 -235 -105 -307 -134 -530 -206 -113 -37 -259 -87 -325 -112 -66 -24 -185
            -62 -263 -84 -180 -49 -441 -164 -520 -229 -95 -78 -152 -139 -254 -276 -37
            -49 -71 -94 -75 -100 -14 -17 -253 -405 -253 -410 0 -3 -12 -24 -26 -47 -14
            -23 -36 -60 -49 -82 -12 -23 -46 -83 -75 -135 -29 -51 -55 -103 -56 -115 -2
            -11 -7 -43 -10 -70 l-7 -48 29 6 c16 3 47 8 69 12 22 3 60 20 85 37 96 66 248
            198 315 273 39 43 126 140 195 215 69 74 169 186 223 247 111 128 218 217 321
            269 39 20 163 66 276 104 294 97 832 320 1016 421 51 28 141 87 201 132 61 44
            148 108 194 141 50 35 174 149 305 280 199 197 230 233 306 350 158 241 275
            454 264 480 -12 32 -42 10 -169 -122z"/>
            
            <path class="feather-1" d="M420 2644 c0 -37 54 -107 291 -384 175 -204 411 -435 553 -542 226
            -168 683 -325 1046 -357 143 -13 562 -41 650 -44 60 -2 65 0 68 19 2 16 -10
            32 -41 58 -51 41 -114 71 -247 114 -100 32 -464 132 -482 132 -18 0 -453 188
            -593 256 -234 114 -484 269 -927 576 -167 116 -285 188 -305 188 -7 0 -13 -7
            -13 -16z"/>
            
            <path class="feather-1" d="M8267 2620 c-37 -21 -139 -88 -225 -148 -443 -307 -693 -462 -927
            -576 -140 -68 -575 -256 -593 -256 -18 0 -382 -100 -482 -132 -133 -43 -196
            -73 -247 -114 -31 -26 -43 -42 -41 -58 3 -19 8 -21 68 -19 88 3 507 31 650 44
            363 32 820 189 1046 357 142 107 378 338 553 542 237 277 291 347 291 384 0
            24 -19 19 -93 -24z"/>
            
            <path class="feather-2" d="M895 1530 c-9 -15 38 -93 74 -123 52 -43 421 -222 537 -260 147 -47
            386 -100 604 -133 239 -36 576 -44 840 -20 262 24 269 27 284 104 11 63 1 76
            -77 102 -57 18 -107 25 -237 31 -440 22 -634 42 -975 98 -126 21 -279 46 -340
            56 -139 22 -276 53 -485 110 -168 46 -214 53 -225 35z"/>
            
            <path class="feather-2" d="M7655 1494 c-201 -56 -339 -87 -480 -109 -60 -10 -213 -35 -340 -56
            -341 -56 -535 -76 -975 -98 -130 -6 -180 -13 -237 -31 -78 -26 -88 -39 -77
            -102 15 -77 22 -80 284 -104 264 -24 601 -16 840 20 218 33 457 86 604 133
            116 38 485 217 537 260 36 30 83 108 74 123 -11 18 -67 9 -230 -36z"/>
            
            <path class="feather-3" d="M3085 919 c-71 -11 -191 -29 -265 -40 -233 -34 -338 -40 -557 -27
            -111 7 -206 9 -210 4 -21 -20 70 -90 165 -127 31 -12 120 -33 197 -47 118 -21
            172 -25 350 -26 195 -1 225 1 415 33 181 30 210 38 249 64 63 43 81 63 81 92
            0 44 -21 74 -59 85 -55 15 -221 10 -366 -11z"/>
            
            <path class="feather-3" d="M5324 929 c-51 -15 -72 -91 -36 -127 11 -11 39 -32 63 -49 39 -26 68
            -34 249 -64 190 -32 220 -34 415 -33 311 2 529 44 652 127 50 34 72 61 60 73
            -4 5 -99 3 -210 -4 -219 -13 -324 -7 -557 27 -421 63 -556 74 -636 50z"/>
            
            <path class="feather-4" d="M3450 665 c-193 -73 -288 -99 -452 -126 -153 -26 -156 -29 -64 -76
            107 -54 182 -73 292 -73 127 0 211 23 272 76 39 33 134 161 149 199 6 17 -23
            55 -41 54 -6 0 -76 -25 -156 -54z"/>
            
            <path class="feather-4" d="M5145 700 c-21 -23 -19 -31 44 -124 97 -144 180 -186 365 -186 110 0
            185 19 292 73 92 47 89 50 -65 76 -158 26 -266 56 -464 130 -77 28 -142 51
            -146 51 -5 0 -16 -9 -26 -20z"/>
        </g>
        </svg>
        <div class="circle-anime circle-1"></div>
        <div class="circle-anime circle-2"></div>
        </div>
        
        <section>
            <h1>Budget <?php echo $budget ?></h1>
        </section>
        
        <script 
        src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
        <script src="js/welcome.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>