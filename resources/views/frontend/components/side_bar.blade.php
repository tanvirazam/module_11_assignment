        <ul
            class="flex-column h-screen m-3 space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0 sm:rounded-lg border border-gray-200 rounded-lg shadow">

            <li>
                <a href="{{ route('frontend.pages.dashboard') }}"
                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('frontend.pages.create') }}"
                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" width="800px" height="800px"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="File / Note_Edit">
                            <path id="Vector"
                                d="M10.0002 4H7.2002C6.08009 4 5.51962 4 5.0918 4.21799C4.71547 4.40973 4.40973 4.71547 4.21799 5.0918C4 5.51962 4 6.08009 4 7.2002V16.8002C4 17.9203 4 18.4801 4.21799 18.9079C4.40973 19.2842 4.71547 19.5905 5.0918 19.7822C5.5192 20 6.07899 20 7.19691 20H16.8031C17.921 20 18.48 20 18.9074 19.7822C19.2837 19.5905 19.5905 19.2839 19.7822 18.9076C20 18.4802 20 17.921 20 16.8031V14M16 5L10 11V14H13L19 8M16 5L19 2L22 5L19 8M16 5L19 8"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                    Create
                </a>
            </li>
            <li>
                <a href="{{ route('transactions') }}"
                    class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" fill="#000000" height="200px"
                        width="200px" version="1.1" id="_x31_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <polygon points="22,31.6 22,35.3 115.9,35.3 115.9,82.7 119.5,82.7 119.5,31.6 ">
                                </polygon>
                                <polygon points="15.3,42 109.2,42 109.2,89.4 112.8,89.4 112.8,38.4 15.3,38.4 ">
                                </polygon>
                                <path
                                    d="M23.9,45.4H8.5v15.4V81v15.4h15.4h66.7H106V81V60.8V45.4H90.6H23.9z M102,60.2v21.2c-5.3,1.4-9.4,5.6-10.9,11H23.3 c-1.4-5.4-5.6-9.5-10.9-11V60.2c5.3-1.4,9.4-5.6,10.9-11h67.8C92.4,54.6,96.6,58.8,102,60.2z">
                                </path>
                                <circle cx="57.2" cy="70.9" r="18"></circle>
                            </g>
                        </g>
                    </svg>
                    Transactions
                </a>
            </li>

        </ul>
