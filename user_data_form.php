<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitQuest | Input Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Add Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen p-8">
  
  <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg ring-1 ring-gray-100">
    <div class="text-center mb-8">
      <h2 class="text-4xl font-bold text-indigo-600 mb-2">Create Your Fitness Profile</h2>
      <p class="text-gray-600">Help us craft your perfect workout routine</p>
    </div>

    <form action="generate_routine.php" method="POST" class="space-y-6">
      <!-- Name Field -->
      <div class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
        <div class="relative">
          <input name="name" type="text" required 
                 class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all"
                 placeholder="John Doe">
          <!-- Font Awesome Icon for User -->
          <i class="fas fa-user absolute left-3 top-3.5 text-gray-400"></i>
        </div>
      </div>

      <!-- Age & Gender -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Age <span class="text-red-500">*</span></label>
          <div class="relative">
            <input name="age" type="number" required 
                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all"
                   placeholder="Ex: 25">
            <!-- Font Awesome Icon for Calendar -->
            <i class="fas fa-calendar-alt absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Gender <span class="text-red-500">*</span></label>
          <div class="relative">
            <select name="gender" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all appearance-none">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            <!-- Font Awesome Icon for Gender -->
            <i class="fas fa-venus-mars absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>
      </div>

      <!-- Weight & Height -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Weight (kg) <span class="text-red-500">*</span></label>
          <div class="relative">
            <input name="weight" type="number" required 
                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all"
                   placeholder="Ex: 70">
            <!-- Font Awesome Icon for Scale -->
            <i class="fas fa-weight absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Height (cm) <span class="text-red-500">*</span></label>
          <div class="relative">
            <input name="height" type="number" required 
                   class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all"
                   placeholder="Ex: 175">
            <!-- Font Awesome Icon for Ruler -->
            <i class="fas fa-ruler-vertical absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>
      </div>

      <!-- Fitness Goal -->
      <div class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Fitness Goal <span class="text-red-500">*</span></label>
        <div class="relative">
          <select name="goal" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all appearance-none">
            <option>Weight Loss</option>
            <option>Muscle Gain</option>
            <option>Maintenance</option>
          </select>
          <!-- Font Awesome Icon for Target -->
          <i class="fas fa-bullseye absolute left-3 top-3.5 text-gray-400"></i>
        </div>
      </div>

      <!-- Workout Place & Diet Type -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Workout Location</label>
          <div class="relative">
            <select name="workout_place" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all appearance-none">
              <option>Home</option>
              <option>Gym</option>
            </select>
            <!-- Font Awesome Icon for Location -->
            <i class="fas fa-map-marker-alt absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>

        <div class="space-y-2">
          <label class="block text-sm font-medium text-gray-700">Diet Preference</label>
          <div class="relative">
            <select name="diet" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 transition-all appearance-none">
              <option>Vegetarian</option>
              <option>Non-Vegetarian</option>
            </select>
            <!-- Font Awesome Icon for Apple (Food) -->
            <i class="fas fa-apple-alt absolute left-3 top-3.5 text-gray-400"></i>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="pt-6">
        <button type="submit" 
                class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-lg transform transition-all duration-200 hover:scale-[1.02] shadow-lg">
          Generate My Custom Routine →
        </button>
      </div>
    </form>
  </div>

</body>
</html>
