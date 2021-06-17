<div>
    <section class="relative z-40 w-full pt-10 pb-36 lg:pt-5 bg-gradient-to-b from-indigo-500 via-indigo-600 to-indigo-400">

        {{-- <div class="absolute top-0 left-0 z-10 w-full h-full transform -translate-x-1/2 opacity-10">
            <svg class="w-full h-full text-white opacity-25 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 205"><defs/><g fill="#FFF" fill-rule="evenodd"><path d="M182.63 37c14.521 18.317 22.413 41.087 22.37 64.545C205 158.68 159.1 205 102.486 205c-39.382-.01-75.277-22.79-92.35-58.605C-6.939 110.58-2.172 68.061 22.398 37a105.958 105.958 0 00-9.15 43.352c0 54.239 39.966 98.206 89.265 98.206 49.3 0 89.265-43.973 89.265-98.206A105.958 105.958 0 00182.629 37z"/><path d="M103.11 0A84.144 84.144 0 01150 14.21C117.312-.651 78.806 8.94 56.7 37.45c-22.105 28.51-22.105 68.58 0 97.09 22.106 28.51 60.612 38.101 93.3 23.239-30.384 20.26-70.158 18.753-98.954-3.75-28.797-22.504-40.24-61.021-28.47-95.829C34.346 23.392 66.723.002 103.127.006L103.11 0z"/><path d="M116.479 13c36.655-.004 67.014 28.98 69.375 66.234 2.36 37.253-24.089 69.971-60.44 74.766 29.817-8.654 48.753-38.434 44.308-69.685-4.445-31.25-30.9-54.333-61.904-54.014-31.003.32-56.995 23.944-60.818 55.28v-1.777C46.99 44.714 78.096 13.016 116.479 13z"/></g></svg>
        </div> --}}

        <div class="relative z-20 flex flex-col items-start justify-start px-8 mx-auto sm:items-center max-w-7xl xl:px-5">
            <h2 class="text-4xl font-extrabold text-white lg:text-5xl">How to Apply</h2>
            <p class="w-full my-1 text-base text-left text-white opacity-75 sm:my-2 sm:text-center sm:text-xl">Easy requirements, quick cash loan, no collateral, no co-maker, fast approval!</p>

            <div class="grid mt-16 gap-y-10 sm:grid-cols-2 sm:gap-x-8 md:gap-x-12 lg:grid-cols-3 xl:grid-cols-4 lg:gap-20">
                    <div>
                        <img src="{{ asset('images/create_acount.svg') }}" class="w-16 h-16 bg-white rounded-full sm:mx-auto">
                        <h3 class="mt-6 text-lg font-semibold text-white leading-6 sm:text-center">Create Account</h3>
                        <p class="mt-2 text-md leading-5 text-white sm:text-center ">Fully loaded authentication, email verification, and password reset. Authentication in a snap!</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/create_acount.svg') }}" class="w-16 rounded sm:mx-auto">
                        <h3 class="mt-6 text-lg font-semibold text-white leading-6 sm:text-center">User Profiles</h3>
                        <p class="mt-2 text-md leading-5 text-white sm:text-center ">Customizable user profiles. Allow your users to enter data and easily customize their user profiles.</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/create_acount.svg') }}" class="w-16 rounded sm:mx-auto">
                        <h3 class="mt-6 text-lg font-semibold text-white leading-6 sm:text-center">User Impersonation</h3>
                        <p class="mt-2 text-md leading-5 text-white sm:text-center ">With user impersonations you can login as another user and resolve an issue or troubleshoot a bug.</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/create_acount.svg') }}" class="w-16 rounded sm:mx-auto">
                        <h3 class="mt-6 text-lg font-semibold text-white leading-6 sm:text-center">Subscriptions</h3>
                        <p class="mt-2 text-md leading-5 text-white sm:text-center ">Allow users to pay for your service and signup for a subscription using Stripe or Braintree Payments.</p>
                    </div>
            </div>
        </div>
    </section>

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

</div>
