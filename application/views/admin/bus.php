</br>
<h2>Bus Information</h2>
<p class="text-primary">Press delete button to erase information.</p> 
<input class="form-control" id="myInput" type="text" placeholder="Search..">  

<table class="table table-striped">
    <thead>
        <tr>
            <th>Bus Number</th>
            <th>Bus Type</th>
            <th>Seats</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <tr>
            <td>1092</td>
            <td>Air Condition</td>
            <td>56</td>
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
