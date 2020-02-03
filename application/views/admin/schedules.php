
</br>
<h2>Daily Schedules</h2>
<p class="text-primary">Press delete button to erase information.</p> 
<input class="form-control" id="myInput" type="text" placeholder="Search..">

<table class="table table-striped">
    <thead>
        <tr>
            <th>Origin and Distination</th>
            <th>Time</th>
            <th>Seats</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <tr>
            <td>Dumaguete - Bayawan</td>
            <td>
                4:30 am
            </td>
            <td>56</td>
            <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        </tr>   
    </tbody>
</table>

</div>

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