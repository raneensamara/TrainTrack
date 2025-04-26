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
         <img src="{{ asset('logo.png') }}" style="width: 190px;" class="mt-[-19px]">


<br>
<br>
        <!-- Stepper Title -->
        <h3 class="w-[238px] h-[24px] text-[18px] font-normal text-[#333] mb-4 ml-10px">Progress Guide</h3>


       




<!-- Stepper Container -->
<div class="relative pl-4">
  <!-- Vertical line behind steps -->
  <div class=" absolute top-0 bottom-0 left-[32px] w-[1px] bg-gray-300 z-0"></div>




  <div class="flex flex-col space-y-3 relative  z-10">
    <!-- Step 1 -->
    <div class="flex items-center relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border-[2px] border-[#6A1B9A] flex items-center justify-center text-[#6A1B9A] font-semibold text-sm mr-3">1</div>
      <div class="text[16px] text-[#333] font-medium">Let’s Get to Know You</div>
    </div>




    <!-- Step 2 -->
    <div class="flex items-start relative">
      <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-gray-300 flex items-center justify-center text-[#757575] font-medium text-sm mr-3">2</div>
      <div class="flex flex-col justify-center">
        <div class="text[16px] text-[#333] font-medium">Subject of Interest</div>




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
<div x-data="formStep1()" class="flex-1 bg-white overflow-y-auto p-6 text-[14px] leading-tight">


    <!-- Title -->
    <h1 class="text-[26px] font-medium mb-2">👋 Let's Get to Know You</h1>
    <p class="text-[15px] text-[#333] ml-[20px] mb-6">Please fill out your personal information below.</p>
  
    <!-- Full Name -->
    <div class="mb-6">
      <label for="fullName" class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Full Name</label>
      <input type="text" id="fullName" x-model="fullName"
        minlength="3" maxlength="50" required
        placeholder="Enter your full name"
        class="w-[50%] px-4 py-2 rounded-md border hover:border-[#B388CB] focus:outline-none focus:ring-2 focus:ring-[#B388CB] text-sm ml-[20px]" />
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
          class="flex items-center gap-2 px-4 py-2 rounded-full text-[#333] text-sm border hover:border-[#6A1B9A] ">
          👩‍💼 Female
        </button>
      </div>
    </div>
  
    <!-- Major -->
<div class="mb-6">
  <label class="block text-sm font-medium text-[#333] ml-[20px] mb-2">Major</label>
  <div class="flex flex-col gap-3 ml-[20px]">
    <template x-for="(item, index) in majors" :key="index">
      <div
        @click="selectedMajor = item.label"
        :class="selectedMajor === item.label 
          ? 'bg-[#EBDEF0] border-[#6A1B9A]' 
          : 'bg-[#F5F5F5] border-gray-300 hover:border-[#6A1B9A]'"
        class="relative cursor-pointer flex items-center justify-between px-4 py-2 rounded-full text-sm text-[#333] border w-fit transition-all"
      >

        <!-- Major name and icon -->
        <div class="flex items-center group">
          <span x-text="item.icon + ' ' + item.label"></span>

          <!-- Info icon and tooltip -->
          <div class="relative ml-2">
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
</div>

  
    <!-- Navigation Buttons -->
    <div class="w-full flex justify-between items-center mt-6 px-[20px]">

    <button
      class="min-w-[130px] py-2 rounded-[8px] border border-[#6A1B9A] text-[#6A1B9A] text-[15px] font-medium hover:bg-[#f3e5f5] transition-all">
      Back
    </button>
    <button
      class="min-w-[130px] py-2 rounded-[8px] bg-[#6A1B9A] text-white text-[15px] font-medium hover:bg-[#5a1584] transition-all">
      Next
    </button>
  </div>
  </div>
  
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
  <script>
    function formStep1() {
      return {
        fullName: '',
        gender: '',
        selectedMajor: '',
        majors: [
  {
    label: 'Computer Science Apprenticeship Program',
    icon: '☁️',
    description: 'Hands-on learning through real-world software development projects.'
  },
  {
    label: 'Management Information System',
    icon: '💼',
    description: 'Focuses on using technology to improve business processes and decision-making.'
  },
  {
    label: 'Network Information System',
    icon: '🔐',
    description: 'Covers network administration, cybersecurity, and infrastructure planning.'
  },
  {
    label: 'Computer Engineering',
    icon: '🛠️',
    description: 'Blends hardware design with software programming and embedded systems.'
  },
  {
    label: 'Computer Science',
    icon: '💻',
    description: 'Core CS topics: algorithms, data structures, AI, and software development.'
  }
]


      }
    }
  </script><script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  
</body>
    