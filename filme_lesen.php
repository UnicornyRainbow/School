<html lang="en">
        <head>
                <title>Kinocenter</title>
                <link rel=stylesheet href=.stylesheet.css>
        </head>
        <body>
                <h2>Kinocenter</h2>
                <b>Das aktuelle Filmprogramm</b><br><br>
                <?php
                        $db_server='localhost';
                        $db_user='unicorn';
                        $db_password='fabian';
                        $db_name='school_kino';

                        $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
                        if(!$connection)
                                die('Der Server konnte nicht erreicht werden!');

                        mysqli_set_charset($connection, 'utf8');

                        $query = 'SELECT titel, filmlaenge FROM film ORDER BY filmID';
                        $answer = mysqli_query($connection, $query);
                        try {
                        $answer = mysqli_query($connection, $query);
                        } catch (Exception) {};
                        if(!$answer)
                                echo mysqli_error($connection);

                        $title = [];
                        $filmlength = [];
                        $i = 0;
                        while($row = mysqli_fetch_array($answer))
                        {
                                $title[$i] = $row[0];
                                $filmlength[$i] = $row[1];
                                $i++;
                        }
                        mysqli_free_result($answer);

                        for($i = 0; $i < count($title); $i++)
                        {
                                echo $title[$i], ', ', $filmlength[$i], ' min<br>';
                        }
                        mysqli_close($connection)
                ?>
        </body>
</html>
