<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'main_page.php';
        ?>
    </head>
    <body>
        <div>
            <form action='action.php' method="post">
                <center>
                    <table style="background-color: black; color: white; opacity: 0.8; padding: 20px; margin-top: 30px;">
                        <tr>
                            <td colspan="2" style="text-align: center; padding-bottom: 20px; font-size: 20px;">Book your table now...</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input style="padding: 10px; padding-right: 35px; padding-top: 2px; padding-bottom: 2px;" type="text" name="name" value="" placeholder="Name">
                            </td>
                        </tr>
                        <tr>
                            <td style=" padding: 10px;">Table Capacity</td>
                            <td>
                                <select style="padding-right: 70px;" name="seat">
                                    <option value="" disabled selected>Select table capacity</option>
                                    <option value="2 ->100 Rs.">2 -> 100 Rs.</option>
                                    <option value="4 ->200 Rs.">4 -> 200 Rs.</option>
                                    <option value="6 ->300 Rs.">6 -> 300 Rs.</option>
                                    <option value="8 ->400 Rs.">8 -> 400 Rs.</option>
                                    <option value="10 ->500 Rs.">10 -> 500 Rs.</option>
                                    <option value="12 ->600 Rs.">12 -> 600 Rs.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>
                                <input type="datetime-local" name="date" value="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;"><br>
                                <input style="background-color: green" type="submit" name="submit" value="Book now!">
                            </td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
    </body>
</html>