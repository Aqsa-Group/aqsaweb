<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-4 sm:py-8">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">

        <!-- Header -->
        <div class="mb-8 text-center sm:text-right">
            <div class="flex items-center justify-center sm:justify-start gap-3 mb-2">
                <div class="bg-gradient-to-br from-blue-600 to-indigo-600 p-2.5 rounded-xl shadow-lg">
                    <svg class="w-7 h-7 sm:w-9 sm:h-9 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967..."/>
                    </svg>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-l from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    مدیریت اطلاعات کاربران
                </h1>
            </div>
            <p class="text-slate-500 text-sm">مدیریت و سازماندهی اطلاعات کسب و کارها</p>
        </div>

        <!-- Alert Message -->
        @if (session()->has('message'))
        <div class="bg-gradient-to-r from-emerald-50 to-green-50 border-r-4 border-emerald-500 text-emerald-800 px-5 py-4 rounded-xl mb-6 flex items-center justify-between shadow-lg shadow-emerald-100 animate-slideIn"
            x-data="{ show: true }" x-show="show" x-transition>
            <div class="flex items-center gap-3">
                <div class="bg-emerald-100 p-2 rounded-full">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <span class="text-sm sm:text-base font-medium">{{ session('message') }}</span>
            </div>
            <button @click="show = false" class="text-emerald-600 hover:text-emerald-800 transition hover:bg-emerald-100 p-1.5 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        @endif

        <!-- Form Section -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-slate-200/60 p-5 sm:p-8 mb-8 hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-2 rounded-lg shadow-md">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold text-slate-800">
                    {{ $isEdit ? 'ویرایش اطلاعات' : 'ثبت اطلاعات جدید' }}
                </h2>
                @if($isEdit)
                <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-bold rounded-full">در حال ویرایش</span>
                @endif
            </div>

            <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                    <!-- Business Name -->
                    <div class="lg:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">
                            نام کسب و کار <span class="text-red-500">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400 group-focus-within:text-blue-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <input type="text" wire:model="business_name"
                                class="w-full border-2 border-slate-300 rounded-xl pr-10 pl-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                                placeholder="نام کسب و کار را وارد کنید">
                        </div>
                        @error('business_name')
                        <span class="text-red-500 text-xs mt-1.5 block font-medium flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <!-- Business Type -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">نوع کسب و کار</label>
                        <select wire:model="business_type"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 font-medium hover:border-slate-400 cursor-pointer">
                            <option value="">انتخاب کنید...</option>
                            <option value="عمده">عمده</option>
                            <option value="پرچون">پرچون</option>
                            <option value="عمده و پرچون">عمده و پرچون</option>
                            <option value="خدماتی">خدماتی</option>
                            <option value="تولیدی">تولیدی</option>
                            <option value="واردات">واردات</option>
                            <option value="صادرات">صادرات</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">دسته‌بندی</label>
                        <select wire:model="category"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 font-medium hover:border-slate-400 cursor-pointer">
                            <option value="">انتخاب دسته‌بندی...</option>
                            <optgroup label="━━━ مواد غذایی ━━━">
                                <option value="سوپرمارکت">🛒 سوپرمارکت</option>
                                <option value="میوه و تره بار">🍎 میوه و تره بار</option>
                                <option value="لبنیات">🥛 لبنیات</option>
                                <option value="نانوایی">🍞 نانوایی</option>
                                <option value="شیرینی فروشی">🍰 شیرینی فروشی</option>
                                <option value="آجیل و خشکبار">🥜 آجیل و خشکبار</option>
                                <option value="قصابی">🥩 قصابی</option>
                                <option value="مرغ و ماهی">🐟 مرغ و ماهی</option>
                            </optgroup>
                            <optgroup label="━━━ پوشاک ━━━">
                                <option value="پوشاک مردانه">👔 پوشاک مردانه</option>
                                <option value="پوشاک زنانه">👗 پوشاک زنانه</option>
                                <option value="پوشاک بچگانه">👶 پوشاک بچگانه</option>
                                <option value="کت و شلوار">🤵 کت و شلوار</option>
                                <option value="مانتو">🧥 مانتو</option>
                                <option value="کفش">👞 کفش</option>
                                <option value="کیف و کفش">👜 کیف و کفش</option>
                            </optgroup>
                            <optgroup label="━━━ لوازم خانگی ━━━">
                                <option value="لوازم برقی">🔌 لوازم برقی</option>
                                <option value="مبلمان">🛋️ مبلمان</option>
                                <option value="فرش و موکت">🟫 فرش و موکت</option>
                                <option value="پرده">🪟 پرده</option>
                                <option value="ظروف آشپزخانه">🍳 ظروف آشپزخانه</option>
                                <option value="لوستر و چراغ">💡 لوستر و چراغ</option>
                            </optgroup>
                            <optgroup label="━━━ خدمات ━━━">
                                <option value="آرایشگاه مردانه">💇‍♂️ آرایشگاه مردانه</option>
                                <option value="آرایشگاه زنانه">💇‍♀️ آرایشگاه زنانه</option>
                                <option value="خشکشویی">👕 خشکشویی</option>
                                <option value="خیاطی">🧵 خیاطی</option>
                                <option value="تعمیرات موبایل">📱 تعمیرات موبایل</option>
                                <option value="تعمیرات لوازم خانگی">🔧 تعمیرات لوازم خانگی</option>
                                <option value="خدمات نظافتی">🧹 خدمات نظافتی</option>
                            </optgroup>
                            <optgroup label="━━━ ساختمان ━━━">
                                <option value="مصالح ساختمانی">🧱 مصالح ساختمانی</option>
                                <option value="کاشی و سرامیک">🟦 کاشی و سرامیک</option>
                                <option value="درب و پنجره">🚪 درب و پنجره</option>
                                <option value="تاسیسات">🔨 تاسیسات</option>
                                <option value="رنگ و نقاشی">🎨 رنگ و نقاشی</option>
                            </optgroup>
                            <optgroup label="━━━ خودرو ━━━">
                                <option value="نمایشگاه خودرو">🚗 نمایشگاه خودرو</option>
                                <option value="لوازم یدکی">⚙️ لوازم یدکی</option>
                                <option value="تعمیرگاه">🔧 تعمیرگاه</option>
                                <option value="صافکاری">🔨 صافکاری</option>
                                <option value="کارواش">🧽 کارواش</option>
                            </optgroup>
                            <optgroup label="━━━ سلامت و زیبایی ━━━">
                                <option value="داروخانه">💊 داروخانه</option>
                                <option value="لوازم آرایشی">💄 لوازم آرایشی</option>
                                <option value="عطاری">🌿 عطاری</option>
                                <option value="باشگاه ورزشی">🏋️ باشگاه ورزشی</option>
                            </optgroup>
                            <optgroup label="━━━ الکترونیک ━━━">
                                <option value="موبایل فروشی">📱 موبایل فروشی</option>
                                <option value="کامپیوتر و لپ تاپ">💻 کامپیوتر و لپ تاپ</option>
                                <option value="لوازم جانبی">🎧 لوازم جانبی</option>
                            </optgroup>
                            <optgroup label="━━━ سایر ━━━">
                                <option value="طلا و جواهر">💎 طلا و جواهر</option>
                                <option value="ساعت">⌚ ساعت</option>
                                <option value="عینک فروشی">👓 عینک فروشی</option>
                                <option value="اسباب بازی">🎮 اسباب بازی</option>
                                <option value="کتاب فروشی">📚 کتاب فروشی</option>
                                <option value="لوازم التحریر">✏️ لوازم التحریر</option>
                                <option value="گل فروشی">🌸 گل فروشی</option>
                                <option value="آکواریوم">🐠 آکواریوم</option>
                                <option value="ابزار فروشی">🛠️ ابزار فروشی</option>
                            </optgroup>
                        </select>
                    </div>

                    <!-- WhatsApp Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967..."/>
                                </svg>
                                شماره واتساپ
                            </span>
                        </label>
                        <input type="text" wire:model="whatsapp_number"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                            placeholder="مثال: 09123456789">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                شماره تماس
                            </span>
                        </label>
                        <input type="text" wire:model="phone_number"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                            placeholder="شماره تماس">
                    </div>

                    <!-- Third Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">شماره سوم</label>
                        <input type="text" wire:model="third_number"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                            placeholder="شماره سوم">
                    </div>

                    <!-- شهر -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                شهر
                            </span>
                        </label>
                        <select wire:model="city"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 font-medium hover:border-slate-400 cursor-pointer">
                            <option value="هرات">هرات</option>
                            <option value="کابل">کابل</option>
                            <option value="قندهار">قندهار</option>
                            <!-- ... بقیه شهرها ... -->
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="sm:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                آدرس
                            </span>
                        </label>
                        <input type="text" wire:model="address"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                            placeholder="آدرس کامل">
                    </div>

                    <!-- Business Description -->
                    <div class="sm:col-span-2 lg:col-span-3">
                        <label class="block text-xs sm:text-sm font-bold text-slate-700 mb-2">توضیحات</label>
                        <textarea wire:model="business_description" rows="3"
                            class="w-full border-2 border-slate-300 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400 resize-none"
                            placeholder="توضیحات مربوط به کسب و کار..."></textarea>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-end">
                    @if($isEdit)
                    <button type="button" wire:click="resetForm"
                        class="group bg-white border-2 border-slate-300 text-slate-700 hover:bg-slate-50 hover:border-slate-400 px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 flex items-center gap-2">
                        <svg class="w-4 h-4 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        انصراف
                    </button>
                    @endif
                    <button type="submit"
                        class="group bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-3 rounded-xl text-sm font-bold transition-all duration-200 flex items-center justify-center gap-2 shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/30 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $isEdit ? 'بروزرسانی' : 'ثبت اطلاعات' }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Search -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-200/60 p-5 mb-6">
            <div class="relative">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" wire:model.live.debounce.300ms="search"
                    class="w-full pr-12 pl-4 py-3.5 border-2 border-slate-300 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all bg-white text-slate-800 placeholder-slate-400 font-medium hover:border-slate-400"
                    placeholder="جستجو بر اساس نام کسب و کار، شخص تماس، شهر یا شماره...">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center">
                    <kbd class="px-2 py-1 bg-slate-100 text-slate-500 text-xs rounded-md border border-slate-200">⌘K</kbd>
                </div>
            </div>
        </div>

        <!-- Table - Desktop -->
        <div class="hidden md:block bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-slate-200/60 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead>
                        <tr class="bg-gradient-to-r from-slate-800 to-slate-700">
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">#</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">کسب و کار</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">نوع</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">دسته‌بندی</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">شخص تماس</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">واتساپ</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">شهر</th>
                            <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100">
                        @forelse($informations as $information)
                        <tr class="hover:bg-blue-50/50 transition-all duration-200 group">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-slate-100 text-slate-600 rounded-full text-sm font-bold group-hover:bg-blue-100 group-hover:text-blue-600 transition">
                                    {{ $informations->firstItem() + $loop->index }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-bold text-slate-800">{{ $information->business_name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if($information->business_type)
                                <span class="px-3 py-1 bg-gradient-to-r from-blue-100 to-blue-50 text-blue-700 rounded-full text-xs font-bold border border-blue-200">
                                    {{ $information->business_type }}
                                </span>
                                @else
                                <span class="text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 font-medium">
                                @if($information->category)
                                <span class="flex items-center gap-1.5">
                                    <span class="text-lg">📌</span>
                                    {{ $information->category }}
                                </span>
                                @else
                                <span class="text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 font-medium">
                                {{ $information->contact_person ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 font-medium dir-ltr text-left">
                                @if($information->whatsapp_number)
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967..."/>
                                    </svg>
                                    {{ $information->whatsapp_number }}
                                </span>
                                @else
                                <span class="text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if($information->city)
                                <span class="flex items-center gap-1.5 font-bold text-slate-700">
                                    <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $information->city }}
                                </span>
                                @else
                                <span class="text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button wire:click="edit({{ $information->id }})"
                                        class="group relative text-blue-600 hover:text-white hover:bg-blue-600 p-2 rounded-lg border-2 border-blue-500 transition-all duration-200 hover:shadow-lg hover:shadow-blue-500/25"
                                        title="ویرایش">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button wire:click="confirmDelete({{ $information->id }})"
                                        class="group relative text-red-600 hover:text-white hover:bg-red-600 p-2 rounded-lg border-2 border-red-500 transition-all duration-200 hover:shadow-lg hover:shadow-red-500/25"
                                        title="حذف">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center gap-4">
                                    <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-slate-800 text-base font-bold mb-1">هیچ اطلاعاتی یافت نشد</p>
                                        <p class="text-slate-500 text-sm">برای شروع، اطلاعات جدیدی ثبت کنید</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($informations->hasPages())
            <div class="px-6 py-4 border-t border-slate-200 bg-slate-50/50">
                {{ $informations->links() }}
            </div>
            @endif
        </div>

        <!-- Cards - Mobile -->
        <div class="md:hidden space-y-4">
            @forelse($informations as $information)
            <div class="bg-white rounded-2xl shadow-lg border border-slate-200/60 p-5 hover:shadow-xl transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-800 text-sm truncate">
                                {{ $information->business_name }}
                            </h3>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            @if($information->business_type)
                            <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-bold border border-blue-200">
                                {{ $information->business_type }}
                            </span>
                            @endif
                            @if($information->category)
                            <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold border border-emerald-200">
                                📌 {{ $information->category }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-1.5 mr-2">
                        <button wire:click="edit({{ $information->id }})"
                            class="text-blue-600 hover:text-white hover:bg-blue-600 p-2 rounded-lg border-2 border-blue-500 transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>
                        <button wire:click="confirmDelete({{ $information->id }})"
                            class="text-red-600 hover:text-white hover:bg-red-600 p-2 rounded-lg border-2 border-red-500 transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="space-y-2 text-xs">
                    @if($information->contact_person)
                    <div class="flex items-center gap-2.5 text-slate-600 bg-slate-50 p-2.5 rounded-lg">
                        <div class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <span class="font-bold">{{ $information->contact_person }}</span>
                    </div>
                    @endif
                    
                    @if($information->whatsapp_number)
                    <div class="flex items-center gap-2.5 text-slate-600 bg-emerald-50 p-2.5 rounded-lg">
                        <div class="w-7 h-7 bg-emerald-100 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967..."/>
                            </svg>
                        </div>
                        <span dir="ltr" class="font-bold">{{ $information->whatsapp_number }}</span>
                    </div>
                    @endif
                    
                    @if($information->phone_number)
                    <div class="flex items-center gap-2.5 text-slate-600 bg-blue-50 p-2.5 rounded-lg">
                        <div class="w-7 h-7 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span dir="ltr">{{ $information->phone_number }}</span>
                    </div>
                    @endif
                    
                    @if($information->city)
                    <div class="flex items-center gap-2.5 text-slate-600 bg-red-50 p-2.5 rounded-lg">
                        <div class="w-7 h-7 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="font-bold">{{ $information->city }}</span>
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="bg-white rounded-2xl shadow-lg border border-slate-200/60 p-12 text-center">
                <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <p class="text-slate-800 text-base font-bold mb-1">هیچ اطلاعاتی یافت نشد</p>
                <p class="text-slate-500 text-sm">برای شروع، اطلاعات جدیدی ثبت کنید</p>
            </div>
            @endforelse

            @if($informations->hasPages())
            <div class="mt-6">
                {{ $informations->links() }}
            </div>
            @endif
        </div>

        <!-- Delete Confirmation Modal -->
        @if($confirmingDelete)
        <div class="fixed inset-0 z-50 overflow-y-auto animate-fadeIn">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity" wire:click="cancelDelete"></div>
                <div class="relative bg-white rounded-2xl max-w-md w-full p-8 shadow-2xl border border-slate-200 animate-scaleIn">
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-red-100 to-red-50 border-2 border-red-200 mb-6 animate-bounce">
                            <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">تأیید حذف</h3>
                        <p class="text-slate-600 text-sm mb-8 font-medium leading-relaxed">
                            آیا از حذف این اطلاعات اطمینان دارید؟<br>
                            <span class="text-red-500 text-xs">این عملیات قابل بازگشت نیست!</span>
                        </p>
                        <div class="flex gap-3 justify-center">
                            <button wire:click="delete"
                                class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 shadow-lg shadow-red-500/25 hover:shadow-xl hover:shadow-red-500/30 transform hover:-translate-y-0.5">
                                بله، حذف کن
                            </button>
                            <button wire:click="cancelDelete"
                                class="bg-white hover:bg-slate-50 text-slate-700 px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 border-2 border-slate-300 hover:border-slate-400">
                                انصراف
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes scaleIn {
        from { 
            opacity: 0;
            transform: scale(0.9) translateY(20px);
        }
        to { 
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .animate-fadeIn {
        animation: fadeIn 0.2s ease-out;
    }
    
    .animate-scaleIn {
        animation: scaleIn 0.3s ease-out;
    }
    
    .animate-slideIn {
        animation: slideIn 0.3s ease-out;
    }
    
    /* استایل‌های اضافی برای hover بهتر */
    .hover\:shadow-2xl {
        transition: box-shadow 0.3s ease;
    }
    
    /* استایل اسکرول بار */
    .overflow-x-auto::-webkit-scrollbar {
        height: 8px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: linear-gradient(to right, #94a3b8, #64748b);
        border-radius: 10px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to right, #64748b, #475569);
    }
</style>
</div>
