<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        <x-delivery-list :deliveries="$deliveries"/>

    </div>
</x-layouts.app>
