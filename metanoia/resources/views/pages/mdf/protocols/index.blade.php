@extends('layouts.app')

@section('content')
    <x-taps>
        <x-slot name="content">
            <div class="grid grid-cols-4 gap-4">
                <x-card :link="'/mdf/protocols/1'">
                    <x-slot name="header">
                        Cannot Sleep
                    </x-slot>
                    <x-slot name="content">
                        Less sleep could weaken your mind, will power, and resistance to urge
                    </x-slot>
                </x-card>
                <x-card :link="'/mdf/protocols/2'">
                    <x-slot name="header">
                        Axiety and Depression
                    </x-slot>
                    <x-slot name="content">
                        This could also provoke the urge since we use it as a coping mechanism in the past
                    </x-slot>
                </x-card>
                <x-card :link="'/mdf/protocols/3'">
                    <x-slot name="header">
                        Device Radiation and Tension Headaches
                    </x-slot>
                    <x-slot name="content">
                        Result from long-hours use of devices and engage in stressful situation
                    </x-slot>
                </x-card>
                <x-card :link="'/mdf/protocols/4'">
                    <x-slot name="header">
                        Urge and Edging
                    </x-slot>
                    <x-slot name="content">
                        Come from early post-nut clarity and engage in urge-inducing activities
                    </x-slot>
                </x-card>
                <x-card :link="'/mdf/protocols/5'">
                    <x-slot name="header">
                        Low in Energy and Will Power
                    </x-slot>
                    <x-slot name="content">
                        When having less sleep, too absorb in coding or high-consuming energy activities
                    </x-slot>
                </x-card>
                <x-card :link="'/mdf/protocols/6'">
                    <x-slot name="header">Exessive Energy</x-slot>
                    <x-slot name="content">
                        When eating too much, or sleep too much; This could lead to an urge (to replenish)
                    </x-slot>
                </x-card>
            </div>
        </x-slot>
    </x-taps>
@endsection
