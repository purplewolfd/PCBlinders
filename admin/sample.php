<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Sidebar Example</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @media (min-width: 768px) {
      .sticky-sidebar {
        position: sticky;
        top: 0;
        height: calc(100vh - 56px); /* Adjust based on your navbar height */
        overflow-y: auto; /* Enable vertical scroll if needed */
      }
    }
  </style>
</head>
<body class="font-sans bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
      <a class="text-xl font-bold" href="#">Your Website</a>
      <!-- Add your navigation links here -->
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto mt-8 flex">
    <!-- Sidebar -->
    <div class="w-1/4 hidden md:block">
      <div class="sticky-sidebar bg-white p-4 shadow-md">
        <!-- Add your sidebar content here -->
        <h5 class="text-lg font-semibold mb-4">Sticky Sidebar</h5>
        <p class="text-gray-700">This sidebar will stick to the top as you scroll down.</p>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="w-3/4">
      <!-- Add your main content here -->
      <h2 class="text-2xl font-bold mb-4">Main Content</h2>
      <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
  </div>

  <!-- Tailwind CSS JS -->
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>
</html>
