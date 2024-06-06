@props(['items' => []])

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        @for ($i = 1; $i <= 35; $i++)   
            <li class="me-2" role="presentation">
                <button class="inline-block @if($i <= (date('d') + 1) - 6) text-blue-600 border-blue-600 @endif p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="day-{{ $i }}-tab" data-tabs-target="#day-{{ $i }}-tab" type="button" role="tab" aria-controls="day-{{ $i }}-tab" aria-selected="false">Day {{ sprintf('%02d', $i) }}</button>
            </li>
        @endfor
    </ul>
</div>
<div id="default-tab-content">
    {{ $content }}
</div>
