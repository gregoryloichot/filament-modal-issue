@foreach($getRecord()->comments as $comment)
    <div>
        <x-filament::modal
            id="comment-{{$comment->id}}"
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
                <x-filament::button id="button-comment-{{$comment->id}}" type="button">
                    {{$comment->title}}
                </x-filament::button>
            </x-slot>
            <x-slot name="heading">
                <x-filament::section>
                    <x-slot name="heading">
                        {{$comment->title}}
                    </x-slot>

                    {{$comment->body}}
                </x-filament::section>
            </x-slot>
            <x-slot name="footerActions">
                <x-filament::button type="button" x-on:click="isOpen = false">
                    Close
                </x-filament::button>
            </x-slot>
        </x-filament::modal>
    </div>
@endforeach
