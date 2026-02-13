<x-admin-layout>
<x-toast />

<style>
.form-wrapper{
    min-height: calc(100vh - 120px);
    display:flex;
    align-items:center;
    justify-content:center;
}
.form-card{
    background:#fff;
    border-radius:15px;
    padding:30px;
    max-width:900px;
    width:100%;
    box-shadow:0 15px 40px rgba(0,0,0,.2);
}
.form-title{
    text-align:center;
    font-weight:700;
    margin-bottom:25px;
}
.custom-btn{
    background: #6F42C1;
    color:#fff;
    padding:14px;
    border-radius:10px;
    border:none;
    font-weight:600;
}
</style>

<div class="container form-wrapper">
<div class="form-card">

<h3 class="form-title">Add New Course</h3>

<form method="POST" action="/admin/add-course" enctype="multipart/form-data">
@csrf

<div class="row">
    <!-- Course Name -->
    <div class="col-md-6 mb-3">
        <label>Course Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <!-- Description -->
    <div class="col-md-6 mb-3">
        <label>Description</label>
        <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
        @error('description') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <!-- Duration -->
    <div class="col-md-6 mb-3">
        <label>Duration (weeks)</label>
        <input type="number" name="duration" class="form-control" value="{{ old('duration') }}">
        @error('duration') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

    <!-- Level -->
    <div class="col-md-6 mb-3">
        <label>Level</label>
        <select name="level" class="form-select">
            <option disabled selected>Select a level</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>
        @error('level') <p class="text-danger">{{ $message }}</p> @enderror
    </div>

</div>

<button class="custom-btn w-100">Add Course</button>

</form>
</div>
</div>

</x-admin-layout>
