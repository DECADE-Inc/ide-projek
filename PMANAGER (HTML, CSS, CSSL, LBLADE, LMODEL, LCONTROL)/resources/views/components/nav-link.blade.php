@props(['active' => false])

<a {{ $attributes }}
    class="block py-2 px-3  rounded-sm md:bg-transparent  md:p-0 text-white  {{ $active ? 'md:text-blue-500 bg-blue-700' : 'md:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent' }}">
    {{ $slot }}
</a>

