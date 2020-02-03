</br>
        <h2>Drivers Basic Information</h2>
        <p class="text-primary">Press delete button to erase information.</p> 
        <input class="form-control" id="myInput" type="text" placeholder="Search..">  

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Age</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td>Guinit</td>
                    <td>Jayson</td>
                    <td>29</td>
                    <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>

        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>