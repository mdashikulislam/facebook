<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Select a Date &amp; Time - Calendly</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://assets.calendly.com/assets/favicon-bfb0492a754bdf44a0a58b969963f44235653cca09a1c0110309c1e03077e368.ico" />
    <link href="{{asset('style.css?t='.time())}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('calender/style.css?t='.time())}}">
    <link rel="stylesheet" href="{{asset('calender/theme.css?t='.time())}}">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="calender/calendar.js"></script>
{{--    <script src="//code.jivosite.com/widget/66ajFRUhiS" async></script>--}}

    <style>
        .week{
            margin: 0;
        }
        .week.highlight{
            background: transparent;
        }
        .week .day.selected span{
            background: #0069ff;
        }
        .week:not(.start-on-monday) .day:first-child{
            color: #000000d9;
        }
        .week:not(.start-on-monday) .day:first-child, .week:not(.start-on-monday) .day:last-child{
            color: #000000d9;
        }
        .week .day.highlight span{
            color: #000000d9;
        }
        .week .day.selected span{
            color: #fff;
        }
        .week .day[disabled="disabled"].highlight span{
            color: #aaa;
        }
        .mobile__version calendar__container{

        }
        .week .day[disabled="disabled"]{
            background: #ededed;
        }
        .week .day.header{
            font-weight: normal;
            font-size: 14px;
        }
        .buttons-container{
            justify-content: center;
            gap: 20px;
        }
        .buttons-container .label-container{
            flex: unset;
        }
        .day span{
            color: #959699;
            height: 45px;
            width: 45px;
            line-height: 45px;
        }
        .week .day.highlight span{
            color: #959699;
            font-weight: normal;
        }
        .week .day.selected.highlight span{
            color: #fff;
            font-weight: normal;
        }
        .day.today span::after{
            border: 0;
        }
        .day.today span{
            font-weight: normal;
        }
        .d-none{
            display: none;
        }
        .loading-container2{
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            text-align: center;
        }
        .loading-container2 .loader2{
            animation: rotation 1s linear infinite;
            border: 10px solid;
            border-color: #fff #fff #0000;
            border-radius: 50%;
            box-sizing: border-box;
            display: inline-block;
            height: 100px;
            width: 100px;
            margin-top: 50px;
        }
        .loading-container2 .loader2::after{
            animation: spin 1s infinite;
            border: 10px solid #0000;
            border-radius: 50%;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .loading-container2 .loader2::before{
            animation: spin 1s infinite;
            border: 10px solid #0000;
            border-radius: 50%;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            animation-delay: 0.5s;
            border-top-color: #1877f2;
        }
        .blue-btn{
            background-color: #00a2ff;
            color: #fff;
            border: none;
            display: inline-block;
            align-items: center;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 700;
            justify-content: center;
            min-height: 52px;
            padding: 13px 10px;
            transition: all 0.3s ease;
            transition-property: width, transform;
            vertical-align: top;
        }
        .blue-btn:hover{
            color: #fff;
        }
        @media only screen and (max-width: 600px) {
            .minute{
                display: flex;
                justify-content: center;
            }
        }
    </style>
    @livewireStyles
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
{{$slot}}
@livewireScripts
</body>
</html>
