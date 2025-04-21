<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            見込み案件一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container px-5 py-16 mx-auto">
                    <table>
                        <tr>
                            <th>顧客名</th>
                            <th>商材</th>
                            <th>支払方法</th>
                            <th>案件確度</th>
                            <th>売上</th>
                            <th>仕入</th>
                            <th>利益</th>
                            <th>売上見込月</th>
                        </tr>
                        @foreach ($deals as $deal)
                        <tr>
                            <td>{{ $deal->cliant_name }}</td>
                            <td>{{ $deal->products }}</td>
                            <td>{{ $deal->payment_method }}</td>
                            <td>{{ $deal->confidence }}</td>
                            <td>{{ number_format($deal->sales_amount) }}</td>
                            <td>{{ number_format($deal->cost_amount) }}</td>
                            <td>{{ number_format($deal->sales_amount - $deal->cost_amount) }}</td>
                            <td>{{ $deal->estimated_month }}</td>
                        </tr>
                        @endforeach
                        <tr style="font-weight: bold; background-color: #f3f4f6;">
                            <td colspan="4" style="text-align: right;">合計</td>
                            <td>{{ number_format($totalSales) }}</td>
                            <td>{{ number_format($totalCost) }}</td>
                            <td>{{ number_format($totalProfit) }}</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                    <button onclick="location.href='{{ route('deals.create') }}'" type="submit" class="flex mx-auto mb-12 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">案件追加</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>