<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ElectroTech - High Tech E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Dashboard Admin</title>
</head>
<body>
    <div class="min-h-screen bg-slate-50 flex flex-col md:flex-row">
    <aside class="w-full md:w-64 bg-slate-900 text-slate-300 p-6">
        <div class="mb-10">
            <span class="text-2xl font-black text-white italic"><?= $_SESSION['name'] ?? 'Admin' ?></span>
        </div>
        <nav class="space-y-4 text-sm">
            <a href="/product" class="flex items-center space-x-3 text-white bg-blue-600 p-3 rounded-xl">
                <i class="fa-solid fa-box"></i> <span>Produits</span>
            </a>
            <a href="/categorie" class="flex items-center space-x-3 hover:text-white p-3 transition">
                <i class="fa-solid fa-tags"></i> <span>Catégories</span>
            </a>
            <a href="/commande" class="flex items-center space-x-3 hover:text-white p-3 transition">
                <i class="fa-solid fa-receipt"></i> <span>Commandes</span>
            </a>
            <a href="/utilisateur" class="flex items-center space-x-3 hover:text-white p-3 transition border-t border-slate-800 pt-6">
                <i class="fa-solid fa-users"></i> <span>Utilisateurs</span>
            </a>
            <div class="pt-10">
                <a href="/logout" class="flex items-center space-x-3 text-red-500 hover:bg-red-50 p-3 rounded-xl transition font-medium">
                    <i class="fa-solid fa-right-from-bracket"></i> <span>Déconnexion</span>
                </a>
            </div>
        </nav>
    </aside>

    <main class="flex-1 p-4 md:p-10">
        <header class="flex justify-between items-center mb-10">
            <h1 class="text-2xl font-bold text-slate-800">Gestion du Catalogue</h1>
            <a href="product_add.php" class="bg-slate-900 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-600 transition flex items-center">
                <i class="fa-solid fa-plus mr-2"></i> Ajouter un produit
            </a>
        </header>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-black text-slate-500 tracking-widest">
                    <tr>
                        <th class="p-6">Produit</th>
                        <th class="p-6">Catégorie</th>
                        <th class="p-6">Prix / Stock</th>
                        <th class="p-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr class="hover:bg-blue-50/30 transition">
                        <td class="p-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-slate-100 rounded-lg"></div>
                                <div>
                                    <p class="font-bold text-slate-800">MacBook Air M2</p>
                                    <p class="text-xs text-slate-400 font-mono">ID: #4589</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-6"><span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-bold uppercase">Ordinateurs</span></td>
                        <td class="p-6 text-sm">
                            <div class="font-bold text-slate-800">1,299 €</div>
                            <div class="text-green-500 font-medium">12 en stock</div>
                        </td>
                        <td class="p-6">
                            <div class="flex justify-center space-x-2">
                                <button class="p-2 text-slate-400 hover:text-blue-600 transition"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="p-2 text-slate-400 hover:text-red-500 transition"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
</body>
</html>