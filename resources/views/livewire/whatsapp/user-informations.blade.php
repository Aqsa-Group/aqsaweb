<div class="min-h-screen bg-white py-4 sm:py-8">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-black flex items-center gap-2">
                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                مدیریت اطلاعات کاربران
            </h1>
        </div>

        <!-- Alert Message -->
        @if (session()->has('message'))
            <div class="bg-emerald-50 border-r-4 border-emerald-600 text-emerald-800 px-4 py-3 rounded-md mb-6 flex items-center justify-between"
                x-data="{ show: true }" x-show="show" x-transition>
                <span class="text-sm sm:text-base">{{ session('message') }}</span>
                <button @click="show = false" class="text-emerald-700 hover:text-emerald-900 mr-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        @endif

        <!-- Form Section -->
        <div class="bg-white rounded-lg shadow-md border-2 border-black p-4 sm:p-6 mb-6">
            <h2 class="text-base sm:text-lg font-bold text-black mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                {{ $isEdit ? 'ویرایش اطلاعات' : 'ثبت اطلاعات جدید' }}
            </h2>

            <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    
                    <!-- Business Name -->
                    <div class="lg:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">
                            نام کسب و کار <span class="text-red-600">*</span>
                        </label>
                        <input type="text" wire:model="business_name"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="نام کسب و کار را وارد کنید">
                        @error('business_name')
                            <span class="text-red-600 text-xs mt-1 block font-medium">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Business Type -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">نوع کسب و کار</label>
                        <select wire:model="business_type"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black font-medium">
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
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">دسته‌بندی</label>
                        <select wire:model="category"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black font-medium">
                            <option value="">انتخاب دسته‌بندی...</option>
                            <optgroup label="━━━ مواد غذایی ━━━">
                                <option value="سوپرمارکت">سوپرمارکت</option>
                                <option value="میوه و تره بار">میوه و تره بار</option>
                                <option value="لبنیات">لبنیات</option>
                                <option value="نانوایی">نانوایی</option>
                                <option value="شیرینی فروشی">شیرینی فروشی</option>
                                <option value="آجیل و خشکبار">آجیل و خشکبار</option>
                                <option value="قصابی">قصابی</option>
                                <option value="مرغ و ماهی">مرغ و ماهی</option>
                            </optgroup>
                            <optgroup label="━━━ پوشاک ━━━">
                                <option value="پوشاک مردانه">پوشاک مردانه</option>
                                <option value="پوشاک زنانه">پوشاک زنانه</option>
                                <option value="پوشاک بچگانه">پوشاک بچگانه</option>
                                <option value="کت و شلوار">کت و شلوار</option>
                                <option value="مانتو">مانتو</option>
                                <option value="کفش">کفش</option>
                                <option value="کیف و کفش">کیف و کفش</option>
                            </optgroup>
                            <optgroup label="━━━ لوازم خانگی ━━━">
                                <option value="لوازم برقی">لوازم برقی</option>
                                <option value="مبلمان">مبلمان</option>
                                <option value="فرش و موکت">فرش و موکت</option>
                                <option value="پرده">پرده</option>
                                <option value="ظروف آشپزخانه">ظروف آشپزخانه</option>
                                <option value="لوستر و چراغ">لوستر و چراغ</option>
                            </optgroup>
                            <optgroup label="━━━ خدمات ━━━">
                                <option value="آرایشگاه مردانه">آرایشگاه مردانه</option>
                                <option value="آرایشگاه زنانه">آرایشگاه زنانه</option>
                                <option value="خشکشویی">خشکشویی</option>
                                <option value="خیاطی">خیاطی</option>
                                <option value="تعمیرات موبایل">تعمیرات موبایل</option>
                                <option value="تعمیرات لوازم خانگی">تعمیرات لوازم خانگی</option>
                                <option value="خدمات نظافتی">خدمات نظافتی</option>
                            </optgroup>
                            <optgroup label="━━━ ساختمان ━━━">
                                <option value="مصالح ساختمانی">مصالح ساختمانی</option>
                                <option value="کاشی و سرامیک">کاشی و سرامیک</option>
                                <option value="درب و پنجره">درب و پنجره</option>
                                <option value="تاسیسات">تاسیسات</option>
                                <option value="رنگ و نقاشی">رنگ و نقاشی</option>
                            </optgroup>
                            <optgroup label="━━━ خودرو ━━━">
                                <option value="نمایشگاه خودرو">نمایشگاه خودرو</option>
                                <option value="لوازم یدکی">لوازم یدکی</option>
                                <option value="تعمیرگاه">تعمیرگاه</option>
                                <option value="صافکاری">صافکاری</option>
                                <option value="کارواش">کارواش</option>
                            </optgroup>
                            <optgroup label="━━━ سلامت و زیبایی ━━━">
                                <option value="داروخانه">داروخانه</option>
                                <option value="لوازم آرایشی">لوازم آرایشی</option>
                                <option value="عطاری">عطاری</option>
                                <option value="باشگاه ورزشی">باشگاه ورزشی</option>
                            </optgroup>
                            <optgroup label="━━━ الکترونیک ━━━">
                                <option value="موبایل فروشی">موبایل فروشی</option>
                                <option value="کامپیوتر و لپ تاپ">کامپیوتر و لپ تاپ</option>
                                <option value="لوازم جانبی">لوازم جانبی</option>
                            </optgroup>
                            <optgroup label="━━━ سایر ━━━">
                                <option value="طلا و جواهر">طلا و جواهر</option>
                                <option value="ساعت">ساعت</option>
                                <option value="عینک فروشی">عینک فروشی</option>
                                <option value="اسباب بازی">اسباب بازی</option>
                                <option value="کتاب فروشی">کتاب فروشی</option>
                                <option value="لوازم التحریر">لوازم التحریر</option>
                                <option value="گل فروشی">گل فروشی</option>
                                <option value="آکواریوم">آکواریوم</option>
                                <option value="ابزار فروشی">ابزار فروشی</option>
                            </optgroup>
                        </select>
                    </div>

                   
                    <!-- WhatsApp Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">شماره واتساپ</label>
                        <input type="text" wire:model="whatsapp_number"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="مثال: 09123456789">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">شماره تماس</label>
                        <input type="text" wire:model="phone_number"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="شماره تماس">
                    </div>

                    <!-- Third Number -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">شماره سوم</label>
                        <input type="text" wire:model="third_number"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm dir-ltr text-left focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="شماره سوم">
                    </div>

                    <!-- City -->
                    <div>
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">شهر</label>
                        <input type="text" wire:model="city"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="نام شهر">
                    </div>

                    <!-- Address -->
                    <div class="sm:col-span-2">
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">آدرس</label>
                        <input type="text" wire:model="address"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="آدرس کامل">
                    </div>

                    <!-- Business Description -->
                    <div class="sm:col-span-2 lg:col-span-3">
                        <label class="block text-xs sm:text-sm font-bold text-black mb-1">توضیحات</label>
                        <textarea wire:model="business_description" rows="2"
                            class="w-full border-2 border-black rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                            placeholder="توضیحات مربوط به کسب و کار..."></textarea>
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="mt-4 flex flex-col sm:flex-row gap-2 justify-end">
                    @if($isEdit)
                        <button type="button" wire:click="resetForm"
                            class="bg-white border-2 border-black text-black hover:bg-slate-50 px-4 py-2.5 rounded-lg text-sm font-bold transition">
                            انصراف
                        </button>
                    @endif
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg text-sm font-bold transition flex items-center justify-center gap-2 border-2 border-blue-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $isEdit ? 'بروزرسانی' : 'ثبت اطلاعات' }}
                    </button>
                </div>
            </form>
        </div>

        <!-- Search -->
        <div class="bg-white rounded-lg shadow-md border-2 border-black p-4 mb-6">
            <div class="relative">
                <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" wire:model.live.debounce.300ms="search"
                    class="w-full pr-10 pl-4 py-2.5 border-2 border-black rounded-lg text-sm focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition bg-white text-black placeholder-slate-400 font-medium"
                    placeholder="جستجو بر اساس نام کسب و کار، شخص تماس، شهر یا شماره...">
            </div>
        </div>

        <!-- Table - Desktop -->
        <div class="hidden md:block bg-white rounded-lg shadow-md border-2 border-black overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-black">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">#</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">کسب و کار</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">نوع</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">دسته‌بندی</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">شخص تماس</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">واتساپ</th>
                            <th class="px-4 py-3 text-right text-xs font-bold text-white uppercase">شهر</th>
                            <th class="px-4 py-3 text-center text-xs font-bold text-white uppercase">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-black">
                        @forelse($informations as $information)
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black font-bold">
                                    {{ $informations->firstItem() + $loop->index }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm font-bold text-black">
                                    {{ $information->business_name }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black">
                                    @if($information->business_type)
                                        <span class="px-2 py-0.5 bg-blue-100 text-blue-800 rounded-full text-xs font-bold">
                                            {{ $information->business_type }}
                                        </span>
                                    @else
                                        <span class="text-slate-400">-</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black font-medium">
                                    {{ $information->category ?? '-' }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black font-medium">
                                    {{ $information->contact_person ?? '-' }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black font-medium dir-ltr text-left">
                                    {{ $information->whatsapp_number ?? '-' }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-black font-bold">
                                    {{ $information->city ?? '-' }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-center">
                                    <div class="flex items-center justify-center gap-1">
                                        <button wire:click="edit({{ $information->id }})"
                                            class="text-blue-600 hover:text-white hover:bg-blue-600 p-1.5 rounded border-2 border-blue-600 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button wire:click="confirmDelete({{ $information->id }})"
                                            class="text-red-600 hover:text-white hover:bg-red-600 p-1.5 rounded border-2 border-red-600 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center gap-2">
                                        <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                        <span class="text-black text-sm font-bold">هیچ اطلاعاتی یافت نشد</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 border-t-2 border-black">
                {{ $informations->links() }}
            </div>
        </div>

        <!-- Cards - Mobile -->
        <div class="md:hidden space-y-3">
            @forelse($informations as $information)
                <div class="bg-white rounded-lg shadow-md border-2 border-black p-4">
                    <div class="flex justify-between items-start mb-3">
                        <div class="flex-1 min-w-0">
                            <h3 class="font-bold text-black text-sm truncate">
                                {{ $information->business_name }}
                            </h3>
                            <div class="flex flex-wrap gap-1 mt-1">
                                @if($information->business_type)
                                    <span class="px-2 py-0.5 bg-blue-100 text-blue-800 rounded-full text-xs font-bold">
                                        {{ $information->business_type }}
                                    </span>
                                @endif
                                @if($information->category)
                                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded-full text-xs font-bold">
                                        {{ $information->category }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="flex gap-1 mr-2">
                            <button wire:click="edit({{ $information->id }})"
                                class="text-blue-600 hover:text-white hover:bg-blue-600 p-1.5 rounded border-2 border-blue-600 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </button>
                            <button wire:click="confirmDelete({{ $information->id }})"
                                class="text-red-600 hover:text-white hover:bg-red-600 p-1.5 rounded border-2 border-red-600 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-1.5 text-xs text-black font-medium">
                        @if($information->contact_person)
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-bold">{{ $information->contact_person }}</span>
                            </div>
                        @endif
                        @if($information->whatsapp_number)
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                <span dir="ltr" class="font-bold">{{ $information->whatsapp_number }}</span>
                            </div>
                        @endif
                        @if($information->phone_number)
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span dir="ltr">{{ $information->phone_number }}</span>
                            </div>
                        @endif
                        @if($information->city)
                            <div class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="font-bold">{{ $information->city }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-lg shadow-md border-2 border-black p-8 text-center">
                    <svg class="w-10 h-10 text-slate-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                    <span class="text-black text-sm font-bold">هیچ اطلاعاتی یافت نشد</span>
                </div>
            @endforelse
            
            @if($informations->hasPages())
                <div class="mt-4">
                    {{ $informations->links() }}
                </div>
            @endif
        </div>

        <!-- Delete Confirmation Modal -->
        @if($confirmingDelete)
            <div class="fixed inset-0 z-50 overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-black bg-opacity-70 transition-opacity" wire:click="cancelDelete"></div>
                    <div class="relative bg-white rounded-lg max-w-md w-full p-6 shadow-2xl border-2 border-black">
                        <div class="text-center">
                            <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-red-100 border-2 border-red-600 mb-4">
                                <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-black mb-2">تأیید حذف</h3>
                            <p class="text-black text-sm mb-6 font-medium">
                                آیا از حذف این اطلاعات اطمینان دارید؟
                            </p>
                            <div class="flex gap-3 justify-center">
                                <button wire:click="delete"
                                    class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg text-sm font-bold transition border-2 border-red-600">
                                    بله، حذف کن
                                </button>
                                <button wire:click="cancelDelete"
                                    class="bg-white hover:bg-slate-50 text-black px-5 py-2 rounded-lg text-sm font-bold transition border-2 border-black">
                                    انصراف
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>