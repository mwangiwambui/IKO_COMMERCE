@component('mail::message')
# Order Shipped

Order number {{$order->id}} has been shipped.
Your total price {{$order->total}}
For more information contact : 0701276605
@component('mail::button', ['url' => '//localhost:8000'])
Continue Shopping
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

