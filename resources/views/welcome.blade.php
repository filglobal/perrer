@extends('layouts.main_app')
@section('content')
    
    <div class="pricing relative">

        <div class="relative z-20 px-8 pb-8 mx-auto max-w-7xl xl:px-5">
            <div class="w-full text-left sm:text-center">
                <h2 class="pt-12 text-4xl font-extrabold text-gray-900 lg:text-5xl">Example Pricing</h2>
                <p class="w-full my-1 text-base text-left text-gray-900 opacity-75 sm:my-2 sm:text-center sm:text-xl">Borrow 10,000 PHP for 12 months with an interest rate of 4.563%, your monthly repayment will only be 1100 PHP, but can also be paid with at least a minimum amount of the 8% of the total outstanding principal balance 10,000 x 0.08% = 800 PHP.</p>
            </div>

            <x-pricing-card></x-pricing-card>

            <p class="w-full my-8 text-left text-gray-500 sm:my-10 sm:text-center"><b>DISCLAIMER:</b> Loan amount, monthly amortization & applied rate shall be confirmed in your loan documents. Loan approval shall be subject to the submission of required documents, Fil-Global’s credit policies & procedures.</p>
        </div>
    </div>

@endsection