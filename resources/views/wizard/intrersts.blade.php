<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Subject of Interest</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

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
      width: 1000px;
      height: 600px;
      background-color: #fff;
      display: flex;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .left-side {
      width: 30%;
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

    .step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 20px;
      left: 7px;
      width: 2px;
      height: 30px;
      background-color: #ccc;
    }

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
      padding: 40px;
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
  grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
  gap: 20px;
  justify-items: center;
}

    .category-card {
  width: 160px;
  height: 200px;
  background-color: #f5f3ff;
  border-radius: 16px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  text-align: center;
  font-size: 16px;
  font-weight: 500;
  color: #2d2f56;
  cursor: pointer;
  transition: transform 0.3s, box-shadow 0.3s, border 0.3s;
  border: 2px solid transparent;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.category-card:hover {
  transform: scale(1.03);
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.category-card.selected {
  border-color: #6C3EBF;
}

.category-card img {
  width: 100%;
  height: 130px;
  object-fit: cover;
  display: block;
}

.category-card .label {
  padding: 12px 8px;
  flex-grow: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}

    .buttons {
      position: absolute;
      bottom: 30px;
      left: 40px;
      right: 40px;
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
    }

    .btn:hover {
      background-color: #e6e6e6;
    }

  </style>
</head>
<body>
  <div class="frame">
    <!-- Sidebar -->
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
        <div class="step"><div class="circle"></div><div class="label">Technical Skills</div></div>
        <div class="step"><div class="circle"></div><div class="label">Non-Technical Skills</div></div>
        <div class="step"><div class="circle"></div><div class="label">Training Mode</div></div>
        <div class="step"><div class="circle"></div><div class="label">Advanced Preferences</div></div>
        <div class="step"><div class="circle"></div><div class="label">Summary</div></div>
        <div class="step"><div class="circle"></div><div class="label">Results</div></div>
      </div>
    </div>

    <!-- Content -->
    <div class="right-side">
      <div class="step-title">🎯 Subject of Interest</div>
      <div class="categories">
        <div class="category-card" onclick="toggleCard(this)">
          <img src="cs.jpg" alt="Computer Science">
          <div class="label">Computer Science</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="ai.jpg" alt="Data & AI">
          <div class="label">Data & AI</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="security.jpg" alt="IT Security">
          <div class="label">IT Security</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="sw eng.jpg" alt="Software Engineering">
          <div class="label">Software Engineering</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="clouding.jpg" alt="Cloud Technologies">
          <div class="label">Cloud Technologies</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="business mgm.jpg" alt="Business & Management">
          <div class="label">Business & Management</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="Communication & UX.jpg" alt="Communication & UX">
          <div class="label">Communication & UX</div>
        </div>
        <div class="category-card" onclick="toggleCard(this)">
          <img src="Mathematics & Logic.jpg" alt="Mathematics & Logic">
          <div class="label">Mathematics & Logic</div>
        </div>
      </div>

      <div class="buttons">
        <button class="btn">Back</button>
        <button class="btn">Next</button>
      </div>
    </div>
  </div>

  <script>
    function toggleCard(card) {
      card.classList.toggle('selected');
    }
  </script>
</body>
</html>

