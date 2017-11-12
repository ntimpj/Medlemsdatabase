 </article>

<footer>    
    <?php
    require_once ('functions.php');
    Database_Name();
    if($_SESSION[Database_Name()."session_email"]== "")
    {
        echo ' Ikke logget ind'; 
    }
    else
    {
        $msg = " ".$_SESSION[Database_Name()."session_first_name"]." ".$_SESSION[Database_Name()."session_last_name"]." logged ind som: " . get_priviledge_name($_SESSION[Database_Name()."session_level"]);
        echo $msg;
    }
    ?>
</footer>

</div>
    </body>
</html>