<x-layout>
    <x-section-heading>Search Results</x-section-heading>
    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job" />
        @endforeach
    </div>
</x-layout>
