@extends('frontend.master')
@section('title')
    Order | Page
@endsection

@push('frontend_style')

    <style>
        @media (max-width: 600px) {
            .button-container {
                flex-direction: column;
            }

            .button-container .add-to-cart {
                margin: 0 8%;
            }

        }
            .button{
                cursor: pointer;
            }
            
    </style>

@endpush

@section('main_body')
    @include('frontend.inc_page.singleProduct')
@endsection

@push('frontend_js')
<script>
    function validateCheckboxes() {
        const checkboxes = document.querySelectorAll('input[name="size[]"]');
        let isChecked = false;
    
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                isChecked = true;
            }
        });
    
        if (!isChecked) {
            alert('Please select at least one size.');
            return false; // Prevent form submission
        }
    
        return true; // Allow form submission
    }
    
    function validateAndSubmitForm(button, action) {
        if (validateCheckboxes()) {
            button.form.action = action;
            return true; // Allow form submission
        }
        return false; // Prevent form submission
    }
    </script>
@endpush
