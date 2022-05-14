@component('mail::message')
# Your order has been recieved.

Your order has been recieved. Thank you for your purchase.<br/>
Your order is : {{$order->service}}<br/>
Your payment id: {{$order->payment_id}}<br/>
Your reservation is in: {{$order->date}} at {{$order->period}}<br/>

If you wish to cancel your order, please enter your payment id into form [here](http:://localhost:8000/cancel-booking)<br/>
if you can't access to link you can search http:://localhost:8000/cancel-booking.<br/>

Thank you for your purchase.<br>
{{ config('app.name') }}
@endcomponent
