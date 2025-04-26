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

    <!-- Step 1 -->
    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border-[2px] border-[#6A1B9A] flex items-center justify-center text-[#6A1B9A] font-semibold text-sm mr-3">1</div>
      <div class="text[16px] text-[#333] font-medium">Let’s Get to Know You</div>
    </div>




    <!-- Step 2 -->
    <div class="flex items-start relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">2</div>
      <div class="flex flex-col justify-center">
        <div class="text[16px] text-[#333] font-medium">Your Learning Interests</div>




        <!-- Substeps -->
        <div class="mt-3 space-y-2">
          <div class="flex items-center">
            <div class="w-[29px] h-[29px] rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center">
              <span class="text-[10px] font-medium text-[#757575]">2.1</span>
            </div>
            <div class="ml-2 text-[15px] text-[#333]">Select Interest Categories</div>
          </div>
          <div class="flex items-center">
            <div class="w-[29px] h-[29px] rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center">
              <span class="text-[10px] font-medium text-[#757575]">2.2</span>
            </div>
            <div class="ml-2 text-[15px] text-[#333]">Choose Topics</div>
          </div>
        </div>
      </div>
    </div>




    <!-- Steps 3–6 -->
    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">3</div>
      <div class="text[16px] text-[#333] font-medium">Technical Skills</div>
    </div>




    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">4</div>
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
<div x-data="formStep1()" x-init="fetchMajors()" class="flex-1 bg-white overflow-y-auto p-6 text-[14px] leading-tight">


  <!-- Title -->
  <h1 class="text-[26px] font-medium mb-2">👋 Let's Get to Know You</h1>
  <p class="text-[15px] text-[#333] ml-[40px] mb-6">Please fill out your personal information below.</p>

  <!-- Full Name -->
<div class="mb-6">
  <label class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Full Name</label>
  <input type="text" id="fullName" x-model="fullName"
    @input="fullName = fullName.replace(/[^A-Za-z\s]/g, '')"
    minlength="3" maxlength="50" required
    placeholder="Enter your full name"
    class="w-[50%] px-4 py-2 rounded-md border hover:border-[#B388CB] focus:outline-none focus:ring-2 focus:ring-[#B388CB] text-sm ml-[20px]" />
  <p x-show="errors.fullName" class="text-red-600 text-sm ml-[20px] mt-1" x-text="errors.fullName"></p>
</div>

<!-- Gender -->
<div class="mb-6">
  <label class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Gender</label>
  <div class="flex gap-4 ml-[20px]">
    <button type="button"
      @click="gender = 'Male'"
      :class="gender === 'Male' ? 'border-[#6A1B9A] bg-[#f3e5f5]' : 'border-gray-300'"
      class="flex items-center gap-2 px-4 py-2 rounded-full text-[#333] text-sm border hover:border-[#6A1B9A]">
      🧑 Male
    </button>
    <button type="button"
      @click="gender = 'Female'"
      :class="gender === 'Female' ? 'border-[#6A1B9A] bg-[#f3e5f5]' : 'border-gray-300'"
      class="flex items-center gap-2 px-4 py-2 rounded-full text-[#333] text-sm border hover:border-[#6A1B9A]">
      👩‍💼 Female
    </button>
  </div>
  <!-- Error for Gender -->
  <p x-show="errors.gender" class="text-red-600 text-sm ml-[20px] mt-1" x-text="errors.gender"></p>
</div>

<!-- Age -->
<div class="mb-6">
  <label class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Age</label>
  <div class="flex gap-4 ml-[20px]">
    <template x-for="range in ['17-23', '24-35', '35+']" :key="range">
      <button
        @click="age = range"
        :class="age === range ? 'border-[#6A1B9A] bg-[#f3e5f5]' : 'border-gray-300'"
        class="flex items-center gap-2 px-4 py-2 rounded-full text-[#333] text-sm border hover:border-[#6A1B9A]">
        <span x-text="range"></span>
      </button>
    </template>
  </div>
  <!-- Error for Age -->
  <p x-show="errors.age" class="text-red-600 text-sm ml-[20px] mt-1" x-text="errors.age"></p>
</div>

<!-- Major -->
<div class="mb-6">
  <label class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Major</label>
  <div class="flex flex-col gap-3 ml-[20px]">
    <template x-for="(item, index) in majors" :key="index">
      <div
        @click="selectedMajor = item.label; selectedMajorId = item.id"
        :class="selectedMajor === item.label 
          ? 'bg-[#EBDEF0] border-[#6A1B9A]' 
          : 'bg-[#F5F5F5] border-gray-300 hover:border-[#6A1B9A]'"
        class="relative cursor-pointer flex items-center justify-between px-4 py-2 rounded-full text-sm text-[#333] border w-fit transition-all">
        
        <div class="flex items-center">
          <span x-text="item.icon + ' ' + item.label"></span>
          <div class="relative ml-2 group">
            <span class="cursor-pointer text-gray-500 text-[13px]">ⓘ</span>
            <div
              class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2 bg-[#f3e5f5] text-[#333] text-xs rounded-lg px-3 py-1 border border-[#6A1B9A] shadow-md w-[220px] hidden group-hover:block z-10 whitespace-normal">
              <span x-text="item.description"></span>
            </div>
          </div>
        </div>

      </div>
    </template>
  </div>
  <!-- Error for Major -->
  <p x-show="errors.major" class="text-red-600 text-sm ml-[20px] mt-1" x-text="errors.major"></p>
</div>

  <!-- Navigation Buttons -->
<div class="w-full flex justify-end items-center mt-6 px-[20px]">
  <button
    @click="validateAndProceed"
    class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] transition-all">
    Next
  </button>
</div>

  
  <!-- Error Message -->
  <div x-show="errorMessage" class="text-red-600 text-sm mt-2 ml-[20px]" x-text="errorMessage"></div>

<style>
  .custom-scroll::-webkit-scrollbar {
    width: 6px;
  }

  .custom-scroll::-webkit-scrollbar-track {
    background: #f5f5f5;
  }

  .custom-scroll::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 6px;
  }

  .custom-scroll::-webkit-scrollbar-thumb:hover {
    background-color: #bbb;
  }
</style>
<!-- Alpine Data Setup -->
<script>
  function formStep1() {
    return {
      fullName: '',
      gender: '',
      age: '',
      selectedMajor: '',
      selectedMajorId: null,
      majors: [],
      ageRanges: ['17-23', '24-35', '35+'],

      // ❗ Field-specific errors
      errors: {
        fullName: '',
        gender: '',
        age: '',
        major: ''
      },

      async fetchMajors() {
        try {
          const response = await fetch("https://train-track-backend.onrender.com/wizard/majors");
          const result = await response.json();
          if (result.success) {
            this.majors = result.data.map((item) => ({
              id: item.id,
              label: item.name,
              icon: this.getIcon(item.name),
              description: this.getDescription(item.name)
            })).sort((a, b) => b.label.length - a.label.length);
          }
        } catch (error) {
          console.error("Error fetching majors:", error);
        }
      },

      getIcon(name) {
        switch (name) {
          case 'Computer Science Apprenticeship Program': return '☁️';
          case 'Management Information Systems': return '💼';
          case 'Network Information System': return '🔐';
          case 'Computer Engineering': return '🛠️';
          case 'Computer Science': return '💻';
          case 'Cyber Security': return '🛡️';
          default: return '🎓';
        }
      },

      getDescription(name) {
        switch (name) {
          case 'Computer Science Apprenticeship Program': return 'Hands-on learning through real-world software development projects.';
          case 'Management Information Systems': return 'Focuses on technology to improve business decision-making.';
          case 'Network Information System': return 'Covers networking, cybersecurity, and IT infrastructure.';
          case 'Computer Engineering': return 'Mixes hardware systems with embedded programming.';
          case 'Computer Science': return 'Covers core CS areas: data structures, algorithms, software design.';
          case 'Cyber Security': return 'Focuses on protecting digital systems and secure computing.';
          default: return '';
        }
      },

      validateAndProceed() {
        // Reset errors
        this.errors = {
          fullName: '',
          gender: '',
          age: '',
          major: ''
        };

        let valid = true;

        if (!this.fullName.trim()) {
          this.errors.fullName = '⚠️ Please enter your full name.';
          valid = false;
        }

        if (!this.gender) {
          this.errors.gender = '⚠️ Please select your gender.';
          valid = false;
        }

        if (!this.age) {
          this.errors.age = '⚠️ Please select your age range.';
          valid = false;
        }

        if (!this.selectedMajor) {
          this.errors.major = '⚠️ Please select your major.';
          valid = false;
        }

        if (valid) {
          window.location.href = "/traintrack/interests";
        }
      }
    };
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</body>
  