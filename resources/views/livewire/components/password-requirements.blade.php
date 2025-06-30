<div class="mt-2 space-y-1 text-xs">
    <div class="flex items-center space-x-2">
        <span
            class="w-4 h-4 rounded-full {{ $this->hasMinLength ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
            <span class="text-white text-xs">✓</span>
        </span>
        <span class="text-gray-600">At least 8 characters</span>
    </div>
    <div class="flex items-center space-x-2">
        <span
            class="w-4 h-4 rounded-full {{ $this->hasLowercase ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
            <span class="text-white text-xs">✓</span>
        </span>
        <span class="text-gray-600">One lowercase letter</span>
    </div>
    <div class="flex items-center space-x-2">
        <span
            class="w-4 h-4 rounded-full {{ $this->hasUppercase ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
            <span class="text-white text-xs">✓</span>
        </span>
        <span class="text-gray-600">One uppercase letter</span>
    </div>
    <div class="flex items-center space-x-2">
        <span
            class="w-4 h-4 rounded-full {{ $this->hasNumber ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
            <span class="text-white text-xs">✓</span>
        </span>
        <span class="text-gray-600">One number</span>
    </div>
    <div class="flex items-center space-x-2">
        <span
            class="w-4 h-4 rounded-full {{ $this->hasSpecialChar ? 'bg-green-500' : 'bg-gray-300' }} flex items-center justify-center">
            <span class="text-white text-xs">✓</span>
        </span>
        <span class="text-gray-600">One special character (@ or !)</span>
    </div>
</div>

