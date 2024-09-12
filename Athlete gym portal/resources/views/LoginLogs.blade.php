<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LoginLogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1> Login Logs</h1>
            <table class="min-w-full bg-white border-collapse border border-gray-400 mt-4">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border border-gray-400">#</th>
                            <th class="py-2 px-4 border border-gray-400">User ID</th>
                            <th class="py-2 px-4 border border-gray-400">Login At</th>
                            <th class="py-2 px-4 border border-gray-400">IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">1</td>
                            <td class="py-2 px-4 border border-gray-400">101</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26 10:15:30</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.1</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">2</td>
                            <td class="py-2 px-4 border border-gray-400">102</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26 11:00:45</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.2</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">3</td>
                            <td class="py-2 px-4 border border-gray-400">103</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26 11:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">4</td>
                            <td class="py-2 px-4 border border-gray-400">104</td>
                            <td class="py-2 px-4 border border-gray-400">2024-09-26 12:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.4.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">5</td>
                            <td class="py-2 px-4 border border-gray-400">105</td>
                            <td class="py-2 px-4 border border-gray-400">2024-09-26 17:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.4.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">6</td>
                            <td class="py-2 px-4 border border-gray-400">193</td>
                            <td class="py-2 px-4 border border-gray-400">2024-04-25 11:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.7.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">6</td>
                            <td class="py-2 px-4 border border-gray-400">163</td>
                            <td class="py-2 px-4 border border-gray-400">2024-02-26 11:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.5.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">2</td>
                            <td class="py-2 px-4 border border-gray-400">123</td>
                            <td class="py-2 px-4 border border-gray-400">2024-05-22 15:32:34</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.3.4</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">10</td>
                            <td class="py-2 px-4 border border-gray-400">133</td>
                            <td class="py-2 px-4 border border-gray-400">2024-07-28 4:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.2</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">8</td>
                            <td class="py-2 px-4 border border-gray-400">105</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26 11:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">6</td>
                            <td class="py-2 px-4 border border-gray-400">108</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-23 14:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">9</td>
                            <td class="py-2 px-4 border border-gray-400">108</td>
                            <td class="py-2 px-4 border border-gray-400">2024-09-27 15:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.3</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">8</td>
                            <td class="py-2 px-4 border border-gray-400">107</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26 11:30:12</td>
                            <td class="py-2 px-4 border border-gray-400">192.168.1.3</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Clear Logs
                    </button>
                </div>
            
           
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
