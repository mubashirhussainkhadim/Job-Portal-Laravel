<x-layout>
    <x-page-heading>
        Search Result
    </x-page-heading>

    <section>
        <x-section-heading>Result Jobs</x-section-heading>

        @if ($jobs->isEmpty())
            <p>No jobs found. Try searching for something else.</p>
        @else
            <div class="space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        @endif
    </section>
</x-layout>
