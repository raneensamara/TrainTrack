<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Your Learning Interests</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen bg-[#f0f0f0] font-[Roboto]">


<div class="w-full h-full flex bg-white">
 <!-- Left Side (Stepper) -->
<div class="w-[320px] px-6 py-8 bg-white border-r border-[#e0e0e0]">
  <!-- App Logo -->
  <img src="{{ asset('logo.png') }}" style="width: 190px;" class="mt-[-19px] mb-6">


  <!-- Stepper Title -->
  <h3 class="w-[238px] h-[24px] text-[18px] font-normal text-[#333] mb-4 ml-10px">Progress Guide</h3>


  <!-- Stepper Container -->
  <div class="relative pl-4">
    <!-- Vertical line -->
    <div class="absolute top-0 bottom-0 left-[32px] w-[1px] bg-gray-300 z-0"></div>


    <div class="flex flex-col space-y-3 relative z-10">


      <!-- Step 1 (Completed) -->
      <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center text-white font-semibold text-sm mr-3">1</div>
        <div class="text-[16px] text-[#333] font-medium">Let’s Get to Know You</div>
      </div>


      <!-- Step 2 (In Progress) -->
      <div class="flex items-start">
        <div class="relative mr-3">
          <div class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center font-semibold text-sm text-[#6A1B9A]"
               style="background: conic-gradient(#6A1B9A 0% 50%, #F5F5F5 50% 100%);">
            <div class="w-7 h-7 bg-[#F5F5F5] rounded-full flex items-center justify-center">2</div>
          </div>
        </div>


        <div class="flex flex-col justify-center">
          <div class="text-[16px] text-[#333] font-medium">Konwlodge Background</div>


          <!-- Substeps -->
          <div class="mt-3 space-y-2">
            <div class="flex items-center">
              <div class="w-[29px] h-[29px] rounded-full border-2 border-[#6A1B9A] text-[#6A1B9A] flex items-center justify-center font-semibold text-[10px]">2.1</div>
              <div class="ml-2 text-[15px] text-[#333]">Select Interest Categories</div>
            </div>
            <div class="flex items-center">
              <div class="w-[29px] h-[29px] rounded-full border border-gray-300 text-[#757575] flex items-center justify-center text-[10px] font-medium">2.2</div>
              <div class="ml-2 text-[15px] text-[#333]">Choose Topics</div>
            </div>
          </div>
        </div>
      </div>


      <!-- Step 3–6 -->
      <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">3</div>
        <div class="text-[16px] text-[#333] font-medium">Technical Skills</div>
      </div>
      <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">4</div>
        <div class="text-[16px] text-[#333] font-medium">Non-Technical Skills</div>
      </div>
      <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">5</div>
        <div class="text-[16px] text-[#333] font-medium">Advance Preferences</div>
      </div>
      <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">6</div>
        <div class="text-[16px] text-[#333] font-medium">Summary & Results</div>
      </div>
    </div>
  </div>
</div>












  <!-- Right Side -->
  <div x-data="subjectCategoryStep()" x-init="fetchCategories()" class="flex-1 bg-white overflow-y-auto p-6 text-[14px] leading-tight">
    <h1 class="text-[26px] font-medium mb-2">📚Konwlodge Background</h1>
    <p class="text-[15px] text-[#333] ml-[40px] mb-6">Select max 3 categories to get personalized subject suggestions.</p>
 
    <!-- Category Cards -->
    <div class="grid grid-cols-4 gap-x-6 gap-y-8 justify-items-center">
      <template x-for="category in categories" :key="category.id">
        <div
          @click="toggleCategory(category.id)"
          :class="selectedCategories.includes(category.id) ? 'border-2 border-[#6A1B9A] bg-[#f9f0ff]' : 'border border-gray-300 hover:border-[#6A1B9A]'"
          class="cursor-pointer flex flex-col items-center justify-center rounded-[20px] p-6 transition-all h-[170px] max-w-[210px] w-full"
        >
          <img :src="`/static/categories/${category.id}.png`" alt="icon" class="w-[48px] h-[48px] mb-3">
          <div class="text-center text-[14px] font-medium text-[#333]" x-text="category.name"></div>
        </div>
      </template>
    </div>
 
    <!-- Navigation Buttons -->
    <div class="w-full flex justify-between items-center mt-12 px-[20px]">
      <button class="min-w-[130px] py-2 rounded-[8px] border border-[#6A1B9A] text-[#6A1B9A] text-[15px] font-medium hover:bg-[#f3e5f5] transition-all">
        Back
      </button>
      <button
        @click="saveAndGoNext()"
        class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] transition-all disabled:opacity-50"
        :disabled="selectedCategories.length !== 3">
        Next
      </button>
    </div>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script>
    function subjectCategoryStep() {
      return {
        categories: [],
        selectedCategories: [],
 
        async fetchCategories() {
          try {
            const response = await fetch("https://train-track-backend.onrender.com/wizard/subject-categories");
            const result = await response.json();
            if (result.success) {
              this.categories = result.data;
            }
          } catch (error) {
            console.error("Error fetching categories:", error);
          }
        },
 
        toggleCategory(id) {
          if (this.selectedCategories.includes(id)) {
            this.selectedCategories = this.selectedCategories.filter(c => c !== id);
          } else if (this.selectedCategories.length < 3) {
            this.selectedCategories.push(id);
          }
        },
 
        saveAndGoNext() {
  // Save as comma-separated string, not JSON
  localStorage.setItem('selectedCategoryIds', this.selectedCategories.join(','));
  window.location.href = '/traintrack/choose-topics';
}


      }
    }
  </script>
 
