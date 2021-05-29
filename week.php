<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'main_page.php';
        ?>
    </head>
    <body>
        <div class="d-flex">
            <div class="flex-1">
                <form action="week.php" method="post" style="margin-left: 50px; margin-top: 20px;">
                    <div>
                        <input type="submit" name="sunday" value="Sunday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="monday"value="Monday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="tuesday" value="Tuesday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="wednesday" value="Wednesday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="thursday" value="Thursday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="friday" value="Friday's Special" class="btn"><br><br>
                    </div>
                    <div>
                        <input type="submit" name="saturday" value="Saturday's Special" class="btn"><br><br>
                    </div>
                </form>
            </div>
            <div class="flex-2" style="margin-top: 30px;">
                <?php
                    if (isset($_POST["sunday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Sundays's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Sapota Juice</td>
                                    <td>30 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Idly - Vada</td>
                                    <td>40 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Veg Pulav</td>
                                    <td>120 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Curd Rice</td>
                                    <td>80 RS.</td>
                                </tr>
                            </table>
                        <?php
                    } else if (isset($_POST["monday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Monday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Water Melon</td>
                                    <td>30 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Ghee Rice</td>
                                    <td>140 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Ghee Rice</td>
                                    <td>50 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Ghee Rice</td>
                                    <td>40 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }else if (isset($_POST["tuesday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Tuesday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Ghee Rice</td>
                                    <td>40 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Buns</td>
                                    <td>50 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">North Indian Thali</td>
                                    <td>180 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Gobi Manchurian</td>
                                    <td>80 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }else if (isset($_POST["wednesday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Wednesday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Grape</td>
                                    <td>25 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Jeera Rice</td>
                                    <td>140 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Nippat Masala</td>
                                    <td>80 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Quesadilla</td>
                                    <td>50 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }else if (isset($_POST["thursday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Thursday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Musk Melon</td>
                                    <td>30 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">South Indian Thali</td>
                                    <td>140 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Kachori</td>
                                    <td>50 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Fried Rice</td>
                                    <td>40 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }else if (isset($_POST["friday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Friday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Water Melon</td>
                                    <td>30 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Butter Roti</td>
                                    <td>40 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Vada Pav</td>
                                    <td>40 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Pot Rice</td>
                                    <td>50 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }else if (isset($_POST["saturday"])) {
                        ?>
                            <table style="background-color: black; padding: 30px; color: white; opacity: .8;">
                                <tr>
                                    <td colspan="2" style="text-align: center"><h3>Saturday's Special</h3></td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Fried Rice</td>
                                    <td>40 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Water Melon</td>
                                    <td>30 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Ghee Rice</td>
                                    <td>50 RS.</td>
                                </tr>
                                <tr>
                                    <!--<td style="padding-right: 10px"><img src="img/food_icon.jpg" alt="food-icon" width="15" height="15"/></td>-->
                                    <td style="padding-right: 50px">Butterfruit</td>
                                    <td>40 RS.</td>
                                </tr>
                            </table>
                        <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>