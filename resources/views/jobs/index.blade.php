<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <section>
        <h2>See available jobs here.</h2>
    </section>
    <ul class="space-y-4">
        @foreach ($jobs as $job)
        <li key={{ $job->id}}>
            <a href="/jobs/{{ $job->id }}">
                <span class="block space-y-2">{{ $job->employer->name }}</span>
                <span><strong>{{ $job->title}}:</strong> Pays {{ $job->salary }} per year</span>
            </a>
        </li>
        @endforeach

    </ul>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
