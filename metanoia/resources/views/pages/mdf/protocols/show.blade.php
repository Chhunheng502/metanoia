@extends('layouts.app')

@section('content')
    <x-taps>
        <x-slot name="content">
            <div>
                @if ($id == '1')
                    <x-card>
                        <x-slot name="header">
                            Cannot Sleep
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <p class="font-bold">To prepare</p>
                                <li>Move your bed to other side away from noise</li>
                                <li>your sweet or calming scent to help you sleep</li>
                                <li>think of positive and heart-warming moments before sleep</li>
                                <li>Take another bath before sleep if needed</li>
                                <li>Read manga/light novel before if needed</li>
                            </div>
                            <div>
                                <p class="font-bold">To do if happen</p>
                                <li>Take a bath</li>
                                <li>Eat hot soup / coffee / tea</li>
                                <li>Eat high-calories food</li>
                                <li>Eat snacks (need enegy to fall as sleep)</li>
                                <li>Read heart-warming manga</li>
                                <li>If not, repeat again</li>
                            </div>
                            <div>
                                <p class="font-bold">To avoid</p>
                                <li>don't sleep early (should be between 10 - 11)</li>
                                <li>don't take sleeping pill (unless neccessary)</li>
                                <li>don't let anyone sleep with you (they might wake you up)</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                @if ($id == '2')                    
                    <x-card>
                        <x-slot name="header">
                            Axiety and Depression
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <li>Eat delicious food</li>
                                <li>Eat ice cream</li>
                                <li>Eat hot soup / coffee / tea</li>
                                <li>Take a ride around borey</li>
                                <li>Read heart-warming manga</li>
                                <li>If not, repeat again</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                @if ($id == '3')                    
                    <x-card>
                        <x-slot name="header">
                            Device Radiation and Tension Headaches
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <li>Take a bath</li>
                                <li>Eat delicious food</li>
                                <li>Eat ice cream</li>
                                <li>Eat hot soup / coffee / tea</li>
                                <li>Take a ride around borey</li>
                                <li>Read heart-warming manga</li>
                                <li>If not, repeat again</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                @if ($id == '4')                    
                    <x-card>
                        <x-slot name="header">
                            Urge and Edging
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <li>Take a bath first of all</li>
                                <li>Eat hot soup / coffee / tea</li>
                                <li>Go to sleep right away</li>
                                <li>If cannot sleep</li>
                                <li>Take a ride around borey</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                @if ($id == '5')
                    <x-card>
                        <x-slot name="header">
                            Low in enegy and will power
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <p class="font-bold">To prepare</p>
                                <li>Sleep as long and as much as you can</li>
                                <li>Eat a proper meal and eat it on time (don't miss)</li>
                                <li>Try getting too absorb in coding, gaming, or any high-dopamine activities</li>
                            </div>
                            <div>
                                <p class="font-bold">Todo if happen</p>
                                <li>Take a bath first of all</li>
                                <li>Go to sleep right away</li>
                                <li>If cannot sleep</li>
                                <li>Eat delicious food and snack</li>
                                <li>Drink tea</li>
                                <li>Read manga / light novel</li>
                                <li>If still cannot sleep, repeat again</li>
                                <li>If urge come, go outside immediately</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                @if ($id == '6')                    
                    <x-card>
                        <x-slot name="header">Excessive energy</x-slot>
                        <x-slot name="content">
                            <div>
                                <p class="font-bold">Todo if happen</p>
                                <li>Go to Gym</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif
                {{-- @if ($id == '7')                    
                    <x-card>
                        <x-slot name="header">Energy and Dopamine Conservation</x-slot>
                        <x-slot name="content">
                            <div>
                                <p class="font-bold">To prepare</p>
                                <li>Eat healthy food</li>
                                <li>Live in a healthy and good environment</li>
                                <li>Sleep as long and as much as you can</li>
                            </div>
                            <div>
                                <p class="font-bold">To avoid</p>
                                <li>Avoid social media and gaming</li>
                                <li>Avoid getting too absorb in coding or some specific tasks</li>
                                <li>Avoid bad-mood situation:</li>
                                <li>Go to work early to avoid traffic</li>
                                <li>Leave from work late to avoid traffic</li>
                            </div>
                        </x-slot>
                    </x-card>
                @endif --}}
            </div>
        </x-slot>
    </x-taps>
@endsection
