@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
            <h3 class="font-bold text-xl mt-2">            
                <a href="{{ $job->url }}">
                    {{ $job->title }}
                </a>
            </h3>
            <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag></x-tag>
            @endforeach        
        </div>
</x-panel>