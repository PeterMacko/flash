@if (session()->has('flash_notification.messages'))
    <?php $messages = session('flash_notification.messages') ?>
    @foreach($messages as $message)
        @if ($message['overlay'])
            @include('flash::modal', [
                'modalClass' => 'flash-modal',
                'title'      => $message['title'],
                'body'       => $message['message']
            ])
        @else
            <div class="alert alert-{{ $message['level'] }}">
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true">&times;</button>

                {!! $message['message'] !!}
            </div>
        @endif
    @endforeach
@endif
