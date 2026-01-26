<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Mes commandes</title>
</head>

<body>
    <header>
        <nav class="bg-white shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
                <a href="/Client" class="text-2xl font-black text-blue-600 italic">ELECTRO.</a>
                <a href="/logout" class="flex items-center space-x-3 text-red-500 hover:bg-red-50 p-3 rounded-xl transition font-medium">
                    <i class="fa-solid fa-right-from-bracket"></i> <span>Déconnexion</span>
                </a>
            </div>
        </nav>
    </header>
    <section class="max-w-5xl mx-auto px-4 py-16">
        <div class="mb-10">
            <h1 class="text-3xl font-black text-slate-900">Mon Historique</h1>
            <p class="text-slate-500">Retrouvez toutes vos commandes électroniques passées.</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white border border-slate-100 rounded-2xl p-6 flex flex-wrap items-center justify-between hover:shadow-md transition">
                <div class="flex items-center space-x-6">
                    <div class="bg-blue-50 text-blue-600 w-14 h-14 rounded-full flex items-center justify-center text-xl">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 tracking-tight">Commande #ORD-99230</h3>
                        <p class="text-sm text-slate-400">Passée le 14 Janvier 2026</p>
                    </div>
                </div>

                <div class="text-center px-8">
                    <p class="text-sm text-slate-400">Articles</p>
                    <p class="font-bold">2 produits</p>
                </div>

                <div class="text-center px-8">
                    <p class="text-sm text-slate-400">Total</p>
                    <p class="font-bold text-blue-600 italic underline decoration-blue-200">1,548.00 €</p>
                </div>

                <div>
                    <span class="px-4 py-2 bg-green-100 text-green-700 text-xs font-black rounded-full uppercase">Livré</span>
                </div>

                <a href="order_detail.php?id=99230" class="text-slate-400 hover:text-slate-900 px-4">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
</body>

</html>