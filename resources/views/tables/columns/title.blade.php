    <div>
        <x-filament::modal
            id="comment-{{$getRecord()->id}}"
            icon="heroicon-o-information-circle"
            icon-color="success"
            alignment="center"
            sticky-header
            sticky-footer
            width="5xl"
            isOpen="false"
            :close-by-clicking-away="true"
            :close-button="true">

            <x-slot name="trigger">
                <x-filament::button id="button-comment-{{$getRecord()->id}}" type="button">
                    {{$getRecord()->title}}
                </x-filament::button>
            </x-slot>
            <x-slot name="heading">
                <x-filament::section>
                    <x-slot name="heading">
                        {{$getRecord()->title}}
                    </x-slot>

                    {{$getRecord()->body}}
                </x-filament::section>
            </x-slot>
            <x-slot name="footerActions">
                <x-filament::button type="button" x-on:click="isOpen = false">
                    Close
                </x-filament::button>
            </x-slot>
        </x-filament::modal>
    </div>
