<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>

    <title>Dashboard Client</title>
</head>
<body>
    <div class="min-h-screen bg-gray-50 flex">
    <aside class="w-64 bg-white border-r border-gray-200 hidden lg:block">
        <div class="p-8">
            <h2 class="text-xl font-black text-blue-600 italic">Mon Espace</h2>
        </div>
        <nav class="px-4 space-y-1">
            <a href="?page=overview" class="flex items-center space-x-3 bg-blue-50 text-blue-700 p-3 rounded-xl font-bold">
                <i class="fa-solid fa-house"></i> <span>Aperçu</span>
            </a>
            <a href="?page=orders" class="flex items-center space-x-3 text-gray-600 hover:bg-gray-50 p-3 rounded-xl transition">
                <i class="fa-solid fa-bag-shopping"></i> <span>Mes Commandes</span>
            </a>
            <a href="?page=wishlist" class="flex items-center space-x-3 text-gray-600 hover:bg-gray-50 p-3 rounded-xl transition">
                <i class="fa-solid fa-heart"></i> <span>Favoris</span>
            </a>
            <a href="?page=settings" class="flex items-center space-x-3 text-gray-600 hover:bg-gray-50 p-3 rounded-xl transition">
                <i class="fa-solid fa-gear"></i> <span>Paramètres</span>
            </a>
            <div class="pt-10">
                <a href="/logout" class="flex items-center space-x-3 text-red-500 hover:bg-red-50 p-3 rounded-xl transition font-medium">
                    <i class="fa-solid fa-right-from-bracket"></i> <span>Déconnexion</span>
                </a>
            </div>
        </nav>
    </aside>

    <main class="flex-1 p-6 md:p-12">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Bonjour, <?= $_SESSION['name'] ?? 'Client' ?> 👋</h1>
                <p class="text-gray-500">Ravi de vous revoir sur ElectroTech.</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="bg-white p-3 rounded-full shadow-sm border border-gray-100">
                    <i class="fa-solid fa-bell text-gray-400"></i>
                </div>
                <img src="https://ui-avatars.com/api/?name=User&background=2563eb&color=fff" class="w-12 h-12 rounded-full border-2 border-white shadow-sm">
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                <p class="text-sm font-medium text-gray-400">Commandes totales</p>
                <p class="text-2xl font-black text-gray-900 mt-1">12</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                <p class="text-sm font-medium text-gray-400">Articles en favoris</p>
                <p class="text-2xl font-black text-blue-600 mt-1">5</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-blue-100 shadow-sm bg-blue-50/30">
                <p class="text-sm font-medium text-gray-400">Points fidélité</p>
                <p class="text-2xl font-black text-indigo-600 mt-1">450 pts</p>
            </div>
        </div>

        <section class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-gray-800 italic">Commandes Récentes</h3>
                <a href="?page=orders" class="text-blue-600 text-sm font-bold hover:underline">Voir tout</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[11px] text-gray-400 uppercase tracking-widest">
                            <th class="px-6 py-4 font-semibold">Référence</th>
                            <th class="px-6 py-4 font-semibold">Date</th>
                            <th class="px-6 py-4 font-semibold">Montant</th>
                            <th class="px-6 py-4 font-semibold">Statut</th>
                            <th class="px-6 py-4 font-semibold text-right">Détails</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="hover:bg-gray-50/50 transition cursor-pointer">
                            <td class="px-6 py-4 font-bold text-gray-800">#ET-88210</td>
                            <td class="px-6 py-4 text-sm text-gray-500">22 Janvier 2026</td>
                            <td class="px-6 py-4 font-bold text-blue-600">849.00 €</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-[10px] font-black rounded-full uppercase">En préparation</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-gray-300 hover:text-blue-600 transition">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>
</body>
</html>