<?php

trait myconnect{
   public  $con;
    public function connect()
    {
        try 
        { 
            $con= new PDO("mysql:host=localhost;dbname=centresante","b1sra0u1","root");
            return $con;
        }
        catch (Exception $e)
        {
            echo "connection failed $e";
        }
    }
}

class Infirmier #extends Employe
{
    
 public $req;
    
    // public function __construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol)
    // {
    //     parent::__construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol);
       
    // }


 use myconnect;

        public function __construct()
        {

        }
    // public function ModifierRDV($RDV)
    // {
    // }

    // /**
    //  * @param  $RDV
    //  */
    // public function SupprimerRDV($RDV)
    // {
    //     // TODO implement here
    // }


            #check if the 
    // /**
    //  * @param  $RDV
    //  */
    // public function AjouterRDV($RDV)
    // {
    //     // TODO implement here
    // }

    // /**
    //  * 
    //  */
    // public function ListerRDV()
    // {
    //     try {
    //         $c = $this->connect();
    //         if ($c != null) {
    //             $req = 'SELECT * FROM `rdv`';
    //             $res =$c->query($req);
    //             foreach($res as $var)
    //             return new RDV();
    //         } else
    //             echo "probleme in the ListerRDV Method";
    //     } catch (Exception $ex) {
    //         echo "$ex";
    //     }
    // }

    /**
     * @param  $RDV
     */
    public function AfficherRDV($col,$val)
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $pre=$c->prepare("SELECT * FROM `rdv` WHERE ? =");
                $c->query($req);
                foreach ($c as $var) {
                    // return new RDV($var[1], $var[2], $var[3], $var[4], $var[5], $var[6]);
                    echo "$var[0]\t$var[1]\t$var[2]\t$var[3]\t$var[4]\t$var[5]\t";
                
            }
        } 
            else {
                echo "nothing in the RDV Table";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }

    // /**
    //  * @param  $Patient
    //  */
    // public function AjouterPatient(Patient $Patient)
    // {
    //     $req = "INSERT INTO `` VALUES($Patient->nom_complet)";
    // }

    // /**
    //  * @param  $Patient
    //  */
    // public function ModiferPatient($Patient)
    // {
    //     // TODO implement here
    // }

    // /**
    //  * @param null $Patient
    //  */
    // // public function ChercherPatient(null $Patient)
    // // {
    // //     # =  "SELECT * FROM `` WHERE $Patient->";
    // // }

    // /**
    //  * 
    //  */
    // public function ListerPatients()
    // {
    // }
}
$f=new Infirmier();
$f->AfficherRDV("Cin_patient","h52855");
?>