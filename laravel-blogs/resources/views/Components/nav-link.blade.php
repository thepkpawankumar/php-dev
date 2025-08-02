  @props(['active' => false])

  @php
    
    $class = ($active ? 'active': '')." transition hover:text-gray-500/75";
  @endphp
  <a {{$attributes->merge(['class' => $class])}}> {{ $slot }} </a>