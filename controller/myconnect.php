<?php
trait myconnect
{
        public  function connect()
        {
            try {
                $con = new PDO("mysql:host=localhost;dbname=centresante", "b1sra0u1", "root");
                echo "<script>alert('connected');</script>";
                return $con;
            } catch (Exception $e) {
                echo "connection failed $e";
            }
        }
    // /**
    //  * insert values to the calendar table for the availiable dates
    //  */
    public  function insertCalendar()
    {
        try {
            $c = self::connect();
            if ($c != null) {
                for ($i = 8; $i < 17; $i++) {
                    for ($j = 0; $j < 4; $j += 3) {
                        $req = "INSERT INTO `calendrier_rdv` (`id_calendrier`, `Date_calendrier_RDV`, `Heure_Calendrier_RDV`, `id_rdv`) VALUES (NULL, '2022-01-09', '$i:" . $j . "0:00', NULL);";
                        $res = $c->prepare($req);
                        $res->execute();
                    }
                }
                echo "<script>alert('added to database');</script>";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }
}
?>