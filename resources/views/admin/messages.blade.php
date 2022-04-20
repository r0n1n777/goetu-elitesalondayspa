<div>
    <div class="p-3 bg-primary">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white">
                <x-feathericon-mail/>
                <b>Admin Messages Inbox</b>
            </h1>
        </div>
    </div>

    <div class="p-3 bg-secondary">
        <div class="container">
            @foreach($messages as $message)
            <div class="p-2 d-flex justify-content-between align-items-center border-primary border-bottom mb-3">
                <div>
                    <h3><b>Subject: {{ $message->subject }}</b></h3>
                    <span class="text-muted">
                        From: <b class="text-capitalize">{{ $message->name }}</b> | Date: {{ date('M d, Y - h:s a', strtotime($message->created_at)) }}
                    </span><br>
                    <span class="text-muted">
                        Sender's Email: <b>{{ $message->email }}</b>
                    </span><br>
                    <span class="text-muted">
                        Sender's Phone: <b>{{ $message->phone }}</b>
                    </span>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#show" wire:click="set({{ $message->id }})">
                        <x-feathericon-eye/> Show
                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{ $message->id }})">
                        <x-feathericon-trash-2/> Delete
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade"  tabindex="-1" id="show" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        <span class="text-capitalize">{{ $name }}:</span> {{ $subject }}
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <b>{{ $message_content }}</b><br>
                    <span class="text-muted">
                        Sender's Email: <b>{{ $email }}</b>
                    </span><br>
                    <span class="text-muted">
                        Sender's Phone: <b>{{ $phone }}</b>
                    </span>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    {{-- Delete --}}
    <div class="modal fade"  tabindex="-1" id="delete" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Are you sure to delete this message?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>{{ $subject }}</h1>
                    <b>{{ $message_content }}</b>
                </div>
                <div class="modal-footer">
                    <b class="text-success ml-0" wire:loading wire:target="delete">
                        Deleting Record...
                    </b>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <x-feathericon-x/> Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="delete" wire:loading.attr="disabled">
                        <x-feathericon-check/> Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Success --}}
    <div class="modal fade" tabindex="-1" id="success">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white">Success</h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h1>{!! session('success') !!}</h1>
                </div>
                <div class="modal-footer bg-success"></div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
    <script>
        $(function(){
            $('#form').modal('hide');
            $('#form-category').modal('hide');
            $('#delete').modal('hide');
            $('#success').modal('show');
        });
    </script>
    @endif
</div>
