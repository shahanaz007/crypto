@component('mail::message')
# {{$data['name'] }} Purchased New Coupon

  Coupon 	: {{$data['brand']}}<br>
  Amount	: {{$data['amount']}}<br>
  Quantity	: {{$data['qty']}}<br>
  Region	: {{$data['region']}}<br>

   
@endcomponent