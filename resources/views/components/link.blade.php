   @props(['link'])
   <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<a {{ $slot }} {{ $attributes->merge(['class' => 'bg-[#24AE7C] text-white']) }}>{{ $slot }}</a>