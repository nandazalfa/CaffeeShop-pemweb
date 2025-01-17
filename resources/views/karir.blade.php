@extends('layouts.app')

@section('title', 'Karir - Fore Coffee')

@section('content')
    <div class="pt-32 pb-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Left Column - Text Content --}}
                <div class="space-y-6">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-0.5 bg-green-800"></div>
                        <h2 class="text-xl font-medium">
                            Nestara <span class="text-green-800">Career</span>
                        </h2>
                    </div>
                    <h1 class="text-5xl font-bold text-green-800 leading-tight">
                        Are you excited and ready to be an inspiration?
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Join us and be a part of the leading Coffee Startup in Indonesia!
                    </p>
                </div>

                <section class="hero w-full">
                    <div>
                        <img src="https://i.pinimg.com/736x/78/e9/0c/78e90c7223efeefc9b22948f73a0690d.jpg" alt="Hero Image" class="hero-image w-full h-auto"/>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Section 2 (Full Height) -->
    <section class="py-10 bg-gray-50 min-h-screen w-full flex flex-col justify-center items-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">
                NESTARActME
            </h1>
            <p class="text-lg text-green-600 mt-2 border border-green-600 inline-block px-4 py-1 rounded-full">
                We Stand Tall on Our Values
            </p>
        </div>
        <div class="flex justify-center space-x-4 px-4 mt-8 w-full">
            <div class="bg-white shadow-lg rounded-lg p-6 w-80">
                <div class="flex justify-center mb-4">
                    <img alt="Clock icon representing agility" class="w-16 h-16" height="64" src="https://fore.coffee/wp-content/uploads/2023/08/Group-1321314174.png" width="64"/>
                </div>
                <h2 class="text-xl font-bold text-gray-800 text-center">
                    AGILE
                </h2>
                <p class="text-gray-600 text-center mt-2">
                    Kemampuan untuk beradaptasi dengan berbagai situasi dan secara aktif menjadi bagian dari proses perubahan demi keuntungan perusahaan dan pertumbuhan diri sendiri.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-80">
                <div class="flex justify-center mb-4">
                    <img alt="Hands icon representing collaboration" class="w-16 h-16" height="64" src="https://fore.coffee/wp-content/uploads/2023/08/Group-1321314165.png" width="64"/>
                </div>
                <h2 class="text-xl font-bold text-gray-800 text-center">
                    COLLABORATION
                </h2>
                <p class="text-gray-600 text-center mt-2">
                    Kemampuan untuk membangun hubungan kerja yang saling mendukung demi mencapai tujuan bersama.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-80">
                <div class="flex justify-center mb-4">
                    <img alt="Lightbulb icon representing integrity" class="w-16 h-16" height="64" src="https://fore.coffee/wp-content/uploads/2023/08/Group-1321314166.png" width="64"/>
                </div>
                <h2 class="text-xl font-bold text-gray-800 text-center">
                    INTEGRITY
                </h2>
                <p class="text-gray-600 text-center mt-2">
                    Kemampuan untuk menerapkan nilai-nilai, aturan, dan kebijakan perusahaan secara konsisten. Hal ini juga termasuk mengkomunikasikan keinginan, ide, dan perasaan dengan terbuka dan jujur.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 3 (Full Height) -->
    <section class="py-10 bg-white min-h-screen w-full flex items-center">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto flex flex-col md:flex-row w-full">
            <div class="md:w-1/2 w-full">
                <img alt="Barista working with a coffee machine" class="w-full h-full object-cover" height="400" src="https://i.pinimg.com/736x/49/b2/a1/49b2a102639ce23971b5c08be3f27eb7.jpg" width="600"/>
            </div>
            <div class="md:w-1/2 p-8 w-full">
                <div class="text-green-700 font-semibold mb-2">
                    Team Story
                </div>
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    The Journey of the Nestara Coffee Team
                </h1>
                <p class="text-gray-600 mb-4">
                    We always prioritize consistency in service and innovation across various aspects, including products and applications that enhance customer service. Fore Coffee strives to deliver the best in every cup, so that everyone can enjoy it, not just limited to coffee enthusiasts.
                </p>
            </div>
        </div>
    </section>
    <section>
    <title>Job Vacancies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Section for Job Listings -->
    <section class="bg-green-100 py-10">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl font-bold text-green-800 mb-6">Job Vacancies</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 text-left text-green-600">Job Title</th>
                            <th class="py-2 px-4 text-left text-green-600">Department</th>
                            <th class="py-2 px-4 text-left text-green-600">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="py-2 px-4">Visual Merchandiser (F&B) Officer</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jakarta <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Area Manager</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Bali <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Associate Product Manager</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jakarta <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Food Manager (Pastry Products)</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jakarta <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Supervisor Store</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Purwokerto <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Regional Operation Manager</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jakarta <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Project Officer</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jakarta <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Area Manager</td>
                            <td class="py-2 px-4">-</td>
                            <td class="py-2 px-4 flex justify-between items-center">Jawa Timur <i class="fas fa-chevron-right text-gray-400"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <p class="text-xl font-semibold text-green-800">Send your CV to <a href="mailto:nestaracoffe@gmail.com" class="text-green-600">nestaracoffe@gmail.com</a></p>
        </div>
    </section>

@endsection
