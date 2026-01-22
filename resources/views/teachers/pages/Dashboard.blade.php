
<x-layout class="overflow-x-hidden">
   <x-navbar />
   <div class="row">
      <div class="col-xl-2 col-lg-3 d-none d-lg-block">
         <x-sidebar />
      </div> 
      <div class="col-xl-6 col-lg-9 two-grid col-md-12 p-3">
         @include('teachers.pages.partials.progress')
         @include('teachers.pages.partials.student-list')
      </div>
      <div class="col-xl-4 col-lg-12 col-md-12 p-3">
         @include('teachers.pages.partials.average')
      </div>
   </div>
</x-layout>