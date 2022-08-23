<?php
include "../assets/config/db.php";

$query = mysqli_query($koneksi, "select * from artikel order by datetime DESC");
//$jumlah_berita = mysqli_num_rows($query);
//$result_artikel = mysqli_fetch_array($query);


$konten = "";
$tanggal = "";
$bulan = "";
$gambar = "";
$tagging = "";

while ($data = mysqli_fetch_array($result)) {

    echo "
    <html>
    <article class=\"blog_item\">
        <div class=\"blog_item_img\">
            <img class=\"card-img rounded-0\" src=\"../assets/img/blog/single_blog_1.jpg\" alt=\"\">
            <a href=\"#\" class=\"blog_item_date\">
                <h3>15</h3>
                <p>Jan</p>
            </a>
        </div>
        <div class=\"blog_details\">
            <a class=\"d-inline-block\" href=\"blog_details.html\">
                <h2 class=\"blog-head\" style=\"color: #2d2d2d;\">Google inks pact for new 35-storey office</h2>
            </a>
            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.</p>
            <ul class=\"blog-info-link\">
                <li><a href=\"#\"><i class=\"fa fa-user\"></i> Travel, Lifestyle</a></li>
                <li><a href=\"#\"><i class=\"fa fa-comments\"></i> 03 Comments</a></li>
            </ul>
        </div>
    </article>
";
}
// $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
// mysql_select_db('hrmwaitrose');

// $query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
// $result = mysql_query($query);

// echo "<table>"; // start a table tag in the HTML

// while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
// echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['age']) . "</td></tr>";  //$row['index'] the index here is a field name
// }

// echo "</table>"; //Close the table in HTML

// mysql_close(); //Make sure to close out the database connection
