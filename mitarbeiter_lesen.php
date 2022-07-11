<html lang="en">
        <head>
                <title>Kinocenter</title>
                <link rel=stylesheet href=.stylesheet.css>
        </head>
        <body>
                <h2>Kinocenter</h2>
                <b>Alle aktuellen Mitarbeiter</b><br><br>
                <?php
                        $db_server='localhost';
                        $db_user='unicorn';
                        $db_password='fabian';
                        $db_name='school';

                        $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
                        if(!$connection)
                                die('Der Server konnte nicht erreicht werden!');

                        mysqli_set_charset($connection, 'utf8');

                        $query = 'SELECT name, voname, manr, eintritt FROM mitarbeiter ORDER BY manr';
                        try {
                        $answer = mysqli_query($connection, $query);
                        } catch (Exception) {};
                        if(!$answer)
                                echo mysqli_error($connection);

                        $name = [];
                        $vorname = [];
                        $manr = [];
                        $eintritt = [];
                        $i = 0;
                        while($row = mysqli_fetch_array($answer))
                        {
                                $name[$i] = $row[0];
                                $vorname[$i] = $row[1];
                                $manr[$i] = $row[2];
                                $eintritt[$i] = $row[3];
                                $i++;
                        }
                        mysqli_free_result($answer);

                        for($i = 0; $i < count($manr); $i++)
                        {
                                echo $manr[$i], ': ', $name[$i], ', ', $vorname[$i], ' seit ', $eintritt[$i], '<br>';
                        }
                        mysqli_close($connection)
                ?>
        </body>
</html>
