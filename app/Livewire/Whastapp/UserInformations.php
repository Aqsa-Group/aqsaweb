<?php

namespace App\Livewire\Whatsapp;

use App\Models\UserInformation;
use Livewire\Component;
use Livewire\WithPagination;

class UserInformations extends Component
{
    use WithPagination;

    public $business_name, $business_type, $category, $contact_person;
    public $business_description, $whatsapp_number, $phone_number;
    public $third_number, $city, $address;
    
    public $informationId;
    public $isEdit = false;
    public $search = '';
    public $confirmingDelete = null;

    protected $rules = [
        'business_name' => 'required|string|max:255',
        'business_type' => 'nullable|string|max:255',
        'category' => 'nullable|string|max:255',
        'contact_person' => 'nullable|string|max:255',
        'business_description' => 'nullable|string|max:1000',
        'whatsapp_number' => 'nullable|string|max:20',
        'phone_number' => 'nullable|string|max:20',
        'third_number' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:500',
    ];

    protected $listeners = ['deleteConfirmed' => 'delete'];

    public function render()
    {
        $informations = UserInformation::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('business_name', 'like', '%' . $this->search . '%')
                      ->orWhere('contact_person', 'like', '%' . $this->search . '%')
                      ->orWhere('city', 'like', '%' . $this->search . '%')
                      ->orWhere('whatsapp_number', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.whatsapp.user-informations', [
            'informations' => $informations
        ]);
    }

    public function resetForm()
    {
        $this->reset([
            'business_name',
            'business_type',
            'category',
            'contact_person',
            'business_description',
            'whatsapp_number',
            'phone_number',
            'third_number',
            'city',
            'address',
            'informationId',
            'isEdit'
        ]);
        $this->resetValidation();
    }

    public function create()
    {
        $this->resetForm();
        $this->dispatch('openModal');
    }

    public function store()
    {
        $this->validate();

        UserInformation::create([
            'business_name' => $this->business_name,
            'business_type' => $this->business_type,
            'category' => $this->category,
            'contact_person' => $this->contact_person,
            'business_description' => $this->business_description,
            'whatsapp_number' => $this->whatsapp_number,
            'phone_number' => $this->phone_number,
            'third_number' => $this->third_number,
            'city' => $this->city,
            'address' => $this->address,
        ]);

        $this->resetForm();
        session()->flash('message', 'اطلاعات با موفقیت ثبت شد.');
        $this->dispatch('closeModal');
    }

    public function edit($id)
    {
        $information = UserInformation::findOrFail($id);
        
        $this->informationId = $information->id;
        $this->business_name = $information->business_name;
        $this->business_type = $information->business_type;
        $this->category = $information->category;
        $this->contact_person = $information->contact_person;
        $this->business_description = $information->business_description;
        $this->whatsapp_number = $information->whatsapp_number;
        $this->phone_number = $information->phone_number;
        $this->third_number = $information->third_number;
        $this->city = $information->city;
        $this->address = $information->address;
        
        $this->isEdit = true;
        $this->dispatch('openModal');
    }

    public function update()
    {
        $this->validate();

        $information = UserInformation::findOrFail($this->informationId);
        
        $information->update([
            'business_name' => $this->business_name,
            'business_type' => $this->business_type,
            'category' => $this->category,
            'contact_person' => $this->contact_person,
            'business_description' => $this->business_description,
            'whatsapp_number' => $this->whatsapp_number,
            'phone_number' => $this->phone_number,
            'third_number' => $this->third_number,
            'city' => $this->city,
            'address' => $this->address,
        ]);

        $this->resetForm();
        session()->flash('message', 'اطلاعات با موفقیت بروزرسانی شد.');
        $this->dispatch('closeModal');
    }

    public function confirmDelete($id)
    {
        $this->confirmingDelete = $id;
    }

    public function cancelDelete()
    {
        $this->confirmingDelete = null;
    }

    public function delete()
    {
        if ($this->confirmingDelete) {
            UserInformation::findOrFail($this->confirmingDelete)->delete();
            $this->confirmingDelete = null;
            session()->flash('message', 'اطلاعات با موفقیت حذف شد.');
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}