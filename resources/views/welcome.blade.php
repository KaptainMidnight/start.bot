@extends('layouts.app')

@section('section')
    <div class="flex-col px-10">
        <div>
            <img class="rounded-full mx-auto" id="profilePicture" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=128&h=128&q=80" alt="">
        </div>

        <div class="text-center pt-3">
            <p class="telegram-hint-color" id="role">Ученик</p>
            <h1 class="telegram-text-color flex flex-row justify-center">
                <span id="username">@KaptainMidnight</span>
                <svg id="isPremium" class="ml-2 hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Premium">
                        <path id="Vector" d="M13.3609 1.03329C12.9326 -0.344429 11.0674 -0.344429 10.6391 1.03329L8.78725 6.98895C8.59568 7.60507 8.04624 8.02221 7.4263 8.02221H1.43372C0.0475023 8.02221 -0.528866 9.8759 0.592614 10.7274L2.72643 12.3474C3.77415 13.1429 5.09315 13.4934 6.39754 13.323L12.2196 12.5626C12.5978 12.5131 12.7778 13.0336 12.4568 13.2484L6.8365 17.0072C5.88544 17.6432 5.1813 18.5862 4.84159 19.6788L4.10874 22.0358C3.68037 23.4134 5.18931 24.5591 6.31079 23.7076L11.1589 20.0268C11.6604 19.646 12.3396 19.646 12.8411 20.0268L17.6892 23.7076C18.8107 24.5591 20.3196 23.4135 19.8913 22.0358L18.0394 16.08C17.8479 15.4639 18.0577 14.789 18.5593 14.4082L23.4074 10.7274C24.5289 9.8759 23.9525 8.02221 22.5663 8.02221H16.5737C15.9538 8.02221 15.4043 7.60507 15.2128 6.98895L13.3609 1.03329Z" fill="#66A9E0"/>
                    </g>
                </svg>
            </h1>
        </div>

        <div class="mt-10">
            <p class="telegram-section-header-text-color">
                Действия
            </p>

            <div class="rounded-lg flex-col space-y-4 py-1.5 telegram-secondary-bg-color">
                <div class="flex flex-row justify-start ml-2">
                    <div class="bg-green-500 mr-2 p-1 rounded-lg inline">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 4C23 6.20914 18.0751 8 12 8C5.92487 8 1 6.20914 1 4C1 1.79086 5.92487 0 12 0C18.0751 0 23 1.79086 23 4Z" fill="white"/>
                            <path d="M1 6.66667C1 6.66667 1 10 12 10C23 10 23 6.66667 23 6.66667V12.6667C23 12.6667 23 16 12 16C1 16 1 12.6667 1 12.6667V6.66667Z" fill="white"/>
                            <path d="M1 15.3333C1 15.3333 1 18 12 18C23 18 23 15.3333 23 15.3333V20.6667C23 20.6667 23 24 12 24C1 24 1 20.6667 1 20.6667V15.3333Z" fill="white"/>
                        </svg>
                    </div>

                    <p class="telegram-text-color font-bold p-1 border-b telegram-section-separator-color w-full">Билеты</p>
                </div>

                <div class="flex flex-row justify-start ml-2">
                    <div class="bg-green-500 mr-2 p-1 rounded-lg inline">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 4C23 6.20914 18.0751 8 12 8C5.92487 8 1 6.20914 1 4C1 1.79086 5.92487 0 12 0C18.0751 0 23 1.79086 23 4Z" fill="white"/>
                            <path d="M1 6.66667C1 6.66667 1 10 12 10C23 10 23 6.66667 23 6.66667V12.6667C23 12.6667 23 16 12 16C1 16 1 12.6667 1 12.6667V6.66667Z" fill="white"/>
                            <path d="M1 15.3333C1 15.3333 1 18 12 18C23 18 23 15.3333 23 15.3333V20.6667C23 20.6667 23 24 12 24C1 24 1 20.6667 1 20.6667V15.3333Z" fill="white"/>
                        </svg>
                    </div>

                    <p class="telegram-text-color font-bold p-1 border-b w-full telegram-section-separator-color">Билеты</p>
                </div>

                <div class="flex flex-row justify-start ml-2">
                    <div class="bg-green-500 mr-2 p-1 rounded-lg inline">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 4C23 6.20914 18.0751 8 12 8C5.92487 8 1 6.20914 1 4C1 1.79086 5.92487 0 12 0C18.0751 0 23 1.79086 23 4Z" fill="white"/>
                            <path d="M1 6.66667C1 6.66667 1 10 12 10C23 10 23 6.66667 23 6.66667V12.6667C23 12.6667 23 16 12 16C1 16 1 12.6667 1 12.6667V6.66667Z" fill="white"/>
                            <path d="M1 15.3333C1 15.3333 1 18 12 18C23 18 23 15.3333 23 15.3333V20.6667C23 20.6667 23 24 12 24C1 24 1 20.6667 1 20.6667V15.3333Z" fill="white"/>
                        </svg>
                    </div>

                    <p class="telegram-text-color font-bold p-1 w-full">Билеты</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        const telegram = window.Telegram.WebApp
        const username = document.getElementById('username')
        const isPremium = telegram.initDataUnsafe.user.is_premium

        document.getElementById('isPremium')

        username.innerHTML = '@' + telegram.initDataUnsafe.user.username

        if (isPremium) {
            document.getElementById('isPremium').classList.remove('hidden')
        }
    </script>
@endpush
