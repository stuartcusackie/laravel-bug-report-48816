<x-mail::message>
<h1 class="h2 text-center mb-8">Request received</h1>  

Dear {{ $item->name }},  

This is just a test. 

Thank you,<br>
{{ config('app.name') }}
</x-mail::message>
