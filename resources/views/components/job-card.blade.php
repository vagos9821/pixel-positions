@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="text-xl font-bold transition-colors duration-300 group-hover:text-orange-600">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="mt-4 text-sm">{{ $job->salary }}</p>
    </div>

    <div class="mt-auto flex items-center justify-between">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
