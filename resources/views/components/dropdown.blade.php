<select {{ $attributes->merge(['class' => 'text-white py-2 px-3 text-sm w-full h-full items-center justify-center bg-[#1A1D21] rounded-md outline-none']) }}>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    {{ $slot }}
</select>
