@props(['active' => false])

<a class="nav-link text-white {{ $active ? 'active' : ''}}" {{$attributes}}>{{$slot}}</a>