
@component('mail::message')
# Contact Details

    Name : {{$data['name']}}
    Email : {{$data['email']}}
    Title :{{$data['title']}}
    Message :{{$data['comment']}}

   Thanks,
    Swiz
@endcomponent