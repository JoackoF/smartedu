<?php
$this->layout = 'default'; // Asegúrate de usar tu layout principal
$this->assign('title', 'Formulario de Prueba'); // Título de la página
?>

<?php if ($this->Flash->has('error')): ?>
    <div class="error">
        <?= $this->Flash->render('error') ?>
    </div>
<?php endif; ?>

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">Inicio de Sesión</h1>

        <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'login']]) ?>
    <fieldset>
        <legend><?= __('Iniciar Sesión') ?></legend>
        <div>
            <?= $this->Form->label('username', 'Usuario') ?>
            <?= $this->Form->control('username', ['label' => false, 'placeholder' => 'Ingresa tu usuario', 'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent']) ?>
        </div>
        <div>
            <?= $this->Form->label('password', 'Contraseña') ?>
            <?= $this->Form->control('password', ['type' => 'password', 'label' => false, 'placeholder' => 'Ingresa tu contraseña', 'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent']) ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Iniciar Sesión'), ['class' => 'w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200']) ?>
<?= $this->Form->end() ?>
    </div>
</div>