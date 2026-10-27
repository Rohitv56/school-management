<x-filament-panels::page>
    <div class="space-y-6">
            {{ $this->form }}

        @if($reportCards->isNotEmpty())
            @foreach($reportCards as $reportCard)
                <div class="mt-6 border border-gray-300 rounded p-4">
                    <h2 class="text-lg font-bold mb-2">{{ $reportCard->exam->name }} - Class: {{ $reportCard->assignStudent->class->name }}</h2>

                    <div class="overflow-auto">
                        <table class="w-full text-sm border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 p-2 text-left">SL</th>
                                    <th class="border border-gray-300 p-2 text-left">Subject</th>
                                    <th class="border border-gray-300 p-2 text-left">Mark</th>
                                    <th class="border border-gray-300 p-2 text-left">GPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportCard->marks as $key => $mark)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border border-gray-300 p-2 font-medium">{{ $key + 1 }}
                                        </td>
                                        <td
                                            class="border border-gray-300 p-2 text-gray-900">
                                            {{ $mark->subject->name ?? 'N/A' }}</td>
                                        <td
                                            class="border border-gray-300 p-2 text-gray-900">
                                            {{ $mark->marks }}</td>
                                        <td
                                            class="border border-gray-300 p-2 text-gray-900">
                                            {{ number_format(\App\Services\GpaCalculator::getGradePoint($mark->marks), 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-filament-panels::page>