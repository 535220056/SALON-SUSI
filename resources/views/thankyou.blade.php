<x-guest-layout>
    <div class="bg-black min-h-screen flex justify-center items-center py-12">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden flex">
            <div class="flex-1 bg-gray-200">
                <img src="https://i.pinimg.com/564x/78/12/6f/78126f72a81f934f511f6ce7c3873fa3.jpg" alt="Thank You Image" class="h-full w-full object-cover">
            </div>
            <div class="flex-1">
                <div class="p-6 bg-blue-600 text-white text-center">
                    <h1 class="text-3xl font-bold mb-2">Thank You!</h1>
                    <p class="text-base">This is your deposit fee you have to pay:</p>
                    <div class="mt-4">
                        <p class="text-xl font-semibold">Rp 50.000</p>
                    </div>
                </div>
                <div class="p-6 bg-gray-50">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="payment_proof">Upload Payment Proof:</label>
                    <input type="file" name="payment_proof" id="payment_proof" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="p-6 bg-gray-50 text-right">
                    <button id="submitBtn" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-blue-600 {
            background-color: #15420a;
        }

        .bg-blue-600:hover {
            background-color: #4b5c89;  
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgb(255, 255, 255), 0 4px 6px -2px rgba(0, 0, 0, 0);
        }
    </style>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function() {
            // Simulate redirect to payment successful page
            window.location.href = "{{ route('paymentsuccessfull') }}";
        });
    </script>
</x-guest-layout>
