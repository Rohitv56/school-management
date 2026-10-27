@extends('layouts.default')

@section('content')

    <div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center p-4"">
                                            <div class=" max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden">
        <!-- Header -->
        <div class="bg-red-50 p-6 border-b border-red-100">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-red-800">SecurePay</h1>
                    <p class="text-red-600 text-sm">Secure Payment Gateway</p>
                </div>
                <div class="bg-red-100 p-3 rounded-full">
                    <i class="fas fa-lock text-red-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="p-8">
            <!-- Status Indicator -->
            <div class="flex justify-center mb-6">
                <div class="relative">
                    <div class="w-24 h-24 rounded-full bg-red-100 flex items-center justify-center">
                        <i class="fas fa-times text-red-500 text-5xl"></i>
                    </div>
                    <div
                        class="absolute -top-2 -right-2 w-10 h-10 bg-white rounded-full border-4 border-white flex items-center justify-center">
                        <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center">
                            <i class="fas fa-exclamation text-white text-sm"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Payment Cancelled</h2>
                <p class="text-gray-600 mb-4">Your payment transaction was not completed successfully.</p>
                <div class="bg-gray-50 rounded-lg p-4 mb-4 text-left">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-500">Invoice ID:</span>
                        <span class="font-medium">{{ $payment->invoice_number ?? 'N/A' }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Date:</span>
                        <span class="font-medium">{{ $payment->created_at->format('d M Y') }}</span>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">You won't be charged for this transaction. Please try again if this was a
                    mistake.</p>
            </div>

            <!-- Action Buttons -->
            <div class="grid grid-cols-1 gap-3">
                <a href="{{ route('home') }}"
                    class="w-full border border-gray-300 hover:bg-gray-50 text-gray-800 font-semibold py-3 px-4 rounded-lg transition duration-300 flex items-center justify-center">
                    <i class="fas fa-home mr-2"></i> Return to Home
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 px-8 py-6 border-t border-gray-100">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-2 md:mb-0">Need assistance? Contact {{ $system['support_email'] }}</p>
            </div>
        </div>
    </div>
    </div>

@endsection