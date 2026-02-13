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

{{-- <div style="display: flex; justify-content: end; align-items: center; gap: 10px; margin-top: 50px; padding: 15px 25px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 8px; background-color: #fff;">
  <h4 style="margin: 0;">Batches</h4>
  <select name="batch" style="border: 2px solid #6F42C1; padding: 7px; border-radius: 5px;" id="batch">
    <option value="" disabled selected>Select Batch</option>
  </select>
</div> --}}

<script>
  $.ajax({
    url: '/teacher/get-my-batches',
    type: 'GET',
    data: {},
    success: function(response){
      let options = '';
      options += response.map((item, index)=>{
        return `<option value=${item.id}>${item.name}</option>`
      })
      $('#batch').html(options)
    }
  })
</script>