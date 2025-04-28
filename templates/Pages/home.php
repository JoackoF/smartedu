<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>smartEdu - Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>
<body class="dark bg-gray-900 text-white min-h-screen flex flex-col justify-between font-sans">

    <!-- Contenido principal -->
    <main class="flex-grow flex items-center justify-center px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Bienvenido a <span class="text-blue-400">smartEdu</span></h1>
            <p class="text-lg mb-6 text-gray-300">Tu sistema inteligente de gestión educativa</p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="/formulario" class="bg-blue-600 hover:bg-blue-500 text-white py-2 px-4 rounded-2xl shadow-lg transition">Iniciar sesión</a>
                <!--
                <a href="/registro" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded-2xl shadow-lg transition">Registrarse</a>-->
            </div>
        </div>
    </main>

</body>
</html>
