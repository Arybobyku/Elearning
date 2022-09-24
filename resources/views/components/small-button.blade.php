<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white active:bg-cyan-600 text-xs px-3 py-1 rounded shadow hover:shadow-lg outline-none focus:outline-none  ease-linear transition-all duration-150']) }}>
    {{ $slot }}
</button>
