<div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 py-4 sm:py-8">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">

        <!-- Header -->
        <div class="mb-8 text-center sm:text-right">
            <div class="flex items-center justify-center sm:justify-start gap-3 mb-2">
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 p-2.5 rounded-xl shadow-lg shadow-emerald-500/20">
                    <svg class="w-7 h-7 sm:w-9 sm:h-9 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-l from-emerald-400 to-teal-400 bg-clip-text text-transparent">
                    مدیریت اطلاعات کاربران
                </h1>
            </div>
            <p class="text-slate-400 text-sm">مدیریت و سازماندهی اطلاعات کسب و کارها</p>
        </div>

        <!-- Alert Message -->
        @if (session()->has('message'))
        <div class="bg-gradient-to-r from-emerald-900/50 to-green-900/50 border-r-4 border-emerald-500 text-emerald-300 px-5 py-4 rounded-xl mb-6 flex items-center justify-between shadow-lg shadow-emerald-500/10 backdrop-blur-sm animate-slideIn"
            x-data="{ show: true }" x-show="show" x-transition>
            <div class="flex items-center gap-3">
                <div class="bg-emerald-500/20 p-2 rounded-full">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <span class="text-sm sm:text-base font-medium">{{ session('message') }}</span>
            </div>
            <button @click="show = false" class="text-emerald-400 hover:text-emerald-300 transition hover:bg-emerald-500/20 p-1.5 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        @endif

        <!-- Form Section -->
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl shadow-xl border border-slate-700/50 p-5 sm:p-8 mb-8 hover:shadow-2xl hover:border-slate-600/50 transition-all duration-300">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-gradient-to-br from-emerald-500 to-teal-600 p-2 rounded-lg shadow-md shadow-emerald-500/20">
                    <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold text-slate-200">
                    {{ $isEdit ? 'ویرایش اطلاعات' : 'ثبت اطلاعات جدید' }}
                </h2>
                @if($isEdit)
                <span class="px-3 py-1 bg-amber-500/20 text-amber-400 text-xs font-bold rounded-full border border-amber-500/30">در حال ویرایش</span>
                @endif
            </div>

            <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                    <!-- Business Name -->
                    <div class="lg:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">
                            نام کسب و کار <span class="text-red-400">*</span>
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-500 group-focus-within:text-emerald-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <input type="text" wire:model="business_name"
                                class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl pr-10 pl-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                                placeholder="نام کسب و کار را وارد کنید">
                        </div>
                        @error('business_name')
                        <span class="text-red-400 text-xs mt-1.5 block font-medium flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <!-- Business Type -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">نوع کسب و کار</label>
                        <select wire:model="business_type"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 font-medium hover:border-slate-500 cursor-pointer">
                            <option value="" class="bg-slate-800">انتخاب کنید...</option>
                            <option value="عمده" class="bg-slate-800">عمده</option>
                            <option value="پرچون" class="bg-slate-800">پرچون</option>
                            <option value="عمده و پرچون" class="bg-slate-800">عمده و پرچون</option>
                            <option value="خدماتی" class="bg-slate-800">خدماتی</option>
                            <option value="تولیدی" class="bg-slate-800">تولیدی</option>
                            <option value="واردات" class="bg-slate-800">واردات</option>
                            <option value="صادرات" class="bg-slate-800">صادرات</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">دسته‌بندی</label>
                        <select wire:model="category"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 font-medium hover:border-slate-500 cursor-pointer">
                            <option value="" class="bg-slate-800">انتخاب دسته‌بندی...</option>
                            <optgroup label="━━━ مواد غذایی ━━━" class="text-emerald-400">
                                <option value="سوپرمارکت" class="bg-slate-800">🛒 سوپرمارکت</option>
                                <option value="میوه و تره بار" class="bg-slate-800">🍎 میوه و تره بار</option>
                                <option value="لبنیات" class="bg-slate-800">🥛 لبنیات</option>
                                <option value="نانوایی" class="bg-slate-800">🍞 نانوایی</option>
                                <option value="شیرینی فروشی" class="bg-slate-800">🍰 شیرینی فروشی</option>
                                <option value="آجیل و خشکبار" class="bg-slate-800">🥜 آجیل و خشکبار</option>
                                <option value="قصابی" class="bg-slate-800">🥩 قصابی</option>
                                <option value="مرغ و ماهی" class="bg-slate-800">🐟 مرغ و ماهی</option>
                            </optgroup>
                            <optgroup label="━━━ پوشاک ━━━" class="text-purple-400">
                                <option value="پوشاک مردانه" class="bg-slate-800">👔 پوشاک مردانه</option>
                                <option value="پوشاک زنانه" class="bg-slate-800">👗 پوشاک زنانه</option>
                                <option value="پوشاک بچگانه" class="bg-slate-800">👶 پوشاک بچگانه</option>
                                <option value="کت و شلوار" class="bg-slate-800">🤵 کت و شلوار</option>
                                <option value="مانتو" class="bg-slate-800">🧥 مانتو</option>
                                <option value="کفش" class="bg-slate-800">👞 کفش</option>
                                <option value="کیف و کفش" class="bg-slate-800">👜 کیف و کفش</option>
                            </optgroup>
                            <optgroup label="━━━ لوازم خانگی ━━━" class="text-blue-400">
                                <option value="لوازم برقی" class="bg-slate-800">🔌 لوازم برقی</option>
                                <option value="مبلمان" class="bg-slate-800">🛋️ مبلمان</option>
                                <option value="فرش و موکت" class="bg-slate-800">🟫 فرش و موکت</option>
                                <option value="پرده" class="bg-slate-800">🪟 پرده</option>
                                <option value="ظروف آشپزخانه" class="bg-slate-800">🍳 ظروف آشپزخانه</option>
                                <option value="لوستر و چراغ" class="bg-slate-800">💡 لوستر و چراغ</option>
                            </optgroup>
                            <optgroup label="━━━ خدمات ━━━" class="text-amber-400">
                                <option value="آرایشگاه مردانه" class="bg-slate-800">💇‍♂️ آرایشگاه مردانه</option>
                                <option value="آرایشگاه زنانه" class="bg-slate-800">💇‍♀️ آرایشگاه زنانه</option>
                                <option value="خشکشویی" class="bg-slate-800">👕 خشکشویی</option>
                                <option value="خیاطی" class="bg-slate-800">🧵 خیاطی</option>
                                <option value="تعمیرات موبایل" class="bg-slate-800">📱 تعمیرات موبایل</option>
                                <option value="تعمیرات لوازم خانگی" class="bg-slate-800">🔧 تعمیرات لوازم خانگی</option>
                                <option value="خدمات نظافتی" class="bg-slate-800">🧹 خدمات نظافتی</option>
                            </optgroup>
                            <optgroup label="━━━ ساختمان ━━━" class="text-orange-400">
                                <option value="مصالح ساختمانی" class="bg-slate-800">🧱 مصالح ساختمانی</option>
                                <option value="کاشی و سرامیک" class="bg-slate-800">🟦 کاشی و سرامیک</option>
                                <option value="درب و پنجره" class="bg-slate-800">🚪 درب و پنجره</option>
                                <option value="تاسیسات" class="bg-slate-800">🔨 تاسیسات</option>
                                <option value="رنگ و نقاشی" class="bg-slate-800">🎨 رنگ و نقاشی</option>
                            </optgroup>
                            <optgroup label="━━━ خودرو ━━━" class="text-red-400">
                                <option value="نمایشگاه خودرو" class="bg-slate-800">🚗 نمایشگاه خودرو</option>
                                <option value="لوازم یدکی" class="bg-slate-800">⚙️ لوازم یدکی</option>
                                <option value="تعمیرگاه" class="bg-slate-800">🔧 تعمیرگاه</option>
                                <option value="صافکاری" class="bg-slate-800">🔨 صافکاری</option>
                                <option value="کارواش" class="bg-slate-800">🧽 کارواش</option>
                            </optgroup>
                            <optgroup label="━━━ سلامت و زیبایی ━━━" class="text-pink-400">
                                <option value="داروخانه" class="bg-slate-800">💊 داروخانه</option>
                                <option value="لوازم آرایشی" class="bg-slate-800">💄 لوازم آرایشی</option>
                                <option value="عطاری" class="bg-slate-800">🌿 عطاری</option>
                                <option value="باشگاه ورزشی" class="bg-slate-800">🏋️ باشگاه ورزشی</option>
                            </optgroup>
                            <optgroup label="━━━ الکترونیک ━━━" class="text-cyan-400">
                                <option value="موبایل فروشی" class="bg-slate-800">📱 موبایل فروشی</option>
                                <option value="کامپیوتر و لپ تاپ" class="bg-slate-800">💻 کامپیوتر و لپ تاپ</option>
                                <option value="لوازم جانبی" class="bg-slate-800">🎧 لوازم جانبی</option>
                            </optgroup>
                            <optgroup label="━━━ سایر ━━━" class="text-gray-400">
                                <option value="طلا و جواهر" class="bg-slate-800">💎 طلا و جواهر</option>
                                <option value="ساعت" class="bg-slate-800">⌚ ساعت</option>
                                <option value="عینک فروشی" class="bg-slate-800">👓 عینک فروشی</option>
                                <option value="اسباب بازی" class="bg-slate-800">🎮 اسباب بازی</option>
                                <option value="کتاب فروشی" class="bg-slate-800">📚 کتاب فروشی</option>
                                <option value="لوازم التحریر" class="bg-slate-800">✏️ لوازم التحریر</option>
                                <option value="گل فروشی" class="bg-slate-800">🌸 گل فروشی</option>
                                <option value="آکواریوم" class="bg-slate-800">🐠 آکواریوم</option>
                                <option value="ابزار فروشی" class="bg-slate-800">🛠️ ابزار فروشی</option>
                            </optgroup>
                        </select>
                    </div>

                    <!-- Contact Person -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">شخص تماس</label>
                        <input type="text" wire:model="contact_person"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                            placeholder="نام شخص تماس">
                    </div>

                    <!-- WhatsApp Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                شماره واتساپ
                            </span>
                        </label>
                        <input type="text" wire:model="whatsapp_number"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                            placeholder="مثال: 09123456789">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                شماره تماس
                            </span>
                        </label>
                        <input type="text" wire:model="phone_number"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                            placeholder="شماره تماس">
                    </div>

                    <!-- Third Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">شماره سوم</label>
                        <input type="text" wire:model="third_number"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                            placeholder="شماره سوم">
                    </div>

                    <!-- شهر -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                شهر
                            </span>
                        </label>
                        <select wire:model="city"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 font-medium hover:border-slate-500 cursor-pointer">
                            <option value="هرات" class="bg-slate-800">هرات</option>
                            <option value="کابل" class="bg-slate-800">کابل</option>
                            <option value="قندهار" class="bg-slate-800">قندهار</option>
                            <option value="بلخ" class="bg-slate-800">بلخ</option>
                            <option value="ننگرهار" class="bg-slate-800">ننگرهار</option>
                            <option value="بامیان" class="bg-slate-800">بامیان</option>
                            <option value="بدخشان" class="bg-slate-800">بدخشان</option>
                            <option value="بغلان" class="bg-slate-800">بغلان</option>
                            <option value="فاریاب" class="bg-slate-800">فاریاب</option>
                            <option value="غزنی" class="bg-slate-800">غزنی</option>
                            <option value="غور" class="bg-slate-800">غور</option>
                            <option value="هلمند" class="bg-slate-800">هلمند</option>
                            <option value="جوزجان" class="bg-slate-800">جوزجان</option>
                            <option value="کاپیسا" class="bg-slate-800">کاپیسا</option>
                            <option value="خوست" class="bg-slate-800">خوست</option>
                            <option value="کنر" class="bg-slate-800">کنر</option>
                            <option value="کندز" class="bg-slate-800">کندز</option>
                            <option value="لغمان" class="bg-slate-800">لغمان</option>
                            <option value="لوگر" class="bg-slate-800">لوگر</option>
                            <option value="میدان وردک" class="bg-slate-800">میدان وردک</option>
                            <option value="نورستان" class="bg-slate-800">نورستان</option>
                            <option value="پکتیا" class="bg-slate-800">پکتیا</option>
                            <option value="پکتیکا" class="bg-slate-800">پکتیکا</option>
                            <option value="پنجشیر" class="bg-slate-800">پنجشیر</option>
                            <option value="پروان" class="bg-slate-800">پروان</option>
                            <option value="سمنگان" class="bg-slate-800">سمنگان</option>
                            <option value="سرپل" class="bg-slate-800">سرپل</option>
                            <option value="تخار" class="bg-slate-800">تخار</option>
                            <option value="ارزگان" class="bg-slate-800">ارزگان</option>
                            <option value="دایکندی" class="bg-slate-800">دایکندی</option>
                            <option value="فراه" class="bg-slate-800">فراه</option>
                            <option value="نیمروز" class="bg-slate-800">نیمروز</option>
                            <option value="زابل" class="bg-slate-800">زابل</option>
                            <option value="بادغیس" class="bg-slate-800">بادغیس</option>
                            <option value="پلخمری" class="bg-slate-800">پلخمری</option>
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="sm:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                                آدرس
                            </span>
                        </label>
                        <input type="text" wire:model="address"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                            placeholder="آدرس کامل">
                    </div>

                    <!-- Business Description -->
                    <div class="sm:col-span-2 lg:col-span-3">
                        <label class="block text-xs sm:text-sm font-bold text-slate-300 mb-2">توضیحات</label>
                        <textarea wire:model="business_description" rows="3"
                            class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500 resize-none"
                            placeholder="توضیحات مربوط به کسب و کار..."></textarea>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-end">
                    @if($isEdit)
                    <button type="button" wire:click.prevent="resetForm"
                        class="group bg-slate-800 border-2 border-slate-600 text-slate-300 hover:bg-slate-700 hover:border-slate-500 px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 flex items-center gap-2">
                        <svg class="w-4 h-4 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        انصراف
                    </button>
                    @endif
                    <button type="submit"
                        class="group bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-gray-900 px-8 py-3 rounded-xl text-sm font-bold transition-all duration-200 flex items-center justify-center gap-2 shadow-lg shadow-emerald-500/20 hover:shadow-xl hover:shadow-emerald-500/30 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $isEdit ? 'بروزرسانی' : 'ثبت اطلاعات' }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Search -->
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-700/50 p-5 mb-6">
            <div class="relative">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" wire:model.live.debounce.300ms="search"
                    class="w-full bg-slate-900/80 border-2 border-slate-600 rounded-xl pr-12 pl-4 py-3.5 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all text-slate-200 placeholder-slate-500 font-medium hover:border-slate-500"
                    placeholder="جستجو بر اساس نام کسب و کار، شخص تماس، شهر یا شماره...">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center">
                    <kbd class="px-2 py-1 bg-slate-700 text-slate-400 text-xs rounded-md border border-slate-600">⌘K</kbd>
                </div>
            </div>
        </div>

        <!-- Table - Desktop -->
        <div class="hidden md:block bg-slate-800/50 backdrop-blur-sm rounded-2xl shadow-xl border border-slate-700/50 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-700">
                    <thead>
                        <tr class="bg-gradient-to-r from-slate-900 to-slate-800">
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">#</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">کسب و کار</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">نوع</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">دسته‌بندی</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">شخص تماس</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">واتساپ</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-emerald-400 uppercase tracking-wider">شهر</th>
                            <th class="px-6 py-4 text-center text-xs font-bold text-emerald-400 uppercase tracking-wider">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700">
                        @forelse($informations as $information)
                        <tr class="hover:bg-slate-700/50 transition-all duration-200 group">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-slate-700 text-slate-300 rounded-full text-sm font-bold group-hover:bg-emerald-500/20 group-hover:text-emerald-400 transition">
                                    {{ $informations->firstItem() + $loop->index }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-bold text-slate-200">{{ $information->business_name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if($information->business_type)
                                <span class="px-3 py-1 bg-gradient-to-r from-emerald-500/20 to-teal-500/20 text-emerald-400 rounded-full text-xs font-bold border border-emerald-500/30">
                                    {{ $information->business_type }}
                                </span>
                                @else
                                <span class="text-slate-500">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300 font-medium">
                                @if($information->category)
                                <span class="flex items-center gap-1.5">
                                    <span class="text-lg">📌</span>
                                    {{ $information->category }}
                                </span>
                                @else
                                <span class="text-slate-500">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300 font-medium">
                                {{ $information->contact_person ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-300 font-medium dir-ltr text-left">
                                @if($information->whatsapp_number)
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                    </svg>
                                    {{ $information->whatsapp_number }}
                                </span>
                                @else
                                <span class="text-slate-500">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @if($information->city)
                                <span class="flex items-center gap-1.5 font-bold text-slate-200">
                                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $information->city }}
                                </span>
                                @else
                                <span class="text-slate-500">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button type="button" wire:click.prevent="edit({{ $information->id }})"
                                        class="group relative text-emerald-400 hover:text-gray-900 hover:bg-emerald-500 p-2 rounded-lg border-2 border-emerald-500/50 hover:border-emerald-500 transition-all duration-200 hover:shadow-lg hover:shadow-emerald-500/20"
                                        title="ویرایش">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button type="button" wire:click.prevent="confirmDelete({{ $information->id }})"
                                        class="group relative text-red-400 hover:text-gray-900 hover:bg-red-500 p-2 rounded-lg border-2 border-red-500/50 hover:border-red-500 transition-all duration-200 hover:shadow-lg hover:shadow-red-500/20"
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
                                    <div class="w-20 h-20 bg-slate-700 rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-slate-300 text-base font-bold mb-1">هیچ اطلاعاتی یافت نشد</p>
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
            <div class="px-6 py-4 border-t border-slate-700 bg-slate-900/50">
                {{ $informations->links() }}
            </div>
            @endif
        </div>

        <!-- Cards - Mobile -->
        <div class="md:hidden space-y-4">
            @forelse($informations as $information)
            <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-700/50 p-5 hover:shadow-xl hover:border-slate-600/50 transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="font-bold text-slate-200 text-sm truncate">
                                {{ $information->business_name }}
                            </h3>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            @if($information->business_type)
                            <span class="px-2.5 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-xs font-bold border border-emerald-500/30">
                                {{ $information->business_type }}
                            </span>
                            @endif
                            @if($information->category)
                            <span class="px-2.5 py-1 bg-blue-500/20 text-blue-400 rounded-full text-xs font-bold border border-blue-500/30">
                                📌 {{ $information->category }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-1.5 mr-2">
                        <button type="button" wire:click.prevent="edit({{ $information->id }})"
                            class="text-emerald-400 hover:text-gray-900 hover:bg-emerald-500 p-2 rounded-lg border-2 border-emerald-500/50 hover:border-emerald-500 transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>
                        <button type="button" wire:click.prevent="confirmDelete({{ $information->id }})"
                            class="text-red-400 hover:text-gray-900 hover:bg-red-500 p-2 rounded-lg border-2 border-red-500/50 hover:border-red-500 transition-all duration-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="space-y-2 text-xs">
                    @if($information->contact_person)
                    <div class="flex items-center gap-2.5 text-slate-300 bg-slate-900/50 p-2.5 rounded-lg border border-slate-700/50">
                        <div class="w-7 h-7 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <span class="font-bold">{{ $information->contact_person }}</span>
                    </div>
                    @endif
                    
                    @if($information->whatsapp_number)
                    <div class="flex items-center gap-2.5 text-slate-300 bg-emerald-900/30 p-2.5 rounded-lg border border-emerald-500/20">
                        <div class="w-7 h-7 bg-emerald-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967..."/>
                            </svg>
                        </div>
                        <span dir="ltr" class="font-bold">{{ $information->whatsapp_number }}</span>
                    </div>
                    @endif
                    
                    @if($information->phone_number)
                    <div class="flex items-center gap-2.5 text-slate-300 bg-blue-900/30 p-2.5 rounded-lg border border-blue-500/20">
                        <div class="w-7 h-7 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span dir="ltr">{{ $information->phone_number }}</span>
                    </div>
                    @endif
                    
                    @if($information->city)
                    <div class="flex items-center gap-2.5 text-slate-300 bg-red-900/30 p-2.5 rounded-lg border border-red-500/20">
                        <div class="w-7 h-7 bg-red-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-700/50 p-12 text-center">
                <div class="w-20 h-20 bg-slate-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
            </div>
            <p class="text-slate-300 text-base font-bold mb-1">هیچ اطلاعاتی یافت نشد</p>
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
            <div class="fixed inset-0 bg-black/70 backdrop-blur-sm transition-opacity" wire:click="cancelDelete"></div>
            <div class="relative bg-slate-800 rounded-2xl max-w-md w-full p-8 shadow-2xl border border-slate-700 animate-scaleIn">
                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-2xl bg-gradient-to-br from-red-900/50 to-red-800/50 border-2 border-red-500/30 mb-6 animate-bounce">
                        <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-200 mb-3">تأیید حذف</h3>
                    <p class="text-slate-400 text-sm mb-8 font-medium leading-relaxed">
                        آیا از حذف این اطلاعات اطمینان دارید؟<br>
                        <span class="text-red-400 text-xs">این عملیات قابل بازگشت نیست!</span>
                    </p>
                    <div class="flex gap-3 justify-center">
                        <button type="button" wire:click.prevent="delete"
                            class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-gray-900 px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 shadow-lg shadow-red-500/20 hover:shadow-xl hover:shadow-red-500/30 transform hover:-translate-y-0.5">
                            بله، حذف کن
                        </button>
                        <button type="button" wire:click.prevent="cancelDelete"
                            class="bg-slate-700 hover:bg-slate-600 text-slate-300 px-6 py-3 rounded-xl text-sm font-bold transition-all duration-200 border-2 border-slate-600 hover:border-slate-500">
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

.overflow-x-auto::-webkit-scrollbar {
    height: 8px;
}

.overflow-x-auto::-webkit-scrollbar-track {
    background: #1e293b;
    border-radius: 10px;
}

.overflow-x-auto::-webkit-scrollbar-thumb {
    background: linear-gradient(to right, #475569, #64748b);
    border-radius: 10px;
}

.overflow-x-auto::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to right, #64748b, #94a3b8);
}

select option {
    background-color: #1e293b;
    color: #e2e8f0;
}

::placeholder {
    color: #64748b !important;
}

input:focus, select:focus, textarea:focus {
    outline: none;
}
</style>
<script>
document.addEventListener('livewire:init', () => {
    Livewire.on('edit-mode-activated', (event) => {
        const data = event[0];
        
        // تنظیم مستقیم value فیلدها
        if (data.business_name) document.getElementById('input_business_name').value = data.business_name;
        if (data.business_type) document.getElementById('input_business_type').value = data.business_type;
        if (data.category) document.getElementById('input_category').value = data.category;
        if (data.contact_person) document.getElementById('input_contact_person').value = data.contact_person;
        if (data.whatsapp_number) document.getElementById('input_whatsapp_number').value = data.whatsapp_number;
        if (data.phone_number) document.getElementById('input_phone_number').value = data.phone_number;
        if (data.third_number) document.getElementById('input_third_number').value = data.third_number;
        if (data.city) document.getElementById('input_city').value = data.city;
        if (data.address) document.getElementById('input_address').value = data.address;
        if (data.business_description) document.getElementById('input_business_description').value = data.business_description;
    });
});
</script>
</div>