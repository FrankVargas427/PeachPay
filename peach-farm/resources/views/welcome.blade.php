<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PeachFarm</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home-documents.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">

    <script src="{{ asset('dist/js/crypto.js') }}"></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <svg height="25" viewBox="0 0 710 555" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid meet" version="1.0">
                        <g id="svg_1">
                            <path fill="#7ed957"
                                d="m221.87999,68.65722c4.22656,0.6875 7.09375,4.66797 6.40625,8.88281c-0.68359,4.22656 -4.66406,7.09375 -8.87891,6.41016c-12.32812,-2 -24.73437,-3.33594 -37.17578,-4.01563c-12.50781,-0.67968 -25,-0.6914 -37.40234,-0.05468c-4.26563,0.22265 -7.91016,-3.05079 -8.13281,-7.32032c-0.23047,-4.25781 3.05078,-7.90234 7.30859,-8.13281c13.05078,-0.67187 26.09766,-0.65625 39.07422,0.04297c12.97266,0.71094 25.92969,2.10547 38.80078,4.1875zm-196.97266,-8.95313c-4.26562,0.23829 -7.92187,-3.02343 -8.16406,-7.28906c-0.23828,-4.25781 3.02344,-7.91406 7.27735,-8.15234c24.70312,-1.36719 50.94921,-5.77735 77.66796,-10.27344c72.67969,-12.20703 148.75391,-24.99219 211.65625,18.51563c3.51172,2.42578 4.40235,7.23828 1.98047,10.76171c-2.42187,3.51563 -7.23828,4.39844 -10.75,1.97657c-57.77734,-39.96094 -130.67578,-27.71094 -200.32031,-16.01172c-27.20312,4.57422 -53.93359,9.0625 -79.34766,10.47265zm118.19532,49.55469c4.21484,0.69141 7.08203,4.66797 6.39843,8.89453c-0.6875,4.21875 -4.66406,7.08203 -8.88281,6.39453c-17.15234,-2.83203 -33.48437,-8.22265 -48.39062,-14.82812c-18.67578,-8.26953 -35.19922,-18.47656 -48.32422,-27.90625c-3.46485,-2.5 -4.24219,-7.33594 -1.7461,-10.80078c2.5,-3.46485 7.33204,-4.24219 10.79688,-1.74219c12.33203,8.85547 27.89453,18.47266 45.54687,26.28516c13.83204,6.12109 28.90235,11.10937 44.60157,13.70312"
                                fill-rule="nonzero" id="svg_18" />
                            <path fill="#7ed957"
                                d="m475.24718,11.34472c3.03125,-3.00781 7.92969,-2.97656 10.93359,0.05469c3.00391,3.03125 2.97266,7.92187 -0.05859,10.92578c-6.41406,6.35156 -10.79688,14.67187 -13.5,23.70312c-3.22656,10.76172 -4.05469,22.50391 -3.11328,33.20313c0.375,4.25 -2.76563,8.01172 -7.01953,8.38672c-4.25,0.375 -8.00391,-2.76953 -8.38672,-7.02735c-1.10157,-12.45703 -0.10157,-26.22656 3.71875,-38.98828c3.41015,-11.37109 9.04297,-21.97656 17.42578,-30.25781zm-454.95313,310.12109c-2.28125,3.60547 -7.0664,4.6836 -10.67187,2.39453c-3.60547,-2.28906 -4.6836,-7.0664 -2.39453,-10.67187c59.16015,-93.17578 100.12109,-148.86328 147.86328,-183.44922c48.11719,-34.86328 102.24609,-47.86719 187.53125,-55.48828c3.43359,-0.30469 5.44531,-0.47656 7.50781,-0.64453c30.55078,-2.53516 69.49219,-5.76953 81.02734,-35.4375c1.4961,-3.875 2.46094,-8.14063 2.70704,-12.61719c0.23437,-4.19922 -0.15625,-8.57422 -1.30079,-12.96484c-1.07031,-4.14063 1.41407,-8.36328 5.55079,-9.4336c4.14062,-1.07031 8.35937,1.41797 9.42968,5.55078c1.56641,6.01172 2.10157,11.96875 1.78125,17.6875c-0.33984,6.11719 -1.67187,11.9961 -3.76953,17.39454c-15.02734,38.67578 -59.35156,42.34765 -94.11719,45.23828c-3.01953,0.25 -5.99218,0.49609 -7.39453,0.62109c-82.39453,7.37109 -134.42968,19.73438 -179.87109,52.66016c-45.82031,33.1914 -85.79688,87.69531 -143.87891,179.16015zm164.21094,-37.49609c3.97656,-1.55078 8.45703,0.41406 10.00781,4.39062c1.5586,3.97657 -0.41797,8.45704 -4.39453,10.00782c-22.25781,8.70703 -45.49219,14.8164 -67.60156,19.04297c-28.83203,5.51171 -55.72266,7.80468 -75.97656,8.4375c-4.26563,0.14062 -7.83594,-3.20313 -7.97657,-7.46875c-0.14062,-4.26563 3.19922,-7.83985 7.46485,-7.98047c19.64453,-0.61328 45.70312,-2.83594 73.5625,-8.16407c21.24609,-4.05859 43.57422,-9.92968 64.91406,-18.26562zm35.95703,-119.50391c3.81641,-1.91015 8.47266,-0.35937 10.38281,3.46485c1.91016,3.8164 0.36329,8.47265 -3.45312,10.38281c-17.76172,8.89062 -34.64453,19.16406 -50.50781,30.67187c-15.96485,11.58204 -30.9961,24.48829 -44.92578,38.55469c-3.00782,3.03906 -7.90625,3.05469 -10.94532,0.04688c-3.03515,-3.00782 -3.05078,-7.90625 -0.04297,-10.94532c14.44141,-14.58203 30.10547,-28.01953 46.84375,-40.16015c16.63672,-12.07031 34.23829,-22.78906 52.64844,-32.01563"
                                fill-rule="nonzero" id="svg_22" />
                            <path fill="#03989e"
                                d="m460.23937,121.33691c-3.40625,2.55468 -8.23829,1.88281 -10.8086,-1.53125c-2.5664,-3.40625 -1.88281,-8.25 1.52735,-10.82032c17.41406,-13.11718 38.10156,-22.01562 59.6875,-26.23828c21.59765,-4.21484 44.13671,-3.75781 65.22656,1.83203c16.92578,4.48047 32.375,11.92579 46.20312,21.59766c14.69141,10.27344 27.55469,23.06641 38.42969,37.49219c19.82031,26.27344 32.44922,56.8125 38.72266,88.83594c6.70312,34.24218 6.14843,70.16406 -0.66016,104.36718c-3.92578,19.79297 -9.97266,38.78125 -17.83594,56.86328c-8.13281,18.6836 -18.20703,36.37891 -29.9414,52.98047c-10.28125,14.5586 -21.82032,28.2461 -34.41407,41.00782c-12.79687,12.97265 -26.75781,25.03906 -41.66015,36.10546c-18.60156,13.81641 -35.10547,21.88282 -52.63672,25.67188c-17.42969,3.76172 -35.53516,3.20703 -57.51563,-0.21484c-20.0039,-3.10547 -40.21093,-8.44141 -60.0625,-15.77344c-19.85156,-7.34375 -39.34765,-16.6836 -57.89062,-27.80078c-18.08984,-10.83985 -35.38672,-23.41797 -51.24219,-37.54297c-15.23047,-13.5586 -29.1875,-28.57031 -41.30859,-44.8711c-28.78906,-38.72656 -46.57422,-85.49609 -47.89063,-131.89062c-1.19531,-42.28906 11.23438,-84.24219 41.38282,-119.58594c27.42578,-32.15234 65.875,-53.6914 106.24218,-59.07812c37.38282,-4.9961 76.36719,3.76953 109.77735,30.64062c30.91406,24.85938 53.05078,61.03906 66.37109,102.39844c14.08594,43.6875 18.36328,93.28906 12.82031,141.41016c-0.47265,4.25 -4.30468,7.30859 -8.55468,6.82421c-4.25,-0.46875 -7.30469,-4.30078 -6.83594,-8.55078c5.30469,-45.98828 1.23437,-93.33984 -12.1836,-134.98437c-12.4375,-38.58985 -32.89453,-72.1836 -61.32421,-95.04688c-29.82813,-23.98828 -64.6211,-31.82422 -97.98047,-27.36328c-36.6211,4.89453 -71.58203,24.51953 -96.58203,53.82813c-27.44922,32.17578 -38.76563,70.4375 -37.67579,109.05468c1.22266,43.17579 17.88282,86.83204 44.83985,123.10157c11.48437,15.4414 24.72656,29.68359 39.1914,42.57031c15.19532,13.52344 31.69922,25.53516 48.88282,35.83203c17.74218,10.64063 36.36718,19.56641 55.30859,26.56641c18.87109,6.97656 38.07813,12.05468 57.07422,15.0039c20.14844,3.12891 36.53906,3.6875 51.93359,0.36719c15.27344,-3.30078 29.89844,-10.52734 46.67578,-22.98437c14.15235,-10.51563 27.50782,-22.0625 39.86329,-34.58985c12.00781,-12.16797 22.99218,-25.20312 32.76171,-39.01953c11.11329,-15.73828 20.67188,-32.50781 28.375,-50.21484c7.42188,-17.0586 13.1211,-35 16.84766,-53.71094c6.4375,-32.36328 6.98438,-66.25781 0.67969,-98.44531c-5.83985,-29.79688 -17.54688,-58.15235 -35.89063,-82.47657c-9.89843,-13.12109 -21.58984,-24.75781 -34.93359,-34.08593c-12.38672,-8.66407 -26.20703,-15.33203 -41.32813,-19.33985c-18.83593,-4.98047 -38.98437,-5.38281 -58.33203,-1.60547c-19.32812,3.77344 -37.80859,11.71485 -53.33593,23.41407"
                                fill-rule="nonzero" id="svg_28" />
                        </g>
                    </svg>
                    <span class="brand-text font-weight-light">PeachFarm</span>
                </a>
                
                @if (Route::has('login'))
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        @auth
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a>Balance:</a>
                            <label id="balTop"></label>
                        </div>
                        @else
                        <div class="text-center py-8 border-t border-gray-200" x-data="{
                            loading: false,
                            loginSignatureUrl: '{{ route('metamask.signature') }}',
                            loginUrl: '{{ route('metamask.authenticate') }}',
                            redirectUrl : '/',
                        }">
                            <button x-bind:disabled="loading" @click="async () => {
                                loading = true;     
                                
                                const web3 = new Web3(window.ethereum);                  
                                
                                // Fetch nonce
                                const message = (await axios.get(loginSignatureUrl)).data;
                                // Get wallet address
                                const address = (await web3.eth.requestAccounts())[0];
                                // Sign message
                                const signature = await web3.eth.personal.sign(message, address);
                                
                                try {
                                   let response = await axios.post(loginUrl, {
                                       'address': address,
                                       'signature': signature,
                                   });
                                  
                                   window.location.href = redirectUrl;
                                } catch(e) {
                                   alert(e.message);
                                }
                                                                      
                                loading = false;                                      
                            }" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Login with MetaMask
                            </button>
                        </div>
                        @endauth
                    </li>
                </ul>
                @endif

            </div>
        </nav>

        <div class="content-wrapper">
            <div class="content">
                <div class="container flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div class="row justify-center">
                        <div class="mt-8 justify-center bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div class="grid justify-center grid-cols-1 md:grid-cols-2">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="w-8 h-8 text-gray-100">
                                            <path
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a>Stake</a></div>
                                    </div>

                                    <div class="ml-12">
                                        <form id="stake" role="form">
                                            <input type="number" name="staking" id="staking" pattern='[0-9]+'>
                                            <input type="submit" value="Stake">
                                        </form>
                                    </div>
                                </div>

                                <div
                                    class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    <div class="flex items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            class="w-8 h-8 text-gray-100">
                                            <path
                                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                            </path>
                                            <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold"><a>Unstake</a></div>
                                    </div>

                                    <div class="ml-12">
                                        <form id="unstake" role="form">
                                            <input type="submit" value="Unstake">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="container">
                <div class="row justify-content-md-center">
                    <p>From PeachPay</p>
                </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js')}}"></script>
</body>

</html>