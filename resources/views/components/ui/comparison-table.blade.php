<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-maisara-navy text-white">
            <tr>
                @foreach($headers as $header)
                    <th class="px-6 py-3 text-left text-sm font-semibold">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($rows as $row)
                <tr class="hover:bg-maisara-ivory/50 transition-colors">
                    @foreach($row as $cell)
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
