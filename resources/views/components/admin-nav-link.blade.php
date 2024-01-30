@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode-mode:bg-gray-700 dark-mode-mode:hover:bg-gray-600 dark-mode-mode:focus:bg-gray-600 dark-mode-mode:focus:text-white  dark-mode-mode:hover:text-white dark-mode-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode-mode:bg-transparent dark-mode-mode:hover:bg-gray-600 dark-mode-mode:focus:bg-gray-600 dark-mode-mode:focus:text-white dark-mode-mode:hover:text-white dark-mode-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline dark:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
