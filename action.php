<!DOCTYPE html>
<?php
    include 'main_page.php';
    if ($_POST["name"] != "" && $_POST["name"] != null && $_POST["seat"] != "" && $_POST["seat"] != null && $_POST["date"]) {
        ?>
            <center>
                <div class="d-flex">
                    <div class="flex-1"></div>
                    <div class="flex-1" style="background-color: black; color: white; opacity: 0.8; margin-top: 30px; padding: 20px; border-radius: 5px; font-size: 18px;">
                        <?php
                            $date = date("d-m-Y", strtotime($_POST["date"]));
                            echo "Hello {$_POST['name']}, Your table is booked succesfully on {$date}. ";
                            echo "And the capacity is {$_POST['seat']}";
                        ?>
                    </div>
                    <div class="flex-1"></div>
                </div>
            </center>
        <?php
    } else {
        header("Location: book.php");
    }
?>