@props(['link' => '#'])

<a href="{{ $link }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $header }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $content }}</p>
</a>

{{-- <button {!! $attributes->merge(['class' => 'btn bg-green-500 text-white']) !!}>{{ $slot }}</button> --}}
    