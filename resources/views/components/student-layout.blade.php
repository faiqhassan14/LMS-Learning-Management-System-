<x-layout class="overflow-x-hidden">
   <x-navbar />
   <div class="row">
      <div class="col-xl-2 col-lg-3 d-none d-lg-block">
         <x-sidebar />
      </div> 
      <div class="col-xl-8 col-lg-9 col-md-12 p-3">
        {{ $slot }}
      </div>
   </div>
</x-layout>