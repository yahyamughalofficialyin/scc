<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<head>
    <?php include "head.php"; ?>
</head>

<body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <?php include "header.php"; ?>
            <div class="content">
                <?php include "header-responsive.php"; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0" data-anchor="data-anchor">Service Table</h5>
                            </div>
                            <div class="col-auto ms-auto">

                                <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
                                    <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#ServiceModal">Add Service</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="tab-content">
                                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-80fe85af-d302-463d-8e33-39cc6809d26f" id="dom-80fe85af-d302-463d-8e33-39cc6809d26f">
                                    <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                        <div class="row justify-content-end g-0">
                                            <div class="col-auto col-sm-5 mb-3">
                                                <form>
                                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
                                                        <div class="input-group-text bg-transparent"><span class="fa fa-search fs-10 text-600"></span></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="table-responsive scrollbar">
                                            <table class="table table-bordered table-striped fs-10 mb-0">
                                                <thead class="bg-200">
                                                    <tr>
                                                        <th class="text-900 sort" data-sort="id">Id</th>
                                                        <th class="text-900 sort" data-sort="name">Name</th>
                                                        <th class="text-900 sort" data-sort="description">Description</th>
                                                        <th class="text-900 sort" data-sort="icon">Icon</th>
                                                        <th class="text-900 sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="ServiceTable"></tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <!-- Service Modal -->
    <div class="modal fade" id="ServiceModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form id="ServiceForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="modal-title">Add Service</h5>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="serviceId">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="desc" id="desc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="iconDropdown">Icon</label>
                            <select name="icon" id="iconDropdown" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select name="depart" id="DepartmentList" class="form-control"></select>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            const iconDropdown = $('#iconDropdown');

            // Fetch Bootstrap Icons List
            fetch('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.json')
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (typeof data === 'object') {
                        // Loop through the object keys and create dropdown options
                        Object.keys(data).forEach(icon => {
                            iconDropdown.append(
                                `<option value="${icon}" data-icon="${icon}"><i class="bi bi-${icon}"></i> ${icon}</option>`
                            );
                        });

                        // Initialize Select2 with custom templates
                        iconDropdown.select2({
                            placeholder: 'Select an icon',
                            templateResult: formatIcon, // Format dropdown options
                            templateSelection: formatIcon // Format selected item
                        });
                    } else {
                        console.error('Expected an object, but got:', data);
                    }
                })
                .catch(error => {
                    console.error('Error fetching icons:', error);
                });

            // Function to format dropdown options with icons
            function formatIcon(icon) {
                if (!icon.id) {
                    return icon.text; // Return text for placeholders
                }
                return $(`<span><i class="bi bi-${icon.element.dataset.icon}"></i> ${icon.text}</span>`);
            }
        });
    </script>
    <!-- JavaScript and jQuery for CRUD operations -->
    <script>
        // Fetch Services
        function fetchServices() {
            $.ajax({
                url: "code.php?fetch_services=true",
                method: "GET",
                success: function(data) {
                    let services = JSON.parse(data);
                    let html = '';
                    services.forEach(service => {
                        html += `<tr>
                  <td>${service.id}</td>
                  <td>${service.Name}</td>
                  <td>${service.Description || ''}</td>
                  <td>
                  <i class="bi bi-${service.Icon}"></i>
                  </td>
                  <td>
                      <button onclick="editService('${service.id}')" class="btn btn-warning">Edit</button>
                      <button onclick="deleteService('${service.id}')" class="btn btn-danger">Delete</button>
                  </td>
               </tr>`;
                    });
                    document.getElementById('ServiceTable').innerHTML = html;
                }
            });
        }

        // Call fetchServices on page load
        fetchServices();

        function fetchDepartments() {
            $.ajax({
                url: "code.php?fetch_departments=true",
                method: "GET",
                success: function(data) {
                    let departments = JSON.parse(data);
                    let html = '';
                    departments.forEach(department => {
                        html += `<option value="${department.id}">${department.name}</option>`;
                    });
                    document.getElementById('DepartmentList').innerHTML = html;
                }
            });
        }

        // Call fetchDepartments on page load
        fetchDepartments();

        // Handle form submission for Create and Update
        $('#ServiceForm').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let action = $('#serviceId').val() === '' ? 'create_service' : 'update_service';
            formData.append(action, true);

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    $('#ServiceModal').modal('hide');
                    fetchServices();
                }
            });
        });

        // Edit Service
        function editService(id) {
            $.ajax({
                url: 'code.php?fetch_services=true',
                method: 'GET',
                success: function(data) {
                    let services = JSON.parse(data);
                    let service = services.find(dep => dep.id === id);
                    $('#serviceId').val(service.id);
                    $('#name').val(service.Name);
                    $('#desc').val(service.Description);
                    $('#ServiceModal').modal('show');
                }
            });
        }

        // Delete Service
        function deleteService(id) {
            if (confirm("Are you sure you want to delete this service?")) {
                $.post('code.php', {
                    delete_service: true,
                    id: id
                }, function(response) {
                    alert(response);
                    fetchServices();
                });
            }
        }
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