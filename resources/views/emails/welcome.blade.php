@component('mail::message')

<h4>You Send : {{ $details['send_you'] }}</h4>
<h4>Fee : {{ $details['fee'] }}</h4>
<h4>Charge : {{ $details['charge'] }}</h4>
<h4>You Receive : {{ $details['send_to'] }}</h4>

<h4>Tnx Number/Account Number : {{ $details['tnx_number'] }}</h4>





  
{{ $details['url'] }}
   
@component('mail::button', ['url' => $details['website']])
Website
@endcomponent
   
Thanks,<br>
WWW.grabsoft.tech
@endcomponent
