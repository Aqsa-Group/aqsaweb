<div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-4 sm:px-6 py-4">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <h2 class="text-lg sm:text-xl font-bold text-white">
                    <i class="fab fa-whatsapp ml-2"></i>
                    مدیریت اطلاعات کاربران
                </h2>
                <button wire:click="create"
                    class="bg-white text-green-700 hover:bg-green-50 px-4 py-2 rounded-lg font-medium transition duration-200 inline-flex items-center justify-center gap-2 text-sm sm:text-base">
                    <i class="fas fa-plus"></i>
                    افزودن اطلاعات جدید
                </button>
            </div>
        </div>

        <!-- Search & Messages -->
        <div class="p-4 sm:p-6 border-b border-gray-200">
            @if (session()->has('message'))
                <div class="bg-green-100 border-r-4 border-green-500 text-green-700 px-4 py-3 rounded-md mb-4 flex items-center justify-between"
                    x-data="{ show: true }" x-show="show" x-transition>
                    <span>{{ session('message') }}</span>
                    <button @click="show = false" class="text-green-700 hover:text-green-900">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif

            <div class="relative">
                <i class="fas fa-search absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="جستجو بر اساس نام کسب و کار، شخص تماس، شهر یا شماره..."
                    class="w-full pr-10 pl-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
            </div>
        </div>

        <!-- Table - Desktop -->
        <div class="hidden md:block overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">نام کسب و کار</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">شخص تماس</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">شماره واتساپ</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">شهر</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">نوع کسب و کار</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">عملیات</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($informations as $information)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $informations->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $information->business_name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $information->contact_person ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dir-ltr text-left">
                                {{ $information->whatsapp_number ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $information->city ?? '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">
                                    {{ $information->business_type ?? '-' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button wire:click="edit({{ $information->id }})"
                                        class="text-blue-600 hover:text-blue-900 p-1.5 rounded-lg hover:bg-blue-50 transition"
                                        title="ویرایش">
                                        <i class="fas fa-edit text-lg"></i>
                                    </button>
                                    <button wire:click="confirmDelete({{ $information->id }})"
                                        class="text-red-600 hover:text-red-900 p-1.5 rounded-lg hover:bg-red-50 transition"
                                        title="حذف">
                                        <i class="fas fa-trash text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                <div class="flex flex-col items-center gap-2">
                                    <i class="fas fa-info-circle text-4xl text-gray-300"></i>
                                    <span class="text-lg">هیچ اطلاعاتی یافت نشد</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Cards - Mobile -->
        <div class="md:hidden space-y-4 p-4">
            @forelse($informations as $information)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 hover:shadow-md transition">
                    <div class="flex justify-between items-start mb-3">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-base mb-1">
                                {{ $information->business_name }}
                            </h3>
                            @if($information->business_type)
                                <span class="inline-block px-2 py-0.5 bg-green-100 text-green-800 rounded-full text-xs">
                                    {{ $information->business_type }}
                                </span>
                            @endif
                        </div>
                        <div class="flex gap-1">
                            <button wire:click="edit({{ $information->id }})"
                                class="text-blue-600 p-2 hover:bg-blue-50 rounded-lg transition">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="confirmDelete({{ $information->id }})"
                                class="text-red-600 p-2 hover:bg-red-50 rounded-lg transition">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2 text-sm">
                        @if($information->contact_person)
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-user text-gray-400 w-5 text-center"></i>
                                <span>{{ $information->contact_person }}</span>
                            </div>
                        @endif
                        @if($information->whatsapp_number)
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fab fa-whatsapp text-green-500 w-5 text-center"></i>
                                <span dir="ltr">{{ $information->whatsapp_number }}</span>
                            </div>
                        @endif
                        @if($information->phone_number)
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone text-gray-400 w-5 text-center"></i>
                                <span dir="ltr">{{ $information->phone_number }}</span>
                            </div>
                        @endif
                        @if($information->city)
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-map-marker-alt text-red-400 w-5 text-center"></i>
                                <span>{{ $information->city }}</span>
                            </div>
                        @endif
                        @if($information->business_description)
                            <p class="text-gray-500 text-xs mt-2 line-clamp-2">
                                {{ $information->business_description }}
                            </p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-12 text-gray-500">
                    <i class="fas fa-info-circle text-4xl text-gray-300 mb-2 block"></i>
                    <span class="text-lg">هیچ اطلاعاتی یافت نشد</span>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="px-4 sm:px-6 py-4 border-t border-gray-200">
            {{ $informations->links() }}
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    @if($confirmingDelete)
        <div class="fixed inset-0 z-50 overflow-y-auto" x-data>
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="$wire.cancelDelete()"></div>
                <div class="relative bg-white rounded-lg max-w-md w-full p-6 shadow-xl">
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-red-100 mb-4">
                            <i class="fas fa-exclamation-triangle text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">تأیید حذف</h3>
                        <p class="text-gray-600 mb-6">
                            آیا از حذف این اطلاعات اطمینان دارید؟ این عملیات قابل بازگشت نیست.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center">
                            <button wire:click="delete"
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-2.5 rounded-lg font-medium transition w-full sm:w-auto">
                                بله، حذف کن
                            </button>
                            <button wire:click="cancelDelete"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2.5 rounded-lg font-medium transition w-full sm:w-auto">
                                انصراف
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Create/Edit Modal -->
    <div x-data="{ open: false }" 
         x-on:open-modal.window="open = true" 
         x-on:close-modal.window="open = false"
         x-init="$watch('open', value => { if (!value) $wire.resetForm() })">
        
        <!-- Overlay -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-500 bg-opacity-75 z-40">
        </div>

        <!-- Modal -->
        <div x-show="open"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:scale-95"
             class="fixed inset-0 z-50 overflow-y-auto">
            
            <div class="flex items-center justify-center min-h-screen px-4 py-6">
                <div class="relative bg-white rounded-lg shadow-xl w-full max-w-2xl" @click.outside="open = false">
                    <!-- Modal Header -->
                    <div class="bg-gradient-to-r from-green-600 to-green-700 px-4 sm:px-6 py-4 rounded-t-lg">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg sm:text-xl font-bold text-white">
                                <i class="fas fa-{{ $isEdit ? 'edit' : 'plus' }} ml-2"></i>
                                {{ $isEdit ? 'ویرایش اطلاعات' : 'ثبت اطلاعات جدید' }}
                            </h3>
                            <button @click="open = false" class="text-white hover:text-gray-200 transition">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="p-4 sm:p-6 max-h-[70vh] overflow-y-auto">
                        <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Business Name -->
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">
                                        نام کسب و کار <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" wire:model="business_name"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="نام کسب و کار را وارد کنید">
                                    @error('business_name')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Business Type -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">نوع کسب و کار</label>
                                    <input type="text" wire:model="business_type"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="مثال: فروشگاهی">
                                </div>

                                <!-- Category -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">دسته‌بندی</label>
                                    <input type="text" wire:model="category"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="دسته‌بندی">
                                </div>

                                <!-- Contact Person -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">شخص تماس</label>
                                    <input type="text" wire:model="contact_person"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="نام شخص تماس">
                                </div>

                                <!-- WhatsApp Number -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">شماره واتساپ</label>
                                    <input type="text" wire:model="whatsapp_number"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm dir-ltr text-left"
                                        placeholder="مثال: 09123456789">
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">شماره تماس</label>
                                    <input type="text" wire:model="phone_number"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm dir-ltr text-left"
                                        placeholder="شماره تماس">
                                </div>

                                <!-- Third Number -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">شماره سوم</label>
                                    <input type="text" wire:model="third_number"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm dir-ltr text-left"
                                        placeholder="شماره سوم">
                                </div>

                                <!-- City -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">شهر</label>
                                    <input type="text" wire:model="city"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="شهر">
                                </div>

                                <!-- Address -->
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">آدرس</label>
                                    <textarea wire:model="address" rows="2"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="آدرس کامل"></textarea>
                                </div>

                                <!-- Business Description -->
                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">توضیحات کسب و کار</label>
                                    <textarea wire:model="business_description" rows="3"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm"
                                        placeholder="توضیحات مربوط به کسب و کار"></textarea>
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-end pt-4 border-t border-gray-200">
                                <button type="button" @click="open = false"
                                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2.5 rounded-lg font-medium transition text-sm">
                                    انصراف
                                </button>
                                <button type="submit"
                                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-2.5 rounded-lg font-medium transition text-sm flex items-center justify-center gap-2">
                                    <i class="fas fa-{{ $isEdit ? 'check' : 'save' }}"></i>
                                    {{ $isEdit ? 'بروزرسانی' : 'ذخیره' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>