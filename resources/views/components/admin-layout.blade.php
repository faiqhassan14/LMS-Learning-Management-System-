<style>
   html, body {
    height: 100%;
    overflow: hidden;
   }
   .navbar {
    height: 60px;
  }
  .admin-layout {
    height: calc(100vh - 60px); /* navbar height minus */
   }
   .admin-sidebar {
    height: calc(100vh - 60px);
    overflow: hidden;
   }
   .admin-content {
    height: calc(100vh - 60px);
    overflow-y: auto;
   }
</style>

<x-layout class="overflow-x-hidden">
   <x-navbar />
   <div class="row admin-layout">
      <div class="col-xl-2 col-lg-3 d-none d-lg-block admin-sidebar">
         <x-admin-sidebar />
      </div> 
      <div class="col-xl-10 col-lg-9 col-md-12 p-3 admin-content">
        {{ $slot }}
      </div>
   </div>
</x-layout>