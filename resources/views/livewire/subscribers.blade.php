<div class="p-6 bg-white border-b border-gray-200">
    <p class="text-2xl text-gray-600 font-bold mb-6 underline">
        Subscribers
    </p>
    @if ($subscribers->isEmpty())
        <div class="flex w-full bg-red-100 p-5 rounded-lg">
            <p class="text-red-400">NoSubsribers found</p>
        </div>

    @else
        <table class="w-full">
            <thead class=" border-b-2 border-gray-300 text-indigo-600">
                <tr>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Verified</th>
                    <th class="px-6 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $subscribers as $subscriber )
                    <tr class="text-sm text-indigo-900 border-b border-gray-400">
                        <th  class="px-6 py-3 text-left">{{ $subscriber->email}}</th>
                        <th class="px-6 py-3 text-left">{{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never'}}</th>
                        <th  >
                            <x-button 
                            class="border border-red-500 text-red-500 bg-red-50 hover:bg-red-100"
                            wire:click="delete({{ $subscriber->id}})"
                            >
                                Delete
                            </x-button>
                        </th>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div class="px-3 py-3">{{ $subscribers->links() }}</div>
        
    @endif
</div>