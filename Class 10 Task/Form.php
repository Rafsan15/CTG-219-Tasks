<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:32 PM
 */
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script>
            function Confirmation() {
                var del=confirm("Are you sure you want to delete this record?");
                if (del==true){
                    return true;
                }
                else{
                    return false;
                }
            }
            

        </script>
    </head>
    <body>


<?php
class Form
{

    private function NavBar(){?>
        <div class="Nav">

            <form action="index.php" method="post">
                <input type="submit" name="IndexBtn" value="Type Message">
            </form>
            <form action="LogIn.php" method="post">
                <input type="submit" name="LogInBtn" value="LogIn">
            </form>
            <form action="Registration.php" method="post">
                <input type="submit" name="ListBtn" value="Registration">
            </form>


        </div>

        <?php
    }
    public function MessageShow()
    {

            $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="MessagePost.php" method="post">

                <textarea name="Message" placeholder="Type Your Message Here"></textarea>
                <br>
                <input type="submit" name="SubmitBtn" class="Btn" value="Submit">
            </form>
        </div>




<?php
    }

    public function RegisterPage()
    {
        $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="Registration.php" method="post" enctype="multipart/form-data">
                <input type="text" name="Name" placeholder="Name"><br>
                <span id="NameSpan" style="color: #e8491d"></span>
                <input type="email" name="Email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="text" name="Password" placeholder="Password"><br>
                <span id="PriceSpan" style="color: #e8491d"></span>

                <input type="submit" name="Register" class="Btn" value="Submit">
            </form>
        </div>


<?php
    }

    public function LogInPage()
    {
        $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="LogIn.php" method="post" enctype="multipart/form-data">

                <input type="email" name="Email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="password" name="Password" placeholder="Password"><br>
                <span id="PasswordSpan" style="color: #e8491d"></span>
                <input type="submit" name="LogIn" class="Btn" value="Submit">
            </form>
        </div>


        <?php
    }

    public function Messages($data)
    {
        $this->NavBar();
        ?>

            <table border="1">
                <th>Message</th>
                <th>Delete</th>
                <th>Mark</th>
                <?php foreach ($data as $d){?>

                    <tr>
                        <td align="center"><?php echo $d['Message'] ?></td>
                        <td align="center"><form action="DeleteMsg.php" method="post" onsubmit="return Confirmation()">
                                <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                                <input type="submit" name="DeleteMsg"  class="TableBtn" value="Delete">
                            </form></td>
                        <td align="center"><form name="ChangeName" action="IsImp.php" method="post">
                                <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                                <input type="hidden" name="IsMarked"   value="<?php echo $d['IsImportant'] ?>">
                                <?php
                                if($d["IsImportant"]=="True"){

                                    ?>
                                    <input type="submit" id="<?php echo $d['Id'] ?>" name="MarkImp" class="TableBtn" value="Marked" onclick="changeName(<?php echo $d['Id'] ?>)">

                                    <?php
                                }
                                else{
                                    ?>
                                    <input type="submit" id="<?php echo $d['Id'] ?>" name="MarkImp" class="TableBtn" value="Unmarked" onclick="changeName(<?php echo $d['Id'] ?>)">

                                    <?php
                                }

                                ?>
                            </form></td>
                    </tr>
                <?php  }?>
            </table>


        <?php
    }
}

?>

    </body>
</html>


