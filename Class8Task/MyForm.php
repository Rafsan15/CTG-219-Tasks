<html>
<head>
    <title>MOBO HUB</title>
</head>
<body>
<?php


class MyForm
{
    public function __construct(){
    }

    private function NavBar(){?>
        <form action="index.php" method="post">
            <input type="submit" name="AddBtn" value="Add" >
        </form>
        <form action="List.php" method="post">
            <input type="submit" name="ListBtn" value="List">
        </form>
        <?php
    }

    private function SearchBox(){ ?>
        <form action="Display.php" method="post">
            <label>Search:</label><label>
                <input type="text" name="Search">
            </label>
            <input type="submit" name="SearchBtn" value="Click Here">
        </form>

        <?php

    }

    public function InsertForm(){
        $this->NavBar();

        ?>

                <form action="List.php" method="post">
                   <label>Name:</label> <label>
                        <input type="text" name="Name">
                    </label><br>
                   <label>Model:</label> <label>
                        <input type="text" name="Model">
                    </label><br>
                   <label>Price:</label> <input type="text" name="Price"><br>
                    <input type="submit" name="Submit" class="SubmitBtn" value="Submit">
                </form>


<?php

    }

    public function ShowAllData($data)
    {
        $this->NavBar();
        $this->SearchBox();
        ?>
            <table border="1">
                <th>Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
                <?php foreach ($data as $d){?>
                    <tr>
                        <td><?php echo $d['Name'] ?></td>
                        <td><?php echo $d['Model']; ?></td>
                        <td><?php echo $d['Price']; ?></td>
                        <td>
                            <form action="Edit.php" method="post">
                                <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                                <input type="submit" name="Edit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="Delete.php" method="post">
                                <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                                <input type="submit" name="Delete" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php  }?>
            </table>

        <?php
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

        <form action="Edit.php" method="post">
            <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>">
            <label>Name:</label> <input type="text" name="Name" value="<?php echo $model['Name'] ?>"><br>
            <label>Model:</label> <input type="text" name="Model" value="<?php echo $model['Model'] ?>"><br>
            <label>Price:</label> <input type="text" name="Price" value="<?php echo $model['Price'] ?>"><br>
            <input type="submit" name="Update" class="SubmitBtn" value="Update">
        </form>


        <?php
    }


}
?>
            </body>
        </html>
