<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            見込み案件登録
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form method="POST" action="{{ route('deals.store') }}">
                @csrf
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="cliant_name" class="leading-7 text-sm text-gray-600">ユーザー名</label>
                        <input type="text" id="cliant_name" name="cliant_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="products" class="leading-7 text-sm text-gray-600">提案商材</label>
                        <input type="text" id="products" name="products" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="payment_method" class="leading-7 text-sm text-gray-600">支払方法</label>
                        <input type="text" id="payment_method" name="payment_method" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="confidence" class="leading-7 text-sm text-gray-600">案件確度</label>
                        <select id="confidence" name="confidence" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            <option value="小">小</option>
                            <option value="中">中</option>
                            <option value="高">高</option>
                        </select>
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="sales_amount" class="leading-7 text-sm text-gray-600">売上見込金額</label>
                        <input type="text" id="sales_amount" name="sales_amount" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    <div class="relative">
                        <label for="cost_amount" class="leading-7 text-sm text-gray-600">仕入見込金額</label>
                        <input type="text" id="cost_amount" name="cost_amount" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-1/3">
                    {{-- <div class="relative">
                        <label for="estimated_month" class="leading-7 text-sm text-gray-600">売上見込時期</label>
                        <select id="estimated_month" name="estimated_month" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            <option value="202504">202504</option>
                            <option value="202505">202505</option>
                            <option value="202506">202506</option>
                            <option value="202507">202507</option>
                            <option value="202508">202508</option>
                            <option value="202509">202509</option>
                            <option value="202510">202510</option>
                            <option value="202511">202511</option>
                            <option value="202512">202512</option>
                            <option value="202601">202601</option>
                            <option value="202602">202602</option>
                            <option value="202603">202603</option>
                        </select>
                    </div> --}}
                        <label for="estimated_month" class="leading-7 text-sm text-gray-600">売上見込時期</label>
                        <input type="date" name="estimated_month" min="2025-04-01" max="2026-03-31" />
                    </div>
                    <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">案件登録</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
