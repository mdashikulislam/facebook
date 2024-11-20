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
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="calender/style.css">
    <link rel="stylesheet" href="calender/theme.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="calender/calendar.js"></script>
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
    </style>
    @livewireStyles
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
{{$slot}}
@livewireScripts
</body>
</html>