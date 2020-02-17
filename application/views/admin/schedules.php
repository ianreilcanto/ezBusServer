
</br>
<h2>Daily Schedules</h2>
<p class="text-primary">Press delete button to erase information.</p> 
<input class="form-control" id="myInput" type="text" placeholder="Search..">

<table class="table table-striped">
    <thead>
        <tr>
            <th>Origin and Distination</th>
            <th>Time</th>
            <!-- <th>Seats</th> -->
            <th>Option</th>
        </tr>
    </thead>
    <tbody id="myTable">

      <?php foreach( $schedules as $schedule ){ ?>
          <tr>
              <td><?php echo $schedule->routeName; ?></td>
              <td>
                  <?php echo $schedule->tripSchedule; ?>
              </td>
              <td>
                <a href="javascript:void(0)" style="margin-left: 0 !important;" class="btn btn-outline-danger">Delete</a>
              </td>
          </tr> 
      <?php } ?>  
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