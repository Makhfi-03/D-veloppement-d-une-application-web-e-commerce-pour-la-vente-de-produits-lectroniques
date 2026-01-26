<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroTech - High Tech E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="#" class="text-2xl font-black text-blue-600 italic">ELECTRO.</a>
            
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="index.php" class="hover:text-blue-600">Catalogue</a>
                <a href="categories.php" class="hover:text-blue-600">Catégories</a>
            </div>

            <div class="flex items-center space-x-6">
                <a href="cart.php" class="relative">
                    <i class="fa-solid fa-cart-shopping text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] rounded-full h-4 w-4 flex items-center justify-center">1</span>
                </a>
                <a href="/auth/login" class="bg-blue-600 text-white px-5 py-2 rounded-lg text-sm font-bold">Connexion</a>
                <a href="/auth/register" class="bg-green-600 text-white px-5 py-2 rounded-lg text-sm font-bold">S'inscrire</a>
            </div>
        </div>
    </nav>
<section class="max-w-7xl mx-auto px-4 py-10">
    <div class="flex flex-col md:flex-row gap-8">
        <aside class="w-full md:w-1/4">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg mb-4 text-gray-800 border-b pb-2">Catégories</h3>
                <div class="space-y-2">
                    <label class="flex items-center space-x-3 p-2 hover:bg-blue-50 rounded-lg cursor-pointer transition">
                        <input type="radio" name="cat" class="text-blue-600"> <span>Smartphones</span>
                    </label>
                    <label class="flex items-center space-x-3 p-2 hover:bg-blue-50 rounded-lg cursor-pointer transition">
                        <input type="radio" name="cat" class="text-blue-600"> <span>Ordinateurs</span>
                    </label>
                    <label class="flex items-center space-x-3 p-2 hover:bg-blue-50 rounded-lg cursor-pointer transition">
                        <input type="radio" name="cat" class="text-blue-600"> <span>Composants</span>
                    </label>
                </div>
            </div>
        </aside>

        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition group">
                <div class="h-56 bg-gray-100 relative">
                    <img src="https://via.placeholder.com/400" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-white px-2 py-1 rounded-md text-xs font-bold text-blue-600 shadow-sm">Neuf</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-900 mb-1">Nom du Produit</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">Description courte du produit électronique...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-black text-blue-600">899.00 €</span>
                        <a href="product.php?id=1" class="bg-slate-900 text-white p-2 rounded-lg hover:bg-blue-600 transition">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
    <!-- <main>
        <?php echo $content; ?>
    </main> -->

    <footer class="bg-slate-900 text-slate-400 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 ElectroTech MVC. Projet E-commerce.</p>
        </div>
    </footer>
</body>
</html>