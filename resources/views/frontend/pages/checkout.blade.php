@extends('frontend.master')
@section('title')
Checkout | Page
@endsection

@push('frontend_style')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

{{-- body start --}}
@section('main_body')

@include('frontend.inc_page.checkout')

@endsection
{{-- body end --}}

@push('frontend_js')

<script>

    document.getElementById('cod').addEventListener('click', function() {

        let submitButton = document.getElementById('submit');
        let sslbutton = document.getElementById('ssl-demo');

        if (submitButton.style.display === 'none' || submitButton.style.display === '') {
            submitButton.style.display = 'block';
            sslbutton.style.display = 'none';
        }

    });


    document.getElementById('payment-card').addEventListener('click', function() {

        let submitButton = document.getElementById('submit');
        let sslbutton = document.getElementById('ssl-demo');

        if (sslbutton.style.display === 'none' || sslbutton.style.display === '') {
            sslbutton.style.display = 'block';
            submitButton.style.display = 'none';
        }

    });


</script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

    $(document).ready(function() {

    $('.js-example-basic-single').select2();

    $('#district_id').on('change', function(){

        var district_id = $(this).val();

        if (district_id) {

            $.ajax({

                url: "{{ url('/upazila/ajax') }}/" +district_id,
                type:"GET",
                dataType: "json",
                success: function(data){

                   var d = $('#upazila_id').empty();

                   $.each(data, function(key, value) {

                        $('#upazila_id').append('<option value="'+value.id+'">'+value.name+'</option>')

                   })
                }
            })

        }

    })

    });

</script>

<script>
    function updateDeliveryCharge() {
        const selectedOption = document.querySelector('input[name="deliveryOption"]:checked');
        const deliveryChargeElement = document.getElementById('deliveryCharge');
        deliveryChargeElement.textContent = selectedOption.value;
    }
</script>
@endpush
