@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Character') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="">
                        <!-- Important to prevent csrf vulnerability for form updates -->
                        @csrf
                    
                        <div class="mb-3">
                            <label for="character-name" class="form-label">Character Name</label>
                            <input class="form-control" name="name" id="character-name" placeholder="Raiden">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary text-end"><i class="fa fa-search"></i>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
