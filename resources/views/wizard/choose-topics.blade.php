<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Choose Topics</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen bg-[#f0f0f0] font-[Roboto]">

<div class="w-full h-full flex bg-white">
  <!-- Left Side (Stepper) -->
  <div class="w-[320px] px-6 py-8 bg-white border-r border-[#e0e0e0]">
    <img src="{{ asset('logo.png') }}" style="width: 190px;" class="mt-[-19px] mb-6">
    <h3 class="text-[18px] font-normal text-[#333] mb-4 ml-10px">Progress Guide</h3>
    <div class="relative pl-4">
      <div class="absolute top-0 bottom-0 left-[32px] w-[1px] bg-gray-300 z-0"></div>
      <div class="flex flex-col space-y-3 relative z-10">
        <div class="flex items-center">
          <div class="w-8 h-8 rounded-full bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center text-white font-semibold text-sm mr-3">1</div>
          <div class="text-[16px] text-[#333] font-medium">Let’s Get to Know You</div>
        </div>
        <div class="flex items-start">
          <div class="relative mr-3">
            <div class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center font-semibold text-sm text-[#6A1B9A]"
                 style="background: conic-gradient(#6A1B9A 0% 100%, #F5F5F5 100% 100%);">
              <div class="w-7 h-7 bg-[#F5F5F5] rounded-full flex items-center justify-center">2</div>
            </div>
          </div>
          <div class="flex flex-col justify-center">
            <div class="text-[16px] text-[#333] font-medium">Your Learning Interests</div>
            <div class="mt-3 space-y-2">
              <div class="flex items-center">
                <div class="w-[29px] h-[29px] rounded-full border border-gray-300 text-[#757575] flex items-center justify-center text-[10px] font-medium">2.1</div>
                <div class="ml-2 text-[15px] text-[#333]">Select Interest Categories</div>
              </div>
              <div class="flex items-center">
                <div class="w-[29px] h-[29px] rounded-full border-2 border-[#6A1B9A] text-[#6A1B9A] flex items-center justify-center font-semibold text-[10px]">2.2</div>
                <div class="ml-2 text-[15px] text-[#333]">Choose Topics</div>
              </div>
            </div>
          </div>
        </div>
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
  <div x-data="chooseTopics()" x-init="fetchSubjects()" class="flex-1 bg-white overflow-y-auto px-12 py-10 text-[14px] leading-tight">
    <h1 class="text-[26px] font-medium mb-2">📚 Your Learning Interests</h1>
    <p class="text-[15px] text-[#333] mb-6">Nice, choose 7 max topics.</p>

    <template x-for="category in subjectsData" :key="category.Subject_category_id">
      <div class="mb-10">
        <h2 class="text-[18px] font-semibold text-[#333] mb-4" x-text="category.Subject_category_name"></h2>
        <div class="bg-[#f5f5f5] p-4 rounded-lg flex flex-wrap gap-3">
          <template x-for="subject in category.subjects" :key="subject.id">
            <div
              @click="toggleTopic(subject.id)"
              :class="selectedTopics.includes(subject.id) ? 'border border-[#6A1B9A] text-[#6A1B9A] bg-[#f9f0ff] ring-1 ring-[#6A1B9A]' : 'border border-gray-300 text-[#333]'"
              class="cursor-pointer px-4 py-1.5 text-[13px] rounded-full transition-all duration-200 flex items-center gap-2">
              <template x-if="selectedTopics.includes(subject.id)">
                <span class="text-[16px]">✔️</span>
              </template>
              <span x-text="subject.name"></span>
            </div>
          </template>
        </div>
      </div>
    </template>

    <!-- Bottom Navigation -->
    <div class="w-full flex justify-between items-center mt-6 px-[20px]">
      <button class="min-w-[130px] py-2 rounded-[8px] border border-[#6A1B9A] text-[#6A1B9A] text-[15px] font-medium hover:bg-[#f3e5f5] transition-all">
        Back
      </button>
      <div class="text-[13px] text-[#6A1B9A] mr-4" x-text="`Selected ${selectedTopics.length}/7`"></div>
      <button
        class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] transition-all disabled:opacity-50"
        :disabled="selectedTopics.length === 0 || selectedTopics.length > 7">
        Next
      </button>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
  function chooseTopics() {
    return {
      subjectsData: [],
      selectedTopics: [],

      async fetchSubjects() {
  const selectedCategoryIds = localStorage.getItem("selectedCategoryIds");

  console.log("📦 Selected Category IDs from localStorage:", selectedCategoryIds);

  if (!selectedCategoryIds || selectedCategoryIds === '') {
    console.warn("⚠️ No selected categories found.");
    return;
  }

  try {
    const response = await fetch(`https://train-track-backend.onrender.com/wizard/subjects?ids=${selectedCategoryIds}`);
    const result = await response.json();

    console.log("🎯 API result:", result);

    if (result.success && result.data.length > 0) {
      this.subjectsData = result.data;
    } else {
      console.warn("⚠️ No data returned from API.");
    }
  } catch (error) {
    console.error("❌ Error fetching subjects:", error);
  }
}

      toggleTopic(id) {
        if (this.selectedTopics.includes(id)) {
          this.selectedTopics = this.selectedTopics.filter(t => t !== id);
        } else if (this.selectedTopics.length < 7) {
          this.selectedTopics.push(id);
        }
      }
    };
  }
</script>
</body>
</html>
