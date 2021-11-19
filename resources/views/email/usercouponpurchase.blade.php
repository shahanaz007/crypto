@component('mail::message')
# {{$data['msg'] }} 

  Coupon 	: {{$data['brand']}}<br>
  Amount	: {{$data['amount']}}<br>
  Quantity	: {{$data['qty']}}<br>
  Region	: {{$data['region']}}<br>

  The coupon will be sent to you shortly

   
@endcomponent