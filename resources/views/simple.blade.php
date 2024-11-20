<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .home-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #111;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            z-index: 750;
            color: #fff;
        }
        .home-loader .home-loader-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }
        .home-loader .home-loader-spinner svg {
            top: 0;
            left: 0;
        }
        .spinner.spinner-stripes svg {
            top: 12.5%;
            left: 12.5%;
            position: relative;
        }
        .home-loader .home-loader-spinner {
            width: 180px;
            height: 180px;
        }
        .spinner {
            width: 120px;
            height: 120px;
            position: relative;
            display: block;
        }
        .home-loader .home-loader-spinner .stripes {
            display: none;
        }
        .spinner.spinner-stripes .stripes {
            opacity: 1;
            top: -12.5%;
            left: -12.5%;
            width: 120px;
            height: 120px;
            position: absolute;
            background: url({{asset('diagonal-stripes.svg')}}) 50% / cover repeat;
        }
    </style>
</head>
<body>
<div>

    <div class="home-loader">
        <img src="world.png" class="icon ic-site-logo home-loader-logo" alt="">
        <span class="spinner spinner-stripes home-loader-spinner">
            <div class="stripes"></div>
            <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                <rect class="bg-path" fill="none" stroke-linecap="square" x="1" y="1" stroke-width="1" width="118"
                    height="118"></rect>
                <rect class="path" fill="none" stroke-linecap="square" x="1" y="1" stroke-width="1"
                      width="118" height="118"></rect>
            </svg>
        </span>
    </div>
</div>
</body>
</html>
