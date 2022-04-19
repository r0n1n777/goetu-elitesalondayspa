<div>
    <div class="p-3 bg-primary">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#form" wire:click="fresh">
                <x-feathericon-plus/> Add New Promo
            </button>
        </div>
    </div>

    <div class="p-3">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1>Current Promotions</h1>
            @foreach ($promos as $promo)
            <span class="mt-3" wire:loading wire:target="toggle({{ $promo->id }})">Changing promo status...</span>
            <button class="btn btn-secondary mt-3" wire:click="toggle({{ $promo->id }})">
                <x-feathericon-star/> <b>Toggle Promo Status</b>
            </button>
                @if ($promo->active)
                <div class="d-flex justify-content-end bg-success p-1 rounded">
                    <b class="text-white">This promotion is currently active.</b>
                </div>
                @elseif ($promo->active == false)
                <div class="d-flex justify-content-end bg-danger p-1 rounded">
                    <b class="text-white">This promotion is currently inactive.</b>
                </div>
                @endif
            <div class="shadow-sm w-100 d-flex justify-content-between align-items-center bg-secondary p-2 rounded">
                <div class="d-flex align-items-center p-1">
                    <img src="{{ asset('images/promotions/'.$promo->photo) }}" class="caption-photo border-primary rounded" width="158" height="150" wire:model="services">
                    &nbsp;
                    <div class="d-flex flex-column">
                        <h1 class="my-1">{{ $promo->title }}</h1>
                        <span>{!! $promo->description !!}</span>
                    </div>
                </div>
                <div>
                    <button class="btn p-1" data-bs-toggle="modal" data-bs-target="#form" wire:click="set({{ $promo->id }})">
                        <x-feathericon-edit/>
                    </button>
                    <button class="btn p-1" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{ $promo->id }})">
                        <x-feathericon-trash-2/>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Form Promos --}}
    <div class="modal fade" tabindex="-1" id="form" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Promotions Form
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Promo Details:</label>
                        <div class="border border-primary rounded" wire:ignore>
                            <textarea id="description" name="description" rows="3" wire:model.defer="description"></textarea>
                        </div>
                    </div>
                    @error('description')
                    <div class="mb-1 bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Promotion Title:</label>
                        <input type="text" class="form-control text-capitalize border-primary" wire:model.defer="title">
                    </div>
                    @error('title')
                    <div class="bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class="btn-group align-items-center mb-3" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="active" autocomplete="off" name="active" wire:model.defer="active">
                        <label class="btn btn-outline-primary btn-sm rounded" for="active">Set as Active Promotion</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Set New Promotion Photo:</label>
                        <input class="form-control font-weight-bold border-primary" type="file" wire:model.defer="new_photo">
                    </div>
                    @error('new_photo')
                    <div class="mb-3 bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror
                    
                    @if ($photo)
                    <img src="{{ asset('images/promotions/'.$photo) }}" class="img-fluid">
                    @endif

                    @if ($new_photo_preview)
                    <img src="{{ asset($new_photo_preview) }}" class="img-fluid">
                    @endif
                </div>
                <div class="modal-footer">
                    <b class="text-success ml-0" wire:loading wire:target="save">
                        Saving Record...
                    </b>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="fresh">
                        <x-feathericon-x/> Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="save" wire:loading.attr="disabled">
                        <x-feathericon-save/> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Delete --}}
    <div class="modal fade"  tabindex="-1" id="delete" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Are you sure to delete this promotion?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>{{ $title }}</h1>
                    
                    <b class="text-danger">
                        <x-feathericon-alert-circle/>
                        Please be aware that if you delete this record, all other records
                        related to this would become unavailable too. Proceed with caution.
                    </b>
                </div>
                <div class="modal-footer">
                    <b class="text-success ml-0" wire:loading wire:target="delete">
                        Deleting Promotion...
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
            $('#delete').modal('hide');
            $('#success').modal('show');
        });
    </script>
    @endif

    <script type="text/javascript">
        // Initialize the tinymce editor for textarea#description
        document.addEventListener('livewire:load', function() {
            tinymce.init({ 
                selector: '#description',
                height: '200',
                statusbar: false,
                menubar: false,
                setup: function(editor) {
                    editor.on('change', function(e) {
                        @this.set('description', editor.getContent());
                    });
                }
            });
        });

        // Event to set the tinymce editor for textarea#description
        document.addEventListener('setDescription', function(e) {
            if (@this.description)
            {
                tinymce.get('description').setContent(@this.description);
            }
            else if (@this.description == null) {
                tinymce.get('description').setContent('');
            }
        });
    </script>
</div>