<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"
          class="max-w-md mx-auto bg-white dark:bg-gray-900 p-6 rounded-xl shadow-md space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text"
                          class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                          :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email"
                          class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                          :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" name="password" type="password"
                          class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                          class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Security Question -->
        <div>
            <x-input-label for="security_question" :value="__('Security Question')" />
            <select id="security_question" name="security_question" required
                    class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                <option value="" disabled {{ old('security_question') ? '' : 'selected' }}>Select a security question</option>
                <option value="What was the name of your first pet?" {{ old('security_question') === "What was the name of your first pet?" ? 'selected' : '' }}>What was the name of your first pet?</option>
                <option value="What is your mother's maiden name?" {{ old('security_question') === "What is your mother's maiden name?" ? 'selected' : '' }}>What is your mother's maiden name?</option>
                <option value="What was the name of your first school?" {{ old('security_question') === "What was the name of your first school?" ? 'selected' : '' }}>What was the name of your first school?</option>
                <option value="What is your favorite book?" {{ old('security_question') === "What is your favorite book?" ? 'selected' : '' }}>What is your favorite book?</option>
                <option value="What city were you born in?" {{ old('security_question') === "What city were you born in?" ? 'selected' : '' }}>What city were you born in?</option>
            </select>
            <x-input-error :messages="$errors->get('security_question')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Security Answer -->
        <div>
            <x-input-label for="security_answer" :value="__('Security Answer')" />
            <x-text-input id="security_answer" name="security_answer" type="text"
                          class="mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                          :value="old('security_answer')" required />
            <x-input-error :messages="$errors->get('security_answer')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Footer -->
        <div class="flex items-center justify-between pt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
