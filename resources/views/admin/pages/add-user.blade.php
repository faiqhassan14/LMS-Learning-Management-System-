<x-admin-layout>
    <x-toast />
    <style>
        .form-wrapper {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .form-title {
            font-weight: 700;
            text-align: center;
            margin-bottom: 25px;
            color: #6f42c1;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: #6f42c1;
        }

        .custom-btn {
            background-color: #6f42c1;
            color: white;
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
            border: none;
        }
    </style>

    <div class="container form-wrapper">
        <div class="form-card">

            <h3 class="form-title">Add New User</h3>

            <form method="POST" action="/admin/add-user" enctype="multipart/form-data">
                @csrf

                <!-- Full Name -->
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
                    @error ('name')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror  
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}">
                    @error ('email')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{old('password')}}">
                    @error ('password')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div class="mb-3">
                    <label>Select Role</label>
                    <select class="form-select" id="role" name="role" value="{{old('role')}}">
                        <option selected disabled>Choose role</option>
                        <option>Teacher</option>
                        <option>Student</option>
                    </select>
                    @error ('role')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Course -->
                <div id="course" class="mb-3">
                    <label>Select Course</label>
                    <select class="form-select" name="course" value="{{old('course')}}">
                        <option selected disabled>Choose course</option>
                        <option>Web Development</option>
                        <option>App Development</option>
                    </select>
                    @error ('course')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label>Gender</label>
                    <select class="form-select" name="gender" value="{{old('gender')}}">
                        <option selected disabled>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    @error ('gender')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label>Number</label>
                    <input type="tel" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="number" class="form-control" value="{{old('number')}}">
                    @error ('number')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- File Upload -->
                <div class="mb-4">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="image" value="{{old('image')}}">
                    @error ('image')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="custom-btn">
                        Add User
                    </button>
                </div>

            </form>

        </div>
    </div>
       {{-- <script>
           $('#role') .on('change', function(){
            let role = $(this).val()
            if(role == 'Student'){
                $('#course').removeClass('d-none')
            } else {
                $('#course').addClass('d-none')
            }
        })
       </script> --}}

</x-admin-layout>