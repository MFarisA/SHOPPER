<flux:modal name="logout-confirmation">
    <div class="p-6 text-center">
        <flux:heading size="lg" class="text-gray-900">Are you sure you want to log out?</flux:heading>
        <flux:text class="mt-2 text-gray-500">You will need to log in again to access your account.</flux:text>
        <div class="mt-6 flex justify-center space-x-3">
            <flux:button wire:click="performLogout" variant="danger">
                Yes, Log Out
            </flux:button>
            <flux:modal.close>
                <flux:button variant="ghost">Cancel</flux:button>
            </flux:modal.close>
        </div>
    </div>
</flux:modal>
