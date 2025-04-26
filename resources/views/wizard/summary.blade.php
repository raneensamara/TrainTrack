<!-- Right Side -->
<div x-data="advancedPreferences()" x-init="" class="flex-1 bg-white overflow-y-auto px-12 py-10 text-[14px] leading-tight">
    <h1 class="text-[26px] font-medium mb-2">⚙️ Advanced Preferences</h1>
    <p class="text-[15px] text-[#333] mb-6">This step’s optional — but it helps us find a match that really fits you.</p>
  
    <!-- Preferred Training Mode -->
    <div class="mb-6">
      <h2 class="text-[16px] font-medium mb-2">Preferred Training Mode</h2>
      <div class="flex gap-4">
        <template x-for="mode in ['Onsite', 'Remote', 'Hybrid']" :key="mode">
          <button 
            @click="training_mode = mode"
            :class="training_mode === mode ? 'bg-[#d1c4e9] border-[#6A1B9A] text-[#6A1B9A]' : 'bg-gray-100 text-[#333] border-gray-300'"
            class="px-4 py-2 rounded-xl border hover:border-[#6A1B9A] transition-all">
            <span x-text="mode"></span>
          </button>
        </template>
      </div>
    </div>
  
    <!-- Preferred Company Size -->
    <div class="mb-6">
      <h2 class="text-[16px] font-medium mb-2">Preferred Company Size</h2>
      <div class="flex gap-4">
        <template x-for="size in ['Small', 'Medium', 'Large']" :key="size">
          <button 
            @click="company_size = size"
            :class="company_size === size ? 'bg-[#d1c4e9] border-[#6A1B9A] text-[#6A1B9A]' : 'bg-gray-100 text-[#333] border-gray-300'"
            class="px-4 py-2 rounded-xl border hover:border-[#6A1B9A] transition-all">
            <span x-text="size"></span>
          </button>
        </template>
      </div>
    </div>
  
    <!-- Preferred Culture -->
    <div class="mb-6">
      <h2 class="text-[16px] font-medium mb-1">Preferred Company Culture</h2>
      <p class="text-sm text-gray-500 mb-2">*Choose your preferred culture. Hover for details</p>
      <div class="flex gap-4 flex-wrap">
        <template x-for="culture in ['Innovation', 'Trust', 'Transparency', 'Collaboration']" :key="culture">
          <button 
            @click="toggleCulture(culture)"
            :class="selected_culture.includes(culture) ? 'bg-[#d1c4e9] border-[#6A1B9A] text-[#6A1B9A]' : 'bg-gray-100 text-[#333] border-gray-300'"
            class="px-4 py-2 rounded-xl border hover:border-[#6A1B9A] transition-all">
            <span x-text="culture"></span>
          </button>
        </template>
      </div>
    </div>
  
    <!-- Preferred Industry -->
    <div class="mb-6">
      <h2 class="text-[16px] font-medium mb-1">Preferred Industry</h2>
      <p class="text-sm text-gray-500 mb-2">*Choose up to 2 industries you’re most interested in</p>
      <div class="flex gap-4 flex-wrap">
        <template x-for="industry in ['Workforce Management', 'Telecommunications', 'Insurance', 'Software Development', 'E-commerce']" :key="industry">
          <button 
            @click="toggleIndustry(industry)"
            :class="selected_industry.includes(industry) ? 'bg-[#d1c4e9] border-[#6A1B9A] text-[#6A1B9A]' : 'bg-gray-100 text-[#333] border-gray-300'"
            class="px-4 py-2 rounded-xl border hover:border-[#6A1B9A] transition-all">
            <span x-text="industry"></span>
          </button>
        </template>
      </div>
    </div>
  
  
    <!-- Navigation Buttons -->
    <div class="w-full flex justify-between items-center mt-10 px-[20px]">
      <button class="min-w-[130px] py-2 rounded-[8px] border border-[#6A1B9A] text-[#6A1B9A] text-[15px] font-medium hover:bg-[#f3e5f5]">Back</button>
      <div class="flex gap-4">
        <button class="min-w-[130px] py-2 rounded-[8px] bg-gray-400 text-white text-[15px] font-medium hover:bg-gray-500">Skip</button>
        <button
          class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] disabled:opacity-50"
          :disabled="!canSubmit">
          Submit
        </button>
      </div>
    </div>
  </div>
  
  <!-- AlpineJS Setup -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script>
    function advancedPreferences() {
      return {
        training_mode: '',
        company_size: '',
        selected_culture: [],
        selected_industry: [],
  
        toggleCulture(item) {
          if (this.selected_culture.includes(item)) {
            this.selected_culture = this.selected_culture.filter(i => i !== item);
          } else if (this.selected_culture.length < 2) {
            this.selected_culture.push(item);
          }
        },
  
        toggleIndustry(item) {
          if (this.selected_industry.includes(item)) {
            this.selected_industry = this.selected_industry.filter(i => i !== item);
          } else if (this.selected_industry.length < 2) {
            this.selected_industry.push(item);
          }
        },
  
        goBack() {
          window.location.href = "/traintrack/nontech"; // or previous step route
        },
  
        skip() {
          localStorage.setItem("preferences", JSON.stringify({}));
          window.location.href = "/traintrack/summary"; // next step
        },
  
        submit() {
          const payload = {
            training_mode: this.training_mode,
            preferred_company_size: this.company_size,
            preferred_culture: this.selected_culture,
            preferred_industry: this.selected_industry,
          };
  
          fetch("https://train-track-backend.onrender.com/wizard/preferences", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(payload)
          }).then(res => {
            if (res.ok) {
              window.location.href = "/traintrack/summary";
            } else {
              alert("Something went wrong.");
            }
          });
        }
      };
    }
  </script>