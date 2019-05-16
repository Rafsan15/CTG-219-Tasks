<html>
    <head>
    <title>MOBO HUB</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var name = document.forms["InsertForm"]["Name"].value;
            var model = document.forms["InsertForm"]["Model"].value;
            var price = document.forms["InsertForm"]["Price"].value;
            if (name == "") {
                document.getElementById("NameSpan").innerHTML="Name must be filled out";
                return false;
            }
            else {
                document.getElementById("NameSpan").innerHTML="";

            }
            if (model == "") {
                document.getElementById("ModelSpan").innerHTML="Model must be filled out";
                return false;
            }
            else {
                document.getElementById("ModelSpan").innerHTML="";

            }
            if (price =="") {
                document.getElementById("PriceSpan").innerHTML="Price must be filled out";
                return false;
            }
            else {
                document.getElementById("PriceSpan").innerHTML="";

            }
        }
    </script>
</head>
    <body>
<?php


class MyForm
{
    public function __construct(){
    }

    private function NavBar(){?>
        <div class="Nav">
            <form action="List.php" method="post">
                <input type="submit" name="ListBtn" value="List">
            </form>
            <form action="index.php" method="post">
                <input type="submit" name="AddBtn" value="Add" >
            </form>

        </div>

        <?php
    }

    private function SearchBox(){ ?>
        <div class="Search">
            <form action="Display.php" method="post">
                    <input type="number" name="Search" placeholder="Search By Price">
                <input type="submit" name="SearchBtn" class="SearchBtn" value="Click Here">
            </form>
        </div>
        <?php
    }

    public function InsertForm(){
        $this->NavBar();

        ?>
                <div class="Insert">
                    <h1>Please Insert Mobile Details</h1>
                    <form name="InsertForm" action="List.php" onsubmit="return validateForm()"  method="post">
                        <input type="text" name="Name" placeholder="Name"><br>
                        <span id="NameSpan" style="color: #e8491d"></span>
                        <input type="text" name="Model" placeholder="Model"><br>
                        <span id="ModelSpan" style="color: #e8491d"></span>
                        <input type="number" name="Price" placeholder="Price"><br>
                        <span id="PriceSpan" style="color: #e8491d"></span>
<!--                        <input type='file' name= 'image'>-->
                        <input type="submit" name="Submit" class="Btn" value="Submit">
                    </form>
                </div>

            <?php
             $this->Footer();
    }

    public function ShowAllData($data)
    {
        $this->NavBar();
        $this->SearchBox();
        ?>
        <div class="Display">
            <?php foreach ($data as $d){?>
                <section id="boxes">
                    <div class="box">
                        <h4>Name :<?php echo $d['Name'] ?> </h4>
                        <h4>Model :<?php echo $d['Model'] ?> </h4>
                        <h4>Price :<?php echo $d['Price'] ?> </h4>
                        <form action="Edit.php" method="post">
                            <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                            <input type="submit" name="Edit" class="TableBtn" value="Edit">
                        </form>
                        <form action="Delete.php" method="post">
                            <input type="hidden" name="Id"  value="<?php echo $d['Id'] ?>">
                            <input type="submit" name="Delete" class="TableBtn" value="Delete">
                        </form>
                    </div>
                </section>

                <?php  }?>

        </div>


        <?php
        $this->Footer();
    }

    public function ShowDataByPrice($data){
        ?>
        <form action="index.php" method="post">
            <input type="submit" name="Back" value="Back">
        </form>
        <table border="1">
            <th>Name</th>
            <th>Model</th>
            <th>Price</th>
            <?php foreach ($data as $d){?>
                <tr>
                    <td><?php echo $d['Name'] ?></td>
                    <td><?php echo $d['Model']; ?></td>
                    <td><?php echo $d['Price']; ?></td>
                </tr>
            <?php  }?>
        </table>

        <?php
    }

    public function UpdateForm($model){
        $this->NavBar();
        ?>
        <div class="Insert">
            <h1>Please Update Mobile Details</h1>
            <form name="InsertForm" action="Edit.php" onsubmit="return validateForm()"  method="post">
                <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>">
                <input type="text" name="Name" placeholder="Name" value="<?php echo $model['Name'] ?>"><br>
                <span id="NameSpan" style="color: #e8491d"></span>
                <input type="text" name="Model" placeholder="Model" value="<?php echo $model['Model'] ?>"><br>
                <span id="ModelSpan" style="color: #e8491d"></span>
                <input type="number" name="Price" placeholder="Price" value="<?php echo $model['Price'] ?>"><br>
                <span id="PriceSpan" style="color: #e8491d"></span>
                <input type="submit" name="Update" class="Btn" value="Update">
            </form>
        </div>

        <?php
        $this->Footer();
    }

    private function Footer(){
        ?>
        <footer>
            <h1>Thank you for your time.</h1>
        </footer>

<?php
    }


}
?>
    </body>
</html>
