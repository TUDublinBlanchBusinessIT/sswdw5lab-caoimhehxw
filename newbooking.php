<html>
    <body>
        <form method="POST" action="createNewBooking.php">
            <!-- replace this line with an input tag for the memberID -->
            memberID:<?php include("createNewBooking.php");?><br>
            <!-- replace this line with an input tag for the courtID -->
            courtID: <input type="date" name="courtID"/><br>
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
</html>