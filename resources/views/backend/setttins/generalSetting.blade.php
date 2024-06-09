@extends('backend.layouts.master')
@section('title') Create testimonial @endsection

@push('admin_style')

<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

@endpush

@section('content')


    <div class="row">

        <h1>General Setting</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('admin.dashbord') }}" class="btn btn-primary">
                    <i class="fa-solid fa-backward"></i>
                    Back to dashboard

                </a>
            </div>
        </div>

        <div class="col-12 mt-3">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">

                            <label for="client_name" class="form-label">SITE TITLE</label>
                            <input type="text" class="form-control @error('client_name')
                                is-invalid
                            @enderror" id="client_name" placeholder="enter client name" name="SITE TITLE">

                            @error('client_name')

                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                            @enderror
                          </div>


                          <div class="mb-3">

                            <label for="client_designation" class="form-label">SITE ADDRESS</label>
                            <input type="text" class="form-control @error('client_designation')
                                is-invalid
                            @enderror" id="client_designation" placeholder="enter client designation" name="client_designation">

                            @error('client_designation')

                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                            @enderror
                          </div>


                        <button type="submit" class="btn btn-primary mt-2">Create</button>

                    </form>

                </div>

            </div>

        </div>


    </div>



@endsection


@push('admin_script')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    $('.dropify').dropify();
</script>

@endpush
