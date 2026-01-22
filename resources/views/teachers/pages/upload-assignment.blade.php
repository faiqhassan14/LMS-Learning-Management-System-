<x-teacher-layout>
    <div class="col-md-8 col-lg-7 m-auto">
    <div class="card shadow-sm" style="background-color: white">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Add an assignment/test</h4>
            <form action="/teacher/upload-assignment" method="POST" enctype="multipart/form-data">
                
                @csrf
                        
                        <!-- Topic -->
                        <div class="mb-3">
                            <label for="topic" class="form-label">Topic</label>
                            <input type="text" name="topic" id="topic" class="form-control" placeholder="Enter name of the topic..." value="{{ old('topic') }}">
                            @error('topic')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="desc" id="description" class="form-control" placeholder="Enter description of the topic..." value="{{ old('desc') }}">
                            @error('desc')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Max Marks -->
                        <div class="mb-3">
                            <label for="marks" class="form-label">Max Marks</label>
                            <input type="number" name="marks" id="marks" class="form-control" placeholder="e.g. 15" value="{{ old('marks') }}">
                            @error('marks')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Batch -->
                        <div class="mb-3">
                            <label for="batch" class="form-label">Batch no.</label>
                            <select name="batch" id="batch" class="form-select" value="{{ old('batch') }}">
                                <option value="">Select batch</option>
                                <option value="20">Batch 20</option>
                                <option value="22">Batch 22</option>
                                <option value="23">Batch 23</option>
                            </select>
                            @error('batch')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deadline -->
                        <div class="mb-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="datetime-local" name="deadline" id="deadline" class="form-control" value="{{ old('deadline') }}">
                            @error('deadline')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Type -->
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" id="type" class="form-select" value="{{ old('type') }}">
                                <option value="">Select type</option>
                                <option value="assignment">Assignment</option>
                                <option value="test">Test</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Upload File -->
                        <div class="mb-4">
                            <label for="file" class="form-label">Upload File</label>
                            <input type="file" name="file" id="file" class="form-control" value="{{ old('file') }}">
                            @error('file')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn w-100 text-white" style="background: #6F42C1">Add Task</button>
            </form>
        </div>
    </div>
</div>
</x-teacher-layout>