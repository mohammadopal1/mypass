<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- DataTables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        @include('layouts.nav')
        <h1 class="text-center ">Welcome to MyPass</h1>
        <p class="text-center ">A secure password management system designed to keep your sensitive information safe.</p>
        
        <!-- New Record Button -->
        <div class="mb-3 w-100 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRecordModal">Add New Record</button>
        </div>

        <!-- Data Table -->
        <div class="w-100">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Card Number</th>
                        <th>CVV</th>
                        <th>Note</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Admin</td>
                        <td>Admin</td>
                        <td>2023-11-27</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>User</td>
                        <td>User</td>
                        <td>2023-11-26</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Chris Evans</td>
                        <td>chrisevans@example.com</td>
                        <td>Moderator</td>
                        <td>Moderator</td>
                        <td>2023-11-25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Adding New Record -->
    <div class="modal fade" id="newRecordModal" tabindex="-1" aria-labelledby="newRecordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newRecordModalLabel">Add New Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newRecordForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <textarea class="form-control" id="note" name="note" rows="4" required></textarea>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                                <option value="Moderator">Moderator</option>
                            </select>
                        </div> -->
                        <button type="submit" class="btn btn-primary w-100">Add Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- jQuery and DataTables JS CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable(); // Initialize the DataTable

            // Handle form submission for the new record
            $('#newRecordForm').on('submit', function (e) {
                e.preventDefault(); // Prevent page refresh
                const newRecord = `
                    <tr>
                        <td>#</td>
                        <td>${$('#name').val()}</td>
                        <td>${$('#email').val()}</td>
                        <td>${$('#role').val()}</td>
                        <td>${new Date().toISOString().split('T')[0]}</td>
                    </tr>
                `;
                $('#example tbody').append(newRecord); // Add new record to the table
                $('#newRecordModal').modal('hide'); // Hide the modal
                $('#newRecordForm')[0].reset(); // Reset the form
            });
        });
    </script>
</body>
</html>
