<html>
    <head>
    <title>MOBO HUB</title>
    <link rel="stylesheet" href="style.css">
        <script>
            function validateForm() {
                var name = document.forms["InsertForm"]["Name"].value;
                var model = document.forms["InsertForm"]["Model"].value;
                var price = document.forms["InsertForm"]["Price"].value;
                var image = document.forms["InsertForm"]["ImgFile"].value;
                var eximage = document.forms["InsertForm"]["Images"].value;
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
                if (eximage =="") {
                    if(image ==""){
                        document.getElementById("ImageSpan").innerHTML="Image must be filled out";
                        return false;
                    }
                }
                else {
                    document.getElementById("ImageSpan").innerHTML="";

                }
            }
            function Confirmation() {
                var del=confirm("Are you sure you want to delete this record?");
                if (del==true){
                    return true;
                }
                else{
                    return false;
                }
            }
            function CalcRatings(rate) {
                document.forms["RatingsForm"]["TotalRatings"].value=rate;
                if(rate=='1')
                {
                    document.forms["RatingsForm"]["rating_1"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_2"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_3"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_4"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_5"].src='images/star.jpg';

                }
                if(rate=='2')
                {
                    document.forms["RatingsForm"]["rating_1"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_2"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_3"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_4"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_5"].src='images/star.jpg';
                }
                if(rate=='3')
                {
                    document.forms["RatingsForm"]["rating_1"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_2"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_3"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_4"].src='images/star.jpg';
                    document.forms["RatingsForm"]["rating_5"].src='images/star.jpg';
                }
                if(rate=='4')
                {
                    document.forms["RatingsForm"]["rating_1"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_2"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_3"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_4"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_5"].src='images/star.jpg';
                }
                if(rate=='5')
                {
                    document.forms["RatingsForm"]["rating_1"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_2"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_3"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_4"].src='images/star2.jpg';
                    document.forms["RatingsForm"]["rating_5"].src='images/star2.jpg';
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
            <h1>Welcome To MOBO HUB</h1>
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
                    <form name="InsertForm" action="List.php" onsubmit="return validateForm()"  method="post" enctype="multipart/form-data">
                        <input type="text" name="Name" placeholder="Name"><br>
                        <span id="NameSpan" style="color: #e8491d"></span>
                        <input type="text" name="Model" placeholder="Model"><br>
                        <span id="ModelSpan" style="color: #e8491d"></span>
                        <input type="number" name="Price" placeholder="Price"><br>
                        <span id="PriceSpan" style="color: #e8491d"></span>
                        <input type="hidden" name="Images" value="">
                        <img style="display: none; margin-top: 5px" src="" id="profile-img"  width="250px" />
                        <label class="file-upload">
                            <input type="file" name="ImgFile" accept="image/jpeg, image/x-png"
                                   onchange="document.getElementById('profile-img').style.display='block';
                            document.getElementById('profile-img').src = window.URL.createObjectURL(this.files[0])"/>
                             Upload Image
                        </label>
                        <span id="ImageSpan" style="color: #e8491d"></span>

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
                        <form action="Details.php" method="post">
                            <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                            <button type="submit" name="ImageSubmit" class="ImgBtn"><img src="<?php echo "images/".$d['Images'] ?>"></button>
                            <br>
                        </form>

                        <h4>Name :<?php echo $d['Name'] ?> </h4>
                        <h4>Model :<?php echo $d['Model'] ?> </h4>
                        <h4>Price :<?php echo $d['Price'] ?> </h4>
                        <form action="Edit.php" method="post">
                            <input type="hidden" name="Id" value="<?php echo $d['Id'] ?>">
                            <input type="submit" name="Edit" class="TableBtn" value="Edit">
                        </form>
                        <form action="Delete.php" method="post" onsubmit="return Confirmation()" >
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
            <form name="InsertForm" action="Edit.php" onsubmit="return validateForm()"  method="post" enctype="multipart/form-data">
                <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>">
                <input type="text" name="Name" placeholder="Name" value="<?php echo $model['Name'] ?>"><br>
                <span id="NameSpan" style="color: #e8491d"></span>
                <input type="text" name="Model" placeholder="Model" value="<?php echo $model['Model'] ?>"><br>
                <span id="ModelSpan" style="color: #e8491d"></span>
                <input type="number" name="Price" placeholder="Price" value="<?php echo $model['Price'] ?>"><br>
                <span id="PriceSpan" style="color: #e8491d"></span>
                <input type="hidden" name="Images" value="<?php echo $model['Images'] ?>">
                <img style="margin-top: 5px" src="<?php echo "images/".$model['Images'] ?>" id="profile-img"  width="250px" />
                <label class="file-upload">
                    <input type="file" name="ImgFile" accept="image/jpeg, image/x-png"
                           onchange="document.getElementById('profile-img').src = window.URL.createObjectURL(this.files[0])"/>
                    Upload Image
                </label>
                <span id="ImageSpan" style="color: #e8491d"></span>

                <input type="submit" name="Update" class="Btn" value="Update">
            </form>
        </div>


        <?php
        $this->Footer();
    }

    public function Details($model){
        $this->NavBar();
        ?>

        <div class="Details">
            <aside id="ImageSection">
                <img src="<?php echo "images/".$model['Images'] ?>">
            </aside>
           <article id="Info">
               <aside id="detInfo">
                   <label>Name : <?php echo $model['Name']?></label><br>
                   <label>Model : <?php echo $model['Model']?></label><br>
                   <label>Price : <?php echo $model['Price']?></label><br>
                   <label>Ratings : *****</label><br>
                   <label>Year : 2019</label><br>

                   <form action="Edit.php" method="post">
                       <input type="hidden" name="Id" value="<?php echo $model['Id'] ?>">
                       <input type="submit" name="Edit" class="DetailsBtn" value="Edit">
                   </form>
                   <form action="Delete.php" method="post" onsubmit="return Confirmation()" >
                       <input type="hidden" name="Id"  value="<?php echo $model['Id'] ?>">
                       <input type="submit" name="Delete" class="DetailsBtn2" value="Delete">
                   </form>
               </aside>


            <aside id="Ratings">
                <div>
                    <form name="RatingsForm" action="Ratings.php" method="post">
                        <img style="width: 30px;height: 30px" src="images/star.jpg" class="RatingsImg" onclick="CalcRatings(1)" name="rating_1" >
                        <img style="width: 30px;height: 30px" src="images/star.jpg" class="RatingsImg"  onclick="CalcRatings(2)" name="rating_2" >
                        <img style="width: 30px;height: 30px"src="images/star.jpg" class="RatingsImg"  onclick="CalcRatings(3)" name="rating_3" >
                        <img style="width: 30px;height: 30px" src="images/star.jpg" class="RatingsImg"  onclick="CalcRatings(4)" name="rating_4" >
                        <img style="width: 30px;height: 30px" src="images/star.jpg" class="RatingsImg"  onclick="CalcRatings(5)" name="rating_5" >

                        <input type="hidden" name="TotalRatings" value="">
                        <input type="email" name="Email" placeholder="Enter Your Email Address"><br>
                        <input type="text" name="Comment" placeholder="Comment..."><br>
                        <input type="submit" name="RatingsSubmit" class="DetailsBtn" value="Submit">
                    </form>
                </div>
            </aside>
           </article>

        </div>
        <?php
        $this->Comments();

    }

    public function Comments(){
        ?>
        <div id="CommentDiv">
            <section id="Comments">
                <div class="Comment">
                    <h1>Hello</h1>
                </div>
            </section>
            <section id="Comments">
                <div class="Comment">
                    <h1>Hello</h1>
                </div>
            </section>
            <section id="Comments">
                <div class="Comment">
                    <h1>Hello</h1>
                </div>
            </section>
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
