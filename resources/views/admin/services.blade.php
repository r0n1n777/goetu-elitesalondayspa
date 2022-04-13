<div>
    <div class="p-3">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            @foreach ($services as $service)
            <div class="border-bottom border-primary w-100 d-flex justify-content-between align-items-center">
                <h1 class="my-1">{{ $service->name }}</h1>
                <div>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#form" wire:click="edit({{ $service->id }})">
                        <x-feathericon-edit/>
                    </button>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#delete" wire:click="edit({{ $service->id }})">
                        <x-feathericon-trash-2/>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="p-3 bg-primary fixed-bottom">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#form">
                <x-feathericon-plus/> Add New Service
            </button>
        </div>
    </div>

    {{-- Service form --}}
    <div class="modal fade" tabindex="-1" id="form" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Service Form
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name of Service:</label>
                        <input type="text" class="form-control text-capitalize border-primary" id="service-name" wire:model.defer="name">
                    </div>
                    @error('name')
                    <div class="bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="cancel">
                        <x-feathericon-x/> Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="save">
                        <x-feathericon-save/> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Service Delete --}}
    <div class="modal fade"  tabindex="-1" id="delete" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Are you sure to delete this record?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>{{ $name }}</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <x-feathericon-x/> Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="delete">
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
                <div class="modal-body">
                    {!! session('success') !!}
                </div>
                <div class="modal-footer bg-success"></div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
    <script>
        $(function(){
            $('#form').modal('hide');
            $('#delete').modal('hide');
            $('#success').modal('show');
        });
    </script>
    @endif
</div>