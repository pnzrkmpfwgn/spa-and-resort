@component('mail::message')
# Your order has been recieved.

Your order has been recieved. Thank you for your purchase.

Your payment id: $payment_id

If you wish to cancel your order, please enter your payment id into form in this link: http:://localhost:8000/cancel-booking
    

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
