<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1>Exo2</h1>

<?php
    $arrayOfString = array(
        'PaPy',
        'COUCOU',
        'chanter',
        'blaBla'
    );

    function arrayUcFirst(&$array){
        foreach ($array as $key => $string){
            $array[$key] = ucfirst(strtolower($string));
        }
    }
    arrayUcFirst($arrayOfString);
    var_dump($arrayOfString);
?><hr>
<h1>Exo3</h1>
<?php
class ToucheCoule
{
    public $alphabet = array('', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');

    public $ocean = array();

    public $boats = array(
        "barque" =>[
                [1,10]
        ],
        "Croiseur" => [
            [6, 3],
            [6, 4],
            [6, 5]
        ],
        "Destroyer" => [
            [9, 5],
            [9, 6]
        ],
        "Porte-avions" => [
            [3, 9],
            [4, 9],
            [5, 9],
            [6, 9],
        ]
    );

    public function __construct()
    {
        $this->ocean[0] = $this->alphabet;
        for ($i = 1; $i<11; $i++)
        {
            $this->ocean[$i][0] = $i;
            for ($j = 1; $j<11; $j++)
            {
                $this->ocean[$i][$j] = false;
            }
        }
        foreach ($this->boats as $boat => $boatCases) {
            foreach ($boatCases as $boatCase) {
                $this->ocean[$boatCase[1]][$boatCase[0]] = true;
            }
        }
    }


    public function play($letter, $number)
    {
        if(($number<12 && $number>0)&&(in_array(strtoupper($letter), $this->alphabet))) {
            $letter = array_search(strtoupper($letter), $this->alphabet);
            if ($this->ocean[$number][$letter] === true) {
                return "Touché mon capitaine!";
            }
            else {
                return "c'est rappé!";
            }
        }
        else{
            return "t'as nické le game!";
        }
    }

    public function oceanHtml(){
        $oceanhtml = "";
        foreach($this->ocean as $numligne => $ocean_ligne){
            $oceanhtml .= '<div class="row">';
            foreach ($ocean_ligne as $numcol => $ocean_case){

                $oceanhtml .=
                        '<div class="col-xs-1">';
                if (is_bool($ocean_case)){
                    $oceanhtml .=
                        '<form action="index.php" method="post">'.
                        '<input type="text" hidden name="number" value="'.$numligne.'">'.
                        '<input type="text" hidden name="letter" value="'.$this->alphabet[$numcol].'">'.
                        '<button type="submit"><i class="glyphicon glyphicon-screenshot"></i></button>'.
                        '</form>';}
                else{
                    $oceanhtml .=  $ocean_case ;
                }

                $oceanhtml .=     '</div>';
            }
            $oceanhtml .= '</div>';
        }
        return $oceanhtml;
    }
}
$game = new ToucheCoule();
echo $game->oceanHtml();
if(isset($_POST) && isset($_POST["letter"]) && isset($_POST["number"]) ){
echo $game->play($_POST["letter"],$_POST["number"]);}
var_dump($game)
?>
<hr>
<h1>Exo4</h1>

<script type="text/javascript" src="./pendu.js"></script>
</body>
</html>