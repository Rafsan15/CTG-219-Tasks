<?php

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script>
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
        <div class="Ratings">
            <form name="RatingsForm" action="Ratings.php" method="post">
                <img src="images/star.jpg"  onclick="CalcRatings(1)" name="rating_1" >
                <img src="images/star.jpg"  onclick="CalcRatings(2)" name="rating_2" >
                <img src="images/star.jpg"  onclick="CalcRatings(3)" name="rating_3" >
                <img src="images/star.jpg"  onclick="CalcRatings(4)" name="rating_4" >
                <img src="images/star.jpg"  onclick="CalcRatings(5)" name="rating_5" >

                <input type="hidden" name="TotalRatings" value="">
                <input type="submit" name="RatingsSubmit" value="Submit">
            </form>
        </div>

    </body>
</html>
