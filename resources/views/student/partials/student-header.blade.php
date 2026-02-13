<style>
    body {
      background-color: #f5f7fa;
      font-family: system-ui, -apple-system, sans-serif;
    }
    
    .header-card {
      background: white;
      color: black;
      border-radius: 12px;
      padding: 1.25rem 1.5rem;
      margin-bottom: 1.5rem;
    }
    
    .stats-icon {
      font-size: 1.9rem;
      margin-right: 8px;
      opacity: 0.9;
    }
    
    .pending-badge {
      background-color: #F0EAF6;
      color: black;
      font-weight: 500;
      padding: 0.35rem 0.9rem;
      border-radius: 20px;
      font-size: 0.85rem;
    }
    
    .card-stat {
      background: white;
      border-radius: 12px;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      transition: transform 0.15s ease;
    }
    
    .card-stat:hover {
      transform: translateY(-3px);
    }
    
    .card-stat .number {
      font-size: 2.3rem;
      font-weight: 700;
      color: #2c3e50;
    }
    
    .card-stat .label {
      color: #7f8c8d;
      font-weight: 500;
      font-size: 0.95rem;
      margin-top: 0.4rem;
    }
    
    .my-courses-table th {
      background-color: #6f42c1;
      color: white;
      font-weight: 500;
    }
    
    .status-cell {
      font-weight: 500;
    }
    .my-courses-table th,
    .my-courses-table td {
        border: 1px solid white;
    }
    .my-courses-table td {
        background: #F2F2F2;
    }
</style>

<div class="container py-4">

  <!-- Top Header Card -->
  <div class="header-card d-flex justify-content-between align-items-center flex-wrap gap-3">
    <div class="d-flex align-items-center">
      <img src="https://assignmate.free.nf/laravel/public/logo.png" alt="lms-img" width="40px" class="stats-icon">
      <div>
        <h5 class="mb-0 fw-semibold">LMS</h5>
        <h6 style="color: #6f42c1;">Batch No: {{ auth()->user()->batch_assigned }} </h6>
      </div>
    </div>
    
    <div class="d-flex align-items-center gap-4">
      <div class="d-flex align-items-center gap-3">
        <span>📚 14</span>
        <span>📝 14</span>
        <span>✅ 0</span>
      </div>
      <span class="pending-badge">Pending</span>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="row g-3 mb-5">
    <div class="col-md-4">
      <div class="card-stat" style="background: #FFF4DE;">
        <img src="https://cdn-icons-png.flaticon.com/256/7342/7342013.png" width="40px" alt="lesson Icon">
        <div class="number">29</div>
        <div class="label">Lessons</div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card-stat" style="background: #FFE2E6;">
        <img src="https://www.petrianeditingservice.co.uk/images/paraphrase.png" width="40px" alt="Assignments Icon">
        <div class="number">12</div>
        <div class="label">Assignments</div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card-stat" style="background: #DCFCE7">
        <img src="https://cdn-icons-png.freepik.com/256/1467/1467229.png?semt=ais_hybrid" width="40px" alt="Test Icon">
        <div class="number">2</div>
        <div class="label">Tests</div>
      </div>
    </div>
  </div>

  <!-- My Courses Table -->
  <h5 class="mb-3 fw-semibold">My Courses</h5>
  
  <div class="table-responsive" style="border-radius: 12px;">
    <table class="table align-middle my-courses-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Course Name</th>
          <th>Batch</th>
          <th>Course Duration</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>FSWD</td>
          <td>Batch 7</td>
          <td>6 months</td>
          <td class="status-cell">
            <span class="me-2">📚 14</span>
            <span class="me-2">📝 14</span>
            <span class="me-2">✅ 0</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>