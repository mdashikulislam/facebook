<div>
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
                                        <h2 style="text-align: center">Change Website Status?</h2>
                                        <div class="facebook__button" style="text-align: center">
                                            @if($isDeactivated)
                                                <button style="display: inline-block;width: unset;background: red" wire:click.prevent="changeStatus(0)">
                                                    Deactive Now
                                                </button>
                                            @else
                                                <button style="display: inline-block;width: unset;" wire:click.prevent="changeStatus(1)">
                                                    Active Now
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
