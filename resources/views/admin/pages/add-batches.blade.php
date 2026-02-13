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

        <h3 class="form-title">Add New Batch</h3>

        <form method="POST" action="/admin/add-batch" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <!-- Batch Name / Title -->
                <div class="col-md-6 mb-3">
                    <label>Batch No.</label>
                    <input type="number" name="name" class="form-control" 
                           placeholder="e.g. Web Development March 2025" 
                    >
                    @error ('name')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror  
                </div>

                <!-- Related Course -->
                <div class="col-md-6 mb-3">
                    <label>Course</label>
                    <select name="course_id" class="form-select">
                        <option disabled selected>Select course</option>
                        @foreach ($courses as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @error ('course_id')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Start Date -->
                <div class="col-md-6 mb-3">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control">
                    @error ('start_date')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- End Date -->
                <div class="col-md-6 mb-3">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control">
                    @error ('end_date')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Teacher -->
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status" class="form-select">
                        <option>Upcoming</option>
                        <option>Active</option>
                        <option>Completed</option>
                    </select>
                    @error('status') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Teacher</label>
                    <select id="teacher" name="teacher_assigned" class="form-select">
                        <option disabled selected>Select Teacher</option>
                        
                    </select>
                    @error('status') <p class="text-danger">{{ $message }}</p> @enderror
                </div>

                <!-- Max Students (optional) -->
                <div class="col-md-6 mb-3">
                    <label>Maximum Students <small>(optional)</small></label>
                    <input type="number" name="max_students" class="form-control" 
                           placeholder="e.g. 25" min="1" >
                  @error ('max_students')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>

            </div>

            <button type="submit" class="custom-btn w-100 mt-4">Create Batch</button>

        </form>

    </div>
</div>

<script>
    $.ajax ({
        url: '/admin/get-teachers',
        type: 'GET',
        data: {},
        success: function (response){
            let options = ''
            options += response.map((item, index) => {
                return `<option value= ${item.id}>${item.name}</option>`
            })
            $('#teacher').html(options)
        }

    })
</script>

</x-admin-layout>