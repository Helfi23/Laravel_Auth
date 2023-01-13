<x-guest-Layout>
     <a href="/products/create" class="px-4 ру-2 bg-green-400 text-white rounded-nd">
        New Data
    </a>
     <table class="w-full mt-3">
         <thead>
            <tr>
                <td class="px-3 ру-2 bg-slate-488 text-white">Name</td>
                <td class="px-3 ру-2 bg-slate-488 text-white">Prices/</td>
            </tr>
        </thead>
        <tbody>|
            @foreach ($products as $key => $item)
                <tr>
                    <td class="px-3 ру-2">{{ $item->name ?? '' }}</td>
                    <td class="px-3 ру-2">{{ $item->price ?? ''}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-guest-Layout>
