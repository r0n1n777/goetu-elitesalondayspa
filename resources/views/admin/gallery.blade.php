<div>
    <div class="p-3 bg-primary">
        <div class="container">
            <h3 class="text-white text-center">Add Photo(s)</h3>
            <div class="d-flex justify-content-center align-items-center w-75 mx-auto">
                <form class="d-flex align-items-center" wire:submit.prevent="save">
                    <div class="input-group">
                        <input class="form-control border-primary" type="file" wire:model="new_photos" multiple required>
                        <div class="input-group-text border border-primary bg-danger">
                            <input type="reset" class="btn btn-sm p-0 text-white" value="x">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm m-1 text-nowrap" wire:loading.attr="disabled">
                        <x-feathericon-upload/> Upload
                    </button>
                </form>    
            </div>
            <div class="d-flex justify-content-center bg-success text-white w-75 mx-auto rounded">
                <b wire:loading wire:target="new_photos">Getting your photos ready for upload...</b>
                <b wire:loading wire:target="save">Uploading Photos...</b>
            </div>
            @error('new_photos.*')
            <div class="bg-danger text-white p-1 mt-1 text-center small rounded">
                <span class="font-weight-bold">
                    {{ $message }}
                </span>
            </div>
            @enderror
        </div>
    </div>

    <div class="p-3">
        <div class="container">
            <div class="row g-2">
                @foreach ($photos as $photo)
                <div class="col-lg-2 col-md-3 col-sm-4">    
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <a data-fslightbox href="{{ asset('images/gallery/store/'.$photo) }}">
                            <img src="{{ asset('images/gallery/store/'.$photo) }}" class="img-thumbnail thumbnail">
                        </a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete" wire:click="set('{{ $photo }}')">
                            <x-feathericon-trash-2/> Delete
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Delete --}}
    <div class="modal fade"  tabindex="-1" id="delete" wire:ignore.self>
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">
                        Are you sure to delete this photo?
                    </h5>
                    <button class="btn" data-bs-dismiss="modal">
                        <x-feathericon-x class="text-white"/>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($photo_name)
                    <img src="{{ asset('images/gallery/store/'.$photo_name) }}" class="img-fluid">
                    @endif
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
            $('#delete').modal('hide');
            $('#success').modal('show');
        });
    </script>
    @endif
</div>
