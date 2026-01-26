<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Produits</title>
</head>
<body>
    <div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <nav class="flex mb-8 text-sm text-slate-500 space-x-2">
            <a href="admin_dashboard.php" class="hover:text-blue-600">Dashboard</a>
            <span>/</span>
            <span class="text-slate-900 font-medium">Ajouter un produit</span>
        </nav>

        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/60 overflow-hidden border border-slate-100">
            <div class="p-8 border-b border-slate-50 bg-gradient-to-r from-slate-900 to-slate-800">
                <h1 class="text-2xl font-bold text-white italic">Nouveau Produit Electronique</h1>
                <p class="text-slate-400 text-sm mt-1">Remplissez les détails techniques pour le catalogue.</p>
            </div>

            <form action="process_add_product.php" method="POST" enctype="multipart/form-data" class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 italic">Nom du produit *</label>
                        <input type="text" name="name" required placeholder="Ex: iPhone 15 Pro Max" 
                               class="w-full bg-slate-50 border-2 border-transparent rounded-2xl px-5 py-3 focus:border-blue-500 focus:bg-white outline-none transition-all">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 italic">Prix (€) *</label>
                            <input type="number" step="0.01" name="price" required placeholder="0.00"
                                   class="w-full bg-slate-50 border-2 border-transparent rounded-2xl px-5 py-3 focus:border-blue-500 focus:bg-white outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2 italic">Stock initial *</label>
                            <input type="number" name="stock" required placeholder="Ex: 50"
                                   class="w-full bg-slate-50 border-2 border-transparent rounded-2xl px-5 py-3 focus:border-blue-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 italic">Catégorie (US-15)</label>
                        <select name="category_id" class="w-full bg-slate-50 border-2 border-transparent rounded-2xl px-5 py-3 focus:border-blue-500 focus:bg-white outline-none transition-all appearance-none cursor-pointer">
                            <option value="">Sélectionner une catégorie</option>
                            <option value="1">Smartphones</option>
                            <option value="2">Laptops</option>
                            <option value="3">Accessoires</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 italic">Image du produit</label>
                        <div class="relative border-2 border-dashed border-slate-200 rounded-3xl p-8 hover:border-blue-400 transition-colors text-center group cursor-pointer">
                            <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                            <div class="space-y-2">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 group-hover:text-blue-500 transition-colors"></i>
                                <p class="text-xs text-slate-500">Glissez-déposez ou <span class="text-blue-600 font-bold">parcourez</span></p>
                                <p class="text-[10px] text-slate-400 italic">PNG, JPG jusqu'à 2Mo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 italic">Description technique *</label>
                        <textarea name="description" rows="4" required placeholder="Détails du processeur, RAM, écran..."
                                  class="w-full bg-slate-50 border-2 border-transparent rounded-2xl px-5 py-3 focus:border-blue-500 focus:bg-white outline-none transition-all"></textarea>
                    </div>
                </div>

                <div class="md:col-span-2 flex items-center justify-end space-x-4 border-t border-slate-50 pt-8">
                    <a href="admin_dashboard.php" class="text-slate-500 font-bold hover:text-slate-800 transition">Annuler</a>
                    <button type="submit" class="bg-blue-600 text-white px-10 py-4 rounded-2xl font-black hover:bg-blue-700 shadow-xl shadow-blue-100 transition transform hover:-translate-y-1">
                        Publier le produit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>