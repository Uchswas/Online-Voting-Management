<? php
    ob_start();
    session_start();
    echo "$_SESSION['u']";

    if(!isset($_SESSION['u'])){

        header("Location: Bookshelf.php");
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        BookShelf.com
    </title>
    <style type="text/css">
    #nav{
    background-color: #190000;
    position: absolute;
    top: 0px;
    width: 100%;
    height: 65px;
}
    #nav ul{
        list-style-type: none;
        padding: 0;
        margin:0 auto;
        width: 40em;
    }
    #nav ul li{
        float: left;
    }
    #nav ul li a{
        display: block;
        padding: .5em;
        margin: .20em;
        font-size: 25px;
        text-decoration: none;
        font-family: cursive;
        color: white;
        margin-bottom: 10px;
        border-color: black;
    }
    #nav ul li a:hover{
        background-color:#330000;
    }
    .clear {
        clear: both;
    }
    #about{
        clear: both;
        position: absolute;
        width: 100%;
        margin-left: 200px;
        margin-right: 200px;
        top: 65px;
        
    }
    #p1{
        font-family: serif;
        font-size: 20px;
        color: #FF6347;
    }
    
    label {
        display: block;
        color: #999;
    }
    .cf:before, .cf:after {
        content: ""; 
        display: table;
    }
     
    .cf:after {
        clear: both;
    }
    .cf {
        *zoom: 1;
    }
    :focus {
        outline: 0;
    }
    
    #source{
        clear: both;
        position: absolute;
        width:100%;
        top: 2500px;
        margin:0 auto;
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 10px;
        margin-bottom: 10px;
    }
    .checkout,.recent{
        float: left;
        height: 600px;
    }
    .checkout{
        width: 50%;
        
    }
    .recent{
        width: 50%;
    }
    .c1,.r1{
        margin: 4px;
        padding: 5px;
        height: 350px;
        width: 96%;
        background-color: #FFEBCD;
        border: 1px solid #FFEBCD;
        
        border-radius: 5px;
        border-color: azure;
        text-align: left;
    }
    #h{
        color: #FF6347;
        font-family: serif;
        font-size: 20px;
    }
    p{
        font font-size: 20px;
    }
    #t1, #t3{
        width: 100%;
        text-align: left;
        padding: 5px;
    }
    #t2{
        width: 100%;
        text-align: left;
        padding: 10px;  
    }
    .head{
        color: #800000;
    }
    </style>


</head>
<body >
    <div id="nav">
        <ul>
            <li><a href="Bookshelf.php">BookShelf</a></li>
            <li><a href="#recommendations">Recommendations</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="clear"></div>
    </div>
        <div id="about">
        <?php 


        $connection=mysqli_connect('localhost','root','','bookshelf');
        $query = "SELECT * FROM books";
        $result = mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($result)){
            $id = $row['id'];
            $book_name = $row['book_name'];
            $author_name = $row['book_author'];
            $image = $row['book_image'];
        
             ?>
             <h4><a href="a_book.php?book_id=<?php echo "$id"; ?>"> <?php echo "Book name : "; ?>  <?php echo"$book_name"; ?></h4>
             <h4><?php echo "Author : "; ?> <?php echo "$author_name"; ?></h4> 
             <img width="300" height="300" src="<?php echo "$image"; ?>">
            >
        <?php } ?>
    </div>  

    <div id="source">
        <div class="checkout">
            <div class="c1">
                <p id="h">Search and Browse books.</p>
                <table id="t1">
                    <tr>
                        <td><a href="#">Art</a></td>
                        <td><a href="#">Crime</a></td>
                        <td><a href="#">Memory</a></td>
                        <td><a href="#">Romance</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Biography</a></td>
                        <td><a href="#">Ebooks</a></td>
                        <td><a href="#">Mystery</a></td>
                        <td><a href="#">Science fiction</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Childrens</a></td>
                        <td><a href="#">Ficton</a></td>
                        <td><a href="#">Non fiction</a></td>
                        <td><a href="#">Suspense</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Comics</a></td>
                        <td><a href="#">History</a></td>
                        <td><a href="#">Philosophy</a></td>
                        <td><a href="#">Sports</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Cookbooks</a></td>
                        <td><a href="#">Horror</a></td>
                        <td><a href="#">Reigion</a></td>
                        <td><a href="#">Travel</a></td>
                    </tr>
                </table>
                <p id="h">Love Lists?</p>
                <table id="t2">
                    <tr>
                        <td><a href="#">Best Books on User Review.</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Best Books of the 20<sup>th</sup> Century.</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Best Books of the year.</a></td>
                    </tr>                            
                </table>
            </div>
        </div>
        <div class="recent">
            <div class="r1">
            <p id="h">See this:</p>
                <table id="t3">
                    <tr>
                        <td><a href="#">Humayun Ahmed</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Masud Rana Series</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Tin Goyanda Series</a></td>
                    </tr>                            
                </table>
                <p id="h">Quotes:</p>                        
                </table>
            </div>
        </div>
    </div>

</body>
</html>