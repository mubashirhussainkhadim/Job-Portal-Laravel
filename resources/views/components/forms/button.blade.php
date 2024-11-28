<button {{ $attributes->merge(['class' => 'bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-full py-2 px-8 font-bold shadow-lg hover:from-purple-600 hover:to-blue-500 transition duration-300 transform hover:scale-105']) }}>
    {{ $slot }}
</button>
