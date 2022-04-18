<div>
    <div class="p-3 bg-primary">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#form" wire:click="fresh">
                <x-feathericon-plus/> Add New Service
            </button>
        </div>
    </div>

    <div class="p-3">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1>List of Services</h1>
            @foreach ($services as $service)
            <div class="shadow-sm w-100 d-flex justify-content-between align-items-center bg-secondary mt-3 p-2 rounded">
                <div class="d-flex align-items-center p-1">
                    <img src="{{ asset('images/services/'.$service->photo) }}" class="caption-photo border-primary rounded-circle" width="70" height="70" wire:model="services">
                    &nbsp;
                    <h1 class="my-1">{{ $service->name }}</h1>
                </div>
                <div>
                    <button class="btn p-1" data-bs-toggle="modal" data-bs-target="#form" wire:click="set({{ $service->id }})">
                        <x-feathericon-edit/>
                    </button>
                    <button class="btn p-1" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{ $service->id }})">
                        <x-feathericon-trash-2/>
                    </button>
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#form-category" wire:click="setCategory(0, {{ $service->id }})">
                        <x-feathericon-plus/> Category
                    </button>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin-menus', ['id' => $service->id]) }}">
                        <x-feathericon-menu/> Menu
                    </a>
                </div>
            </div>

            @foreach ($service->categories as $category)
            <div class="py-1 d-flex justify-content-between align-items-center w-75 shadow-sm">
                <div>
                    <x-feathericon-corner-down-right/> <b>{{ $category->name }}</b>
                </div>
                <div>
                    <button class="btn p-0 py-1" data-bs-toggle="modal" data-bs-target="#form-category" wire:click="setCategory({{ $category->id }}, {{ $service->id }})">
                        <x-feathericon-edit/>
                    </button>
                    <button class="btn p-0 py-1" data-bs-toggle="modal" data-bs-target="#delete" wire:click="setCategory({{ $category->id }}, {{ $service->id }})">
                        <x-feathericon-trash-2/>
                    </button>
                </div>
            </div>
            @endforeach

            @endforeach
        </div>
    </div>

    {{-- Form Services --}}
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

                    <div class="mb-3">
                        <label class="form-label">Additional Note on Prices: (Optional)</label>
                        <div class="border border-primary rounded" wire:ignore>
                            <textarea id="note" name="note" wire:model="note" rows="3"></textarea>
                        </div>
                    </div>
                    @error('note')
                    <div class="mb-1 bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Set New Photo Caption:</label>
                        <input class="form-control font-weight-bold border-primary" type="file" wire:model.defer="new_photo">
                    </div>
                    @error('new_photo')
                    <div class="mb-3 bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    @if ($photo != null)
                    <img src="{{ asset('images/services/'.$photo) }}" class="img-fluid">
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

    {{-- Form Category --}}
    <div class="modal fade" tabindex="-1" id="form-category" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Category Form
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name of Category:</label>
                        <input type="text" class="form-control text-capitalize border-primary" id="service-name" wire:model.defer="name_category">
                    </div>
                    @error('name_category')
                    <div class="bg-danger text-white p-1 mt-1 text-center small rounded">
                        <span class="font-weight-bold">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <b class="text-success ml-0" wire:loading wire:target="save">
                        Saving Record...
                    </b>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="fresh">
                        <x-feathericon-x/> Cancel
                    </button>
                    <button type="button" class="btn btn-success" wire:click="saveCategory" wire:loading.attr="disabled">
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
                        Are you sure to delete this record?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>
                        {{ $name }}
                        {{ $name_category }}
                    </h1>
                    
                    <b class="text-danger">
                        <x-feathericon-alert-circle/>
                        Please be aware that if you delete this record, all other records
                        related to this would become unavailable too. Proceed with caution.
                    </b>
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

    <script type="text/javascript">
        // Initialize the tinymce editor for textarea#description
        document.addEventListener('livewire:load', function() {
            tinymce.init({ 
                selector: '#note',
                height: '200',
                statusbar: false,
                menubar: false,
                setup: function(editor) {
                    editor.on('change', function(e) {
                        @this.set('note', editor.getContent());
                    });
                }
            });
        });

        // Event to set the tinymce editor for textarea#description
        document.addEventListener('setNote', function(e) {
            if (@this.note)
            {
                tinymce.get('note').setContent(@this.note);
            }
            else if (@this.note == null) {
                tinymce.get('note').setContent('');
            }
        });
    </script>
</div>