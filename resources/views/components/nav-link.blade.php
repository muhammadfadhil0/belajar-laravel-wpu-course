 <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

 {{-- class current : rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white --}}

 {{-- class default : rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white --}}

 @props(['href', 'current' => false])

 @php
     $classes = $current
         ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white'
         : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white';
 @endphp

 <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }} aria-current="page">{{ $slot }}</a>
