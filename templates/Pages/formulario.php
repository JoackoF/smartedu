<?php
// templates/Pages/formulario_prueba.php
$this->layout = 'default'; // Asegúrate de usar tu layout principal
$this->assign('title', 'Formulario de Prueba'); // Título de la página
?>

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">Formulario de Prueba</h1>
    
    <form class="space-y-6">
      <!-- Campo Nombre -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
        <input 
          type="text" 
          placeholder="Ej: Juan Pérez"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
      </div>

      <!-- Campo Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
        <input 
          type="email" 
          placeholder="Ej: juan@example.com"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
      </div>

      <!-- Campo Select -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">País</label>
        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
          <option disabled selected>Seleccione un país</option>
          <option>México</option>
          <option>España</option>
          <option>Argentina</option>
        </select>
      </div>

      <!-- Campo Checkbox -->
      <div class="flex items-center">
        <input 
          type="checkbox" 
          id="terminos"
          class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
        >
        <label for="terminos" class="ml-2 block text-sm text-gray-700">
          Acepto los términos y condiciones
        </label>
      </div>

      <!-- Botón de enviar -->
      <button 
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200"
      >
        Enviar formulario
      </button>
    </form>
  </div>
</div>