<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="isolate px-6 py-24 sm:py-32 lg:px-8">
                    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-1/2 -z-10 aspect-1155/678 w-144.5 max-w-none -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-40rem)] sm:w-288.75"></div>
                    </div>
                    <form action="" method="POST" class="mx-auto max-w-xl ">

                        {{-- 名前 --}}
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm/6 font-semibold text-gray-900">Name</label>
                            <div class="mt-2.5">
                            <input id="name" type="text" name="name" autocomplete="organization" class="block w-full rounded-md  px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                            </div>
                        </div>


                        {{-- title --}}
                        <div class="sm:col-span-2">
                            <label for="title" class="block text-sm/6 font-semibold text-gray-900">Title</label>
                            <div class="mt-2.5">
                            <input id="title" type="text" name="title" autocomplete="organization" class="block w-full rounded-md  px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                            </div>
                        </div>



                        {{-- メールアドレス --}}
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-semibold text-gray-900">メールアドレス</label>
                            <div class="mt-2.5">
                            <input id="email" type="email" name="email" autocomplete="organization" class="block w-full rounded-md  px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                            </div>
                        </div>



                        {{-- ホームページ --}}
                        <div class="sm:col-span-2">
                            <label for="url" class="block text-sm/6 font-semibold text-gray-900">ホームページ</label>
                            <div class="mt-2.5">
                            <input id="url" type="url" name="url" autocomplete="organization" class="block w-full rounded-md  px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" />
                            </div>
                        </div>




                        {{-- 性別 --}}
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm/6 font-semibold text-gray-900">性別</label>br
                            <div class="mt-2.5">
                                <input type="radio" name="gender" value="0">男性
                                <input type="radio" name="gender" value="1">女性
                            </div>
                        </div>




                        {{-- 年齢 --}}
                        <div class="sm:col-span-2">
                            <label for="age" class="block text-sm/6 font-semibold text-gray-900">年齢</label>
                            <select name=" age">
                                <option value="">選択してください</option>
                                <option value="1">未成年</option>
                                <option value="2">成人</option>
                            </select>
                        </div>


                        {{-- お問い合わせ --}}
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm/6 font-semibold text-gray-900">お問い合わせ</label>
                            <div class="mt-2.5">
                            <textarea id="message" name="message" rows="4" class="block w-full rounded-md  px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500"></textarea>
                            </div>
                        </div>

                        {{-- 注意事項 --}}
                        <div class="sm:col-span-2">
                            <input type="checkbox" id="url" name="caution">注意事項に同意する
                        </div>

                        {{-- 送信ボタン --}}
                        <div class="mt-10">
                            <button type="submit" class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-gray-900 shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">お問い合わせする</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
