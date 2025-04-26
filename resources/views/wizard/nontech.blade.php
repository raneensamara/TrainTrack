<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Train Track Wizard</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen bg-[#f0f0f0] font-[Roboto] relative">




  <!-- Frame Container -->
  <div class="w-full h-full flex justify-center items-center">




    <!-- Main Wizard Layout -->
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


    <!-- Step 1 completed-->
    <div class="flex items-center">
        <div class="w-8 h-8 rounded-full bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center text-white font-semibold text-sm mr-3">1</div>
        <div class="text-[16px] text-[#333] font-medium">Let’s Get to Know You</div>
      </div>




    <!-- Step 2 complete-->
    <div class="flex items-start relative">
      <div class="w-8 h-8 rounded-full bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center text-white font-semibold text-sm mr-3">2</div>
      <div class="flex flex-col justify-center">
        <div class="text[16px] text-[#333] font-medium">Your Learning Interests</div>








        <!-- Substeps -->
        <div class="mt-3 space-y-2">
          <div class="flex items-center">
            <div class="w-[29px] h-[29px] rounded-full  bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center">
              <span class="text-[10px] font-medium text-[#ffffff]">2.1</span>
            </div>
            <div class="ml-2 text-[15px] text-[#333]">Select Interest Categories</div>
          </div>
          <div class="flex items-center">
            <div class="w-[29px] h-[29px] rounded-full bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center">
              <span class="text-[10px] font-medium text-[#ffffff]">2.2</span>
            </div>
            <div class="ml-2 text-[15px] text-[#333]">Choose Topics</div>
          </div>
        </div>
      </div>
    </div>








    <!-- Steps 3–6 -->
    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full  bg-[#6A1B9A] border-[2px] border-[#6A1B9A] flex items-center justify-center text-[#ffffff] font-medium text-sm mr-3">3</div>
      <div class="text[16px] text-[#333] font-medium">Technical Skills</div>
    </div>






    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border-[2px] border-[#6A1B9A]  flex items-center justify-center text-[#757575] font-medium text-sm mr-3">4</div>
      <div class="text[16px] text-[#333] font-medium">Non-Technical Skills</div>
    </div>








    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">5</div>
      <div class="text[16px] text-[#333] font-medium">Advance Preferences</div>
    </div>








    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">6</div>
      <div class="text[16px] text-[#333] font-medium">Summary & Results</div>
    </div>
  </div>
</div></div>










<!-- Right Side (Scrollable + Clean Footer) -->


    <div x-data="nonTechnicalSkillsStep()" x-init="fetchSkills()" class="flex-1 bg-white overflow-y-auto p-6 text-[14px] leading-tight">


    <!-- Title -->
    <h1 class="text-[26px] font-medium mb-2">🧠 Non-Technical Skills</h1>
    <p class="text-[15px] text-[#333] ml-[40px] mb-6">Select the soft skills that best describe your strengths.</p>
 
     <!-- Grid of Skills -->
  <div class="grid grid-cols-2 gap-4">
    <template x-for="skill in skills" :key="skill.id">
      <div
        @click="toggleSkill(skill.id)"
        :class="selectedSkills.includes(skill.id)
          ? 'bg-[#e9d5ff] border-2 border-[#6A1B9A] text-[#6A1B9A]'
          : 'bg-[#f3e5f5] border border-gray-300 text-[#333]'"
        class="flex items-center gap-2 px-4 py-3 rounded-xl cursor-pointer transition-all"
      >
        <input type="checkbox" class="form-checkbox h-4 w-4" :checked="selectedSkills.includes(skill.id)" />
        <span x-text="skill.name" class="text-[15px] font-medium"></span>
      </div>
    </template>
  </div>
<!-- Bottom Navigation -->
<div class="w-full flex justify-between items-center mt-12 px-[20px]">
    <button class="min-w-[130px] py-2 rounded-[8px] border border-[#6A1B9A] text-[#6A1B9A] text-[15px] font-medium hover:bg-[#f3e5f5] transition-all">
      Back
    </button>
    <div class="flex gap-3">
      <button class="min-w-[130px] py-2 rounded-[8px] bg-gray-400 text-white text-[15px] font-medium hover:bg-gray-500 transition-all">
        Skip
      </button>
      <button 
        class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] transition-all disabled:opacity-50"
        :disabled="!training_mode && !company_size && selectedCultures.length === 0 && selectedIndustries.length === 0">
        Submit
      </button>
    </div>
  </div>
  
<script>
  function nonTechnicalSkillsStep() {
    return {
      skills: [],
      selectedSkills: [],


      async fetchSkills() {
        try {
          const response = await fetch("https://train-track-backend.onrender.com/wizard/non-technical-skills");
          const result = await response.json();
          if (result.success) {
            this.skills = result.data;
          }
        } catch (error) {
          console.error("Failed to fetch non-technical skills:", error);
        }
      },


      toggleSkill(id) {
        if (this.selectedSkills.includes(id)) {
          this.selectedSkills = this.selectedSkills.filter(s => s !== id);
        } else if (this.selectedSkills.length < 7) {
          this.selectedSkills.push(id);
        }
      }
    }
  }
  watchSelected() {
  this.$watch('selectedSkills', value => {
    localStorage.setItem('selectedNonTechSkills', JSON.stringify(value));
  });
}


</script>

