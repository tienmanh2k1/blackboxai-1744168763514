<?php
/**
 * The main template file
 */

get_header();
?>

<main class="min-h-screen">
  <!-- Hero Section -->
  <section class="relative">
    <div class="bg-black text-white py-20">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Just Do It</h1>
        <p class="text-lg mb-8">Discover the latest collection</p>
        <a href="#" class="bg-white text-black px-6 py-3 rounded-full font-medium hover:bg-gray-200 transition">Shop Now</a>
      </div>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="py-12">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold mb-8">Featured</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="p-4">
            <div class="aspect-square bg-gray-100 mb-4"></div>
            <h3 class="font-medium">Nike Air Max</h3>
            <p class="text-gray-600">Men's Shoes</p>
            <p class="font-bold mt-2">3,500,000₫</p>
          </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="p-4">
            <div class="aspect-square bg-gray-100 mb-4"></div>
            <h3 class="font-medium">Nike Dunk Low</h3>
            <p class="text-gray-600">Women's Shoes</p>
            <p class="font-bold mt-2">2,800,000₫</p>
          </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="p-4">
            <div class="aspect-square bg-gray-100 mb-4"></div>
            <h3 class="font-medium">Nike Air Force 1</h3>
            <p class="text-gray-600">Kids' Shoes</p>
            <p class="font-bold mt-2">2,200,000₫</p>
          </div>
        </div>

        <!-- Product Card 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
          <div class="p-4">
            <div class="aspect-square bg-gray-100 mb-4"></div>
            <h3 class="font-medium">Nike Tech Fleece</h3>
            <p class="text-gray-600">Men's Hoodie</p>
            <p class="font-bold mt-2">1,800,000₫</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>
