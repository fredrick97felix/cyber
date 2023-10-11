<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-4 text-center bg-my-blue rounded-md text-white text-sm hover:bg-indigo-300']) }}>
    {{ $slot }}
</button>
