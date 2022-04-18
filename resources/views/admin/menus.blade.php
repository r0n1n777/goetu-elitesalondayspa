<div>
    <div class="container-fluid d-flex justify-content-center bg-primary pb-2">
        <div class="row g-2">
            @foreach($services as $s)
            <div class="col text-center">
                <a class="btn btn-secondary text-nowrap p-1" href="{{ route('admin-menus', ['id' => $s->id]) }}">
                    <span class="small">{{ $s->name }}</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="p-3 bg-secondary shadow" style="background-image: url('{{ asset('images/services/'.$service->photo) }}'); background-size: cover; background-opacity: 0.5;">
        <div class="container d-flex justify-content-center">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a href="{{ route('admin-dashboard') }}" class="btn btn-primary btn-sm">
                    <x-feathericon-chevrons-left/> Go Back to Services
                </a>
                <h1 class="text-white bg-primary shadow p-1 rounded">{{ $service->name }}</h1>
            </div>
        </div>
    </div>

    {{-- No Category --}}
    <div class="p-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3>No Category</h3>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#form" wire:click="fresh(0)">
                    <x-feathericon-plus/> Add Menu
                </button>
            </div>
            <table class="table table-bordered border-primary">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Menu Name</th>
                        <th>Service Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($menus))
                        @foreach ($menus as $menu)
                            @if ($menu->category_id == 0)
                            <tr>
                                <td class="w-75">
                                    <h3 class="mb-0">{{ $menu->name }}</h3>
                                    <span class="text-muted">{!! $menu->description !!}</span>
                                </td>
                                <td class="w-25">
                                    <div class="w-100 d-flex justify-content-center align-items-end">
                                        @foreach ($menu->prices as $price)
                                        <div class="d-flex justify-content-center align-items-center w-100 mb-1">
                                            <b class="bg-secondary rounded-pill p-1 px-2 border border-primary">
                                                ${{ number_format($price->amount, 2, '.') }}@if ($price->amount_plus)+@endif
                                            </b>
                                        </div>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start">
                                        <button class="btn btn-sm p-1" data-bs-toggle="modal" data-bs-target="#form" wire:click="set({{ $menu->id }})">
                                            <x-feathericon-edit/>
                                        </button>
                                        <button class="btn btn-sm p-1" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{ $menu->id }})">
                                            <x-feathericon-trash-2/>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td class="text-muted">No Records.</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    {{-- With Category --}}
    @foreach ($service->categories as $category)
    <div class="p-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3>{{ $category->name }}</h3>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#form" wire:click="fresh({{ $category->id }})">
                    <x-feathericon-plus/> Add Menu
                </button>
            </div>
            <table class="table table-bordered border-primary">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Menu Name</th>
                        <th>Service Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($category->menus))
                        @foreach ($category->menus as $menu)
                        <tr>
                            <td class="w-75">
                                <h3 class="mb-0">{{ $menu->name }}</h3>
                                <span class="text-muted">{!! $menu->description !!}</span>
                            </td>
                            <td class="w-25">
                                <div class="w-100 d-flex justify-content-center align-items-end">
                                    @foreach ($menu->prices as $price)
                                    <div class="d-flex justify-content-center align-items-center w-100 mb-1">
                                        <b class="bg-secondary rounded-pill p-1 px-2 border border-primary">
                                            ${{ number_format($price->amount, 2, '.') }}@if ($price->amount_plus)+@endif
                                        </b>
                                    </div>
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-start">
                                    <button class="btn btn-sm p-1" data-bs-toggle="modal" data-bs-target="#form" wire:click="set({{ $menu->id }})">
                                        <x-feathericon-edit/>
                                    </button>
                                    <button class="btn btn-sm p-1" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set({{ $menu->id }})">
                                        <x-feathericon-trash-2/>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-muted">No Records.</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endforeach

    {{-- Form --}}
    <div class="modal fade" tabindex="-1" id="form" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Menu Form
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">Select Category:</label>
                        <select class="form-select border-primary" name="category_id" wire:model.defer="category_id">
                            <option value="0">No Category</option>
                            @foreach ($service->categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="mb-1">
                                <label class="form-label">Name of Menu:</label>
                                <input type="text" class="form-control text-capitalize border-primary" name="name" wire:model.defer="name">
                            </div>
                            @error('name')
                            <div class="bg-danger text-white p-1 text-center small rounded">
                                <span class="font-weight-bold">
                                    {{ $message }}
                                </span>
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column">
                            <div class="mb-1">
                                <label class="form-label">Service Fee:</label>
                                <div class="input-group mb-1">
                                    <div class="input-group-text border border-primary">$</div>
                                    <input type="text" class="form-control text-capitalize border-primary" name="amount" wire:model.defer="amount" onclick="this.select();">
                                </div>
                                <div class="btn-group align-items-center" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="amount_plus" autocomplete="off" name="amount_plus" wire:model.defer="amount_plus">
                                    <label class="btn btn-outline-primary btn-sm rounded" for="amount_plus">Add Plus(+)</label>
                                    <b>&nbsp;Ex: $45+</b>
                                </div>
                            </div>
                            @error('amount')
                            <div class="bg-danger text-white p-1 text-center small rounded">
                                <span class="font-weight-bold">
                                    {{ $message }}
                                </span>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description: (Optional)</label>
                        <div class="border border-primary rounded" wire:ignore>
                            <textarea id="description" name="description" wire:model="description" rows="3"></textarea>
                        </div>
                    </div>
                    @error('description')
                    <div class="mb-1 bg-danger text-white p-1 mt-1 text-center small rounded">
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
                        Are you sure to delete this record?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>{{ $name }}</h1>

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
                height: '250',
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
