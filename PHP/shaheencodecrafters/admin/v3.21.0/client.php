<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <?php include "head.php"; ?>
</head>

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <?php include "header.php"; ?>
            <div class="content">
                <?php include "header-responsive.php"; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0">Client Table</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#ClientModal">Add Client</button>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs-10 mb-0">
                                    <thead class="bg-200">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Logo</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ClientTable"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Client Modal -->
    <div class="modal fade" id="ClientModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="ClientForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Client</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="clientId">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <div id="currentLogo" class="mt-2"></div>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="direct">Direct</option>
                                <option value="indirect">Indirect</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>
        function fetchClients() {
            $.ajax({
                url: "code.php?fetch_clients=true",
                method: "GET",
                success: function(data) {
                    let clients = JSON.parse(data);
                    let html = '';
                    clients.forEach(client => {
                        html += `<tr>
                            <td>${client.id}</td>
                            <td>${client.name}</td>
                            <td><img src="uploads/client/${client.logo}" style="width: 100px;filter: grayscale(100%); transition: filter 0.5s ease;" onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(100%)'"></td>
                            <td>${client.type}</td>
                            <td>
                                <button onclick="editClient('${client.id}')" class="btn btn-warning">Edit</button>
                                <button onclick="deleteClient('${client.id}')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>`;
                    });
                    $('#ClientTable').html(html);
                }
            });
        }

        $(document).ready(function() {
            fetchClients();
        });

        $('#ClientForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let action = $('#clientId').val() === '' ? 'create_client' : 'update_client';
            formData.append(action, true);

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    $('#ClientModal').modal('hide');
                    fetchClients();
                }
            });
        });

        function editClient(id) {
            $.ajax({
                url: "code.php?fetch_clients=true",
                method: "GET",
                success: function(data) {
                    let clients = JSON.parse(data);
                    let client = clients.find(e => e.id === id);
                    $('#clientId').val(client.id);
                    $('#name').val(client.name);
                    $('#type').val(client.type);

                    $('#currentLogo').html(
                        `<img src="uploads/client/${client.logo}" style="width: 100px;" alt="Client Logo">`
                    );

                    $('#ClientModal').modal('show');
                }
            });
        }

        function deleteClient(id) {
            if (confirm("Are you sure you want to delete this Client?")) {
                $.post('code.php', {
                    delete_client: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchClients();
                });
            }
        }

        $('#ClientModal').on('hidden.bs.modal', function() {
            $('#currentLogo').empty();
            $('#ClientForm')[0].reset();
            $('#clientId').val('');
        });
    </script>

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>

</body>

</html>
