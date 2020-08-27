<?php

namespace App\Http\Livewire\Cart\Checkout;

use App\DeliveryProvider;
use App\DeliveryProviderAddress;
use App\Enums\AddressType;
use App\Enums\Country;
use App\Repositories\CityRepository;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;
use Illuminate\Validation\Rule;
use Livewire\Component;
use function collect;
use function resolve;

class Payment extends Component
{
    public ?string $addressType = AddressType::Private;
    public ?string $fullName = '';
    public ?string $streetAddress = '';
    public ?string $zip = '';
    public ?string $city = '';
    public ?string $country = Country::DNK;
    public ?string $phone = '';
    public ?string $email = '';
    public ?string $emailConfirmation = '';
    public ?string $message = '';

    public ?int $deliveryProviderId = null;
    public ?int $deliveryProviderAddressId = null;

    protected Collection $cities;

    protected $search = null;

    protected $listeners = [
        'search' => 'searchAddresses',
        'select' => 'selectAddress'
    ];

    public function __construct($id)
    {
        parent::__construct($id);

        $this->resolveCities();
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'addressType' => ['required', new EnumValue(AddressType::class)],
            'fullName' => ['required', 'string', 'max:255'],
            'streetAddress' => ['required', 'string', 'max:255'],
            'zip' => ['required', Rule::in($this->cities->pluck('code'))],
            'city' => ['required', Rule::in($this->cities->pluck('code'))],
            'country' => ['required', new EnumValue(Country::class)],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'confirmed', 'max:255'],
            'message' => ['nullable', 'string', 'max:255'],

            'deliveryProviderId' => ['required', 'exists:delivery_providers,id'],
            'deliveryProviderAddressId' => ['nullable', Rule::exists('delivery_addresses', 'id')->where('delivery_provider_id', $this->deliveryProviderId)]
        ]);

        switch ($field) {
            case 'country':
                $this->resolveCities();
                break;

            case 'zip':
                $this->city = $this->cities->firstWhere('code', $this->zip)->city;
                break;

            case 'city':
                $this->zip = $this->cities->firstWhere('city', $this->city)->code;
                break;
        }
    }

    public function searchAddresses($search)
    {
        $this->search = $search;
    }

    public function selectAddress($id)
    {
        $this->deliveryProviderAddressId = $id;
    }

    public function render()
    {
        return view('livewire.cart.checkout.payment', [
            'addressTypes' => AddressType::toSelectArray(),
            'countries' => Country::toSelectArray(),
            'cities' => $this->cities,
            'deliveryProviders' => DeliveryProvider::all(),
            'deliveryProviderAddresses' => DeliveryProviderAddress::query()
                ->where('delivery_provider_id', $this->deliveryProviderId)
                ->where('city', $this->city)
                ->search($this->search)
                ->get()
        ]);
    }

    public function resolveCities(): void
    {
        $this->cities = collect(
            resolve(CityRepository::class)->allWhereCountry($this->country)
        )->mapInto(Fluent::class);
    }
}
