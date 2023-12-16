<!-- resources/views/admin/categories.blade.php -->

@extends('layouts.app')

@section('title', 'Admin Categories')

@section('content')
    <div class="container">
        <h2>Categories</h2>

        <!-- Display success message if any -->
        @if(session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function(){
                    $('#success-alert').fadeOut('slow');
                }, 3000);
            </script>
        @endif

        <!-- Display validation errors if any -->
        @if($errors->any())
            <div class="alert alert-danger" id="error-alert">
                Please fix the following errors:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <script>
                setTimeout(function(){
                    $('#error-alert').fadeOut('slow');
                }, 3000);
            </script>
        @endif

        <!-- Add Category Form -->
        <form method="post" action="{{ route('admin.categories.create') }}">
            @csrf
            <label for="name">Category Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            <label for="status">Status:</label>
            <select name="status" required>
                <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit">Add Category</button>
        </form>

        <!-- List of Categories -->
        @if(count($categories) > 0)
            <h3>Category List</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status }}</td>
                            <td>
                                <button onclick="editCategory({{ $category->id }})">Edit</button>
                                <form method="post" action="{{ route('admin.categories.delete', $category->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No categories found.</p>
        @endif
    </div>


    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Edit Category</h2>
            <form id="editForm" method="post" action="{{ route('admin.categories.update', 0) }}">
                @csrf
                @method('PATCH')
                <label for="editName">Category Name:</label>
                <input type="text" id="editName" name="name" required>
                <label for="editStatus">Status:</label>
                <select id="editStatus" name="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <button type="submit">Update Category</button>
            </form>
        </div>
    </div>


    <script>
        function editCategory(id, name, status) {
            document.getElementById('editName').value = name;
            document.getElementById('editStatus').value = status;

            document.getElementById('editForm').action = "{{ url('admin/categories') }}/" + id;

            document.getElementById('editModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }
    </script>


    <script>
        function editCategory(id) {
            // Implement your edit logic here
            alert('Edit category with ID: ' + id);
        }
    </script>
@endsection
