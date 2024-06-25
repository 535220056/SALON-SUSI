<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-black">
        <div class="text-center text-white p-6">
            <svg class="w-16 h-16 mx-auto mb-4 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m0 0l-4-4l-4 4m4-4v8m0 0l4-4l-4 4m4-4H5" /></svg>
            <h1 class="text-3xl font-bold mb-2 text-green-300">Payment Successful</h1>
            <p class="text-gray-300 text-base">
                Thank you for your payment. Your transaction has been completed successfully.
                Admin will send you information detail to your contact!
            </p>
            <div class="mt-6">
                <a href="{{ url('/') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-200">Go to Homepage</a>
            </div>
        </div>
    </div>
</x-guest-layout>
