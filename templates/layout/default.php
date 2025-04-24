<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SmartEdu: <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Tailwind CSS -->
    <?= $this->Html->css('tailwind') ?>
    
    <!-- Opcional: Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body class="bg-gray-50">
    <!-- Barra de navegación con Tailwind -->
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="<?= $this->Url->build('/') ?>" class="text-xl font-bold">
                SmartEdu
            </a>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-200 transition">Inicio</a>
                <a href="#" class="hover:text-blue-200 transition">Documentación</a>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container mx-auto px-4 py-8">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-800 text-white py-6 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; <?= date('Y') ?> SmartEdu - Todos los derechos reservados</p>
        </div>
    </footer>

    <?= $this->fetch('script') ?>
</body>
</html>