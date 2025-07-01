<flux:dropdown position="bottom" align="end">
    <flux:profile avatar="{{ asset('asset/pluto.png') }}" name="{{ Auth::user()->name }}" />

    <flux:menu>
        <flux:menu.item href="{{ route('profile.settings') }}" wire:navigate icon="cog-8-tooth">
            Settings
        </flux:menu.item>
        <flux:menu.separator />
        <flux:menu.item href="{{ route('profile.wishlist') }}" wire:navigate icon="heart">
            Wish List
        </flux:menu.item>
        <flux:menu.item href="{{ route('profile.purchase') }}" wire:navigate icon="banknotes">
            Purchase
        </flux:menu.item>
        <flux:menu.separator />
        <flux:modal.trigger name="logout-confirmation">
            <flux:menu.item icon="arrow-right-start-on-rectangle" variant="danger">
                Logout
            </flux:menu.item>
        </flux:modal.trigger>
    </flux:menu>
</flux:dropdown>
