<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>SignUp page</title>
</head>
<body>
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="#" class="text-2xl font-black text-blue-600 italic">ELECTRO.</a>
            
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="index.php" class="hover:text-blue-600">Catalogue</a>
                <a href="categories.php" class="hover:text-blue-600">Catégories</a>
            </div>
        </div>
    </nav>
    <section class="max-w-md mx-auto py-20 px-4">
    <div class="bg-white p-10 rounded-3xl shadow-2xl border border-gray-100">
        <h2 class="text-3xl font-black text-center mb-8 text-slate-900">Créer un compte maintenant!</h2>
        
        <form action="/register" method="POST" class="space-y-5">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Username</label>
                <input type="text" placeholder="Username" name="name" class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Role</label>
                <input type="text" placeholder="Admin" name="role" class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                <input type="email" placeholder="votre@email.com" name="email" class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Mot de passe</label>
                <input type="password" placeholder="••••••••" name="password" class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <button class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 shadow-lg transition">S'inscrire</button>
        </form>
        
        <p class="text-center mt-8 text-sm text-gray-500">
            Vous avez dèja un compte ? <a href="login.php" class="text-blue-600 font-bold">Se connecter</a>
        </p>
    </div>
</section>
</body>
</html>