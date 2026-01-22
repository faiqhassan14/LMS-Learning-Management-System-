<style>
.bg-purpl{
    background-color: #6f42c1;
    color: white;
}
.cursor-pointer{
    cursor: pointer;
}
li{
  cursor: pointer;
}
.assignment-ul{
   width: 90%;
   margin-left: 30px;
   transition: all 0.3s ease;
}
.li-1:hover{
  background-color: #E6E6E6;
  padding: 2px;
  border-radius: 5px;
}
.course-dropdown{
   top: 50px;
   right: 10px;
   background: #F4F4F4;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   border-radius: 5px;
   padding: 10px;
   display: none;
   transition: 0.3s ease;
}
.up-li{
   padding: 5px;
}
.up-li:hover{
   background-color: #6F42C1;
   border-radius: 5px;
   cursor: pointer;
   color: white
}
.assignment-dropdown{
   top: 290px;
   left: 35px;
   background: #F4F4F4;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   border-radius: 5px;
   padding: 10px;
   display: none;
   transition: 0.3s ease;
}
</style>

<ul class="d-flex flex-column sidebar gap-2 p-3 mt-2">
   <li class="d-flex align-items-center item gap-2 bg-purpl rounded-3 p-3">
      <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="25px" alt="Dashboard Icon">
      Dashboard
   </li>
   <li class="d-flex course-menu align-items-center item  gap-2 rounded-3 p-3 position-relative cursor-pointer">
       <img src="https://assignmate.free.nf/images/icons/courses.png" width="25px" alt="Courses Icon">
       Course
       <ul class="course-dropdown list-unstyled position-absolute">
         <li class="up-li">View Courses</li>
         <li class="up-li">Edit Course</li>
       </ul>
   </li>
   <li class="d-flex align-items-center assignment-menu item  gap-2 rounded-3 p-3">
      <img src="https://png.pngtree.com/png-vector/20250606/ourmid/pngtree-3d-user-icon-on-blue-circle-isolated-transparent-background-white-png-image_16477931.png" width="25px" alt="Assignments Icon">
        User
      <ul class="assignment-dropdown list-unstyled position-absolute">
         <li class="up-li">Add User</li>
         <li class="up-li">View User</li>
      </ul>
   </li>
   <li class="d-flex align-items-center assignment-menu item  gap-2 rounded-3 p-3">
      <img src="https://assignmate.free.nf/images/icons/assignments.png" width="25px" alt="Assignments Icon">
        Batches
   </li>
   <li class="d-flex align-items-center item  gap-2 rounded-3 p-3">
      <img src="https://cdn-icons-png.flaticon.com/512/12635/12635060.png" width="25px" alt="Logout Icon">
      Logout
   </li>
</ul>
<script>
   const assignItem = document.querySelector('.course-menu');
   const courseDropdown = document.querySelector('.course-dropdown');
   // Assignment Dropdown
   const assignmentItem = document.querySelector('.assignment-menu');
   const assignmentDropdown = document.querySelector('.assignment-dropdown');
   assignItem.addEventListener('click', (e)=> {
      e.stopPropagation();
      courseDropdown.style.display = courseDropdown.style.display === 'block' ? 'none' : 'block';
   })
   document.addEventListener('click', ()=> {
      courseDropdown.style.display = 'none';
   })
   assignmentItem.addEventListener('click', (e)=>{
      e.stopPropagation();
      assignmentDropdown.style.display = assignmentDropdown.style.display === 'block' ? 'none' : 'block';
   })
   document.addEventListener('click', ()=>{
      assignmentDropdown.style.display = 'none';
   })
</script>