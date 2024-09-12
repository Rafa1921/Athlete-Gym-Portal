<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1> Activity for all Students</h1>
            <table class="min-w-full bg-white border-collapse border border-gray-400 mt-4">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border border-gray-400">#</th>
                            <th class="py-2 px-4 border border-gray-400">Athlete ID</th>
                            <th class="py-2 px-4 border border-gray-400">Athlete Name</th>
                            <th class="py-2 px-4 border border-gray-400">Activity</th>
                            <th class="py-2 px-4 border border-gray-400">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">1</td>
                            <td class="py-2 px-4 border border-gray-400">201</td>
                            <td class="py-2 px-4 border border-gray-400">John</td>
                            <td class="py-2 px-4 border border-gray-400">Complete Exercise 1</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-25</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">2</td>
                            <td class="py-2 px-4 border border-gray-400">202</td>
                            <td class="py-2 px-4 border border-gray-400">Jane</td>
                            <td class="py-2 px-4 border border-gray-400">Attended Ecercise 2</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-25</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">3</td>
                            <td class="py-2 px-4 border border-gray-400">203</td>
                            <td class="py-2 px-4 border border-gray-400">Michael</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 3</td>
                            <td class="py-2 px-4 border border-gray-400">2024-08-26</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">4</td>
                            <td class="py-2 px-4 border border-gray-400">101</td>
                            <td class="py-2 px-4 border border-gray-400">Ana</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 4</td>
                            <td class="py-2 px-4 border border-gray-400">2024-04-26</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">5</td>
                            <td class="py-2 px-4 border border-gray-400">503</td>
                            <td class="py-2 px-4 border border-gray-400">Raf</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 5</td>
                            <td class="py-2 px-4 border border-gray-400">2024-09-22</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">6</td>
                            <td class="py-2 px-4 border border-gray-400">303</td>
                            <td class="py-2 px-4 border border-gray-400">Miky</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 6</td>
                            <td class="py-2 px-4 border border-gray-400">2024-03-22</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">7</td>
                            <td class="py-2 px-4 border border-gray-400">433</td>
                            <td class="py-2 px-4 border border-gray-400">Lavender</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 7</td>
                            <td class="py-2 px-4 border border-gray-400">2024-06-23</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border border-gray-400">8</td>
                            <td class="py-2 px-4 border border-gray-400">853</td>
                            <td class="py-2 px-4 border border-gray-400">Mike</td>
                            <td class="py-2 px-4 border border-gray-400">Completed Exercise 8</td>
                            <td class="py-2 px-4 border border-gray-400">2024-04-28</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        View More Activities
                    </button>
                </div>
            
           
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
