<?php


include("../../model/ldb.php");

if (isset($_REQUEST["abc"])) {






    $bobj = new ldb();
    $connobj = $bobj->openCon();
    $result = $bobj->fetchbook($connobj, "book2");
    //var_dump($result);

    echo '<table border="1">';
    echo "<tr><th> Serial</th><th> Book Name</th><th> Author Name</th><th> Book Types</th><th> ISBN No</th><th>Publication Date</th></tr>";
    foreach ($result as $row) {
        echo "<pre>";
        //var_dump($row);
        echo "</pre>";
        echo "<tr><td>";
        echo $row["serial_id"];
        echo "</td><td>";
        echo $row["book_name"];
        echo "</td><td>";
        echo $row["author_name"];
        echo "</td><td>";
        echo $row["book_types"];
        echo "</td><td>";
        echo $row["isbn_no"];
        echo "</td><td>";
        echo $row["publication_date"];
        echo "</td></tr>";


        //    echo '<!DOCTYPE html>
        //    <html>
        //    <head>
        //    <style>
        //    .myDiv {
        //      border: 5px outset red;
        //      background-color: lightblue;    
        //      text-align: center;
        //    }
        //    </style>
        //    </head>
        //    <body>

        //    <h1>The div element</h1>

        //    <div class="myDiv">
        //      <h2>'.$row["serial_id"].'</h2>
        //      <p>'.$row["book_name"].'</p>
        //    </div>
        //    <div class="poster"><img src="https://mlwbd.expert/wp-content/uploads/v8qRfRC5r2DWbLbRAXzyVF5WEiY-185x278.jpg"
        //                 alt="Mast Mein Rehne Ka (2023) Hindi WEB-DL 480p, 720p &amp; 1080p | GDRive">
        //             <div class="rating"><span class="icon-star2"></span> </div>
        //             <div class="mepo"> <span class="quality">WEB-DL [HD]</span></div><a
        //                 href="https://mlwbd.expert/movie/mast-mein-rehne-ka-2023/">
        //                 <div class="see"></div>
        //             </a>
        //         </div>
        //         <div class="data">
        //             <h3><a href="https://mlwbd.expert/movie/mast-mein-rehne-ka-2023/"> '.$row["book_name"].' </a></h3> <span>Dec. 08, 2023</span>
        //         </div>

        //    <p>This is some text outside the div element.</p>

        //    </body>
        //    </html>
        //    ';

    }

    echo "</table>";


    // if ($result -> num_rows > 0)
    // {
    //     foreach($result -> $result as $row) 
    //     {
    //         echo $row["serial"];
    //         echo $row["bname"];
    //         echo $row["aname"];
    //         echo $row["booktypes"];
    //         echo $row["isbn"];
    //         echo $row["pdate"];
    //     }
    // }
    // else
    // {
    //     echo "No Data Found";
    // }
    // $bobj-> closeCon($connobj);
    $bobj->closeCon($connobj);
}
