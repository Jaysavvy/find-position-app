@props(['employer', 'width' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 100) }}/{{ $width }}" alt="" class="">

{{-- <img src="{{ $employer->logo }}" alt="" class=""> --}}
