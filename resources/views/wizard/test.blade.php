<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Subject of Interest</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; }
  
    body {
      margin: 0;
      background-color: #8B5CF6;
      font-family: 'Roboto', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  
    .frame {
      width: 800px;
      height: 550px;
      background-color: #fff;
      display: flex;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
  
    .left-side {
      width: 35%;
      background-color: #f9f9f9;
      padding: 40px 30px;
    }
  
    .left-side .logo img {
      width: 150px;
      margin-bottom: 20px;
    }
  
    .progress-title {
      font-weight: bold;
      font-size: 20px;
      margin-bottom: 20px;
      color: #ff914d;
    }
  
    .stepper {
      display: flex;
      flex-direction: column;
      gap: 25px;
      position: relative;
    }
  
    .step {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 18px;
      position: relative;
      color: #999;
    }
  
    .step .circle {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background-color: #ddd;
      flex-shrink: 0;
      margin-top: 2px;
    }
  
    /* خط رأسي بين الدوائر */
    .step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 20px;
      left: 7px;
      width: 2px;
      height: 30px;
      background-color: #ccc;
    }
  
    /* ✅ خطوات مكتملة أو حالية */
    .step.completed .circle,
    .step.active .circle {
      background-color: #6C3EBF;
    }
  
    .step.completed .label,
    .step.active .label {
      font-weight: bold;
      color: #333;
    }
  
    .right-side {
      flex: 1;
      padding: 50px;
      position: relative;
    }
  
    .step-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 30px;
      color: #6C3EBF;
    }
  
    .categories {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px;
}
.category-wrapper {
  display: flex;
  flex-direction: column;
}

.category-card {
  background-color: #f5f3ff;
  border-radius: 12px;
  padding: 20px;
  font-size: 16px;
  font-weight: 500;
  color: #2d2f56;
  cursor: pointer;
  transition: background-color 0.3s;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}
  
category-card:hover {
  background-color: #ece1ff;
}
  
    .buttons {
  position: absolute;
  bottom: 40px;
  left: 50px;
  right: 50px;
  display: flex;
  justify-content: space-between;
}

.btn {
  padding: 10px 28px;
  font-size: 16px;
  font-weight: bold;
  color: #F59E0B;
  background-color: #f2f2f2;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
  box-shadow: none;
}

.btn:hover {
  background-color: #e6e6e6;
}

  
    .category-card {
      background-color: #f5f3ff;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      font-size: 16px;
      font-weight: 500;
      color: #2d2f56;
      cursor: pointer;
      transition: background-color 0.3s;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      position: relative;
    }
  
    .category-card:hover {
      background-color: #ece1ff;
    }
  
    .sub-options {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.sub-options .option {
  padding: 8px 14px;
  background-color: #e6e6e6;
  border-radius: 999px;
  font-size: 14px;
  cursor: pointer;
  transition: 0.3s;
}
  
.sub-options .option:hover {
  background-color: #d4d4d4;
}

.sub-options .option.selected {
  background-color: #6C3EBF;
  color: white;
}

  
.hidden {
  display: none;
}
  </style>
  
  
</head>
<body>
  <div class="frame">
    <!-- Left Sidebar -->
    <div class="left-side">
      <div class="logo">
        <img src="image-removebg-preview.png" alt="Train Track Logo">
      </div>
      <div class="progress-title">Steps Guide</div>
      <div class="stepper">
        <div class="step completed">
          <div class="circle"></div>
          <div class="label">Let’s Get to Know You</div>
        </div>
        <div class="step active">
          <div class="circle"></div>
          <div class="label">Subject of Interest</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Technical Skills</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Non-Technical Skills</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Training Mode</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Advanced Preferences</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Summary</div>
        </div>
        <div class="step">
          <div class="circle"></div>
          <div class="label">Results</div>
        </div>
      </div>
    </div>

    <!-- Right Content -->
    <div class="right-side">
      <div class="step-title">🎯 Subject of Interest</div>
      <div class="categories">
        <div class="category-wrapper">
          <div class="category-card" onclick="toggleSubOptions(this)">
            <div class="category-title">Computer Science</div>
            <div class="sub-options hidden">
              <div class="option">Operating Systems</div>
              <div class="option">Computer Networks</div>
              <div class="option">Computer Architecture</div>
              <div class="option">Computer Organization</div>
              <div class="option">Theory of Computation</div>
              <div class="option">Data Structures & Algorithms</div>
            </div>
          </div>
        </div>
        
        <div class="category-card">Data & AI</div>
        <div class="category-card">IT Security</div>
        <div class="category-card">Software Engineering</div>
        <div class="category-card">Cloud Technologies</div>
        <div class="category-card">Business & Management</div>
        <div class="category-card">Communication & UX</div>
        <div class="category-card">Mathematics & Logic</div>
      </div>

      <div class="buttons">
        <button class="btn">Back</button>
        <button class="btn next">Next</button>
      </div>
    </div>
  </div>
  <script>
    function toggleSubOptions(card) {
      const sub = card.querySelector('.sub-options');
      sub.classList.toggle('hidden');
    }
  
    document.addEventListener("click", function (e) {
      if (e.target.classList.contains("option")) {
        e.target.classList.toggle("selected");
      }
    });
  </script>
  
  
  
</body>
</html>
