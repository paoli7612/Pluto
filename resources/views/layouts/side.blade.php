<x-sb>
    <x-nb>
        <x-nb-item title="Dashboard" icon="fa fa-home" link="{{ route('home') }}" />
        <x-nb-item title="Profile" icon="fa fa-user-circle" link="{{ route('account') }}" />
    </x-nb>

    <h6
        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Add</span>
        <i class="fa fa-plus"></i>
    </h6>
    <x-nb>
        <x-nb-item title="Payment" icon="fas fa-money-bill-wave" active="account" link="/payment" />
        <x-nb-item title="Earn" icon="fas fa-money-bill" active="earn" link="/earn" />
    </x-nb>
</x-sb>