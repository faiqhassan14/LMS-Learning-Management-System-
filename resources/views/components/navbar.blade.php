<div class="d-flex flex-lg-row align-items-center sticky-top justify-content-between p-3 bg-white shadow-sm">
  
  <!-- Left: Logo + LMS -->
  <div class="d-flex align-items-center gap-2 mb-2 mb-lg-0">
    <a href="http://127.0.0.1:8000/dashboard">
      <img class="cursor-pointer" src="https://assignmate.free.nf/laravel/public/logo.png" width="50px" alt="Picture">
    </a>
    <h2 class="text-black fw-bold m-0">LMS</h2>
  </div>

  <!-- Center: Page title -->
  <h3 class="text-black fw-bold m-0 mb-2 mb-lg-0">Dashboard</h3>

  <!-- Right: User info -->
  <div class="d-flex align-items-center gap-2 gap-lg-3">
    
    @if (auth()->user()->image)
       <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Picture" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover; border: 1px solid #6F42C1; border-radius: 50%; cursor: pointer;">
    @else
       <div class="circle-icoon d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border: 1px solid #6F42C1; border-radius: 50%;">
        <i class="bi bi-person fs-4" style="color: #6F42C1"></i>
       </div>
    @endif
    <p class="fw-bold m-0" style="color: #6F42C1"> {{ auth()->user()->name }} </p>
  </div>

</div>
