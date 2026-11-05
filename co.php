<?php 
class Garrafa{
    private string $material;
    private string $cor;
    private float $volume;
    private bool $tampa;
    private bool $cheia;

    public function __construct(string $material, string $cor, float $volume)
    {
        $this->material = $material;
        $this->cor = $cor;
        $this->volume = $volume;
        $this->tampa = true;
        $this->cheia = false;
    }

    public function mostrarDados(){
        echo "Material: {$this->material}\n";
        echo "Cor: {$this->cor}\n";
        echo "Volume: {$this->volume}\n";
        echo "Tampada: " . $this->tampa ? "Sim\n":"Não\n";
        echo "Cheia? " . ($this->cheia ? "Sim\n":"Não\n");
    }

    public function encher(){
        if ($this->tampa || $this->cheia){
            echo "A garrafa esta tampada ou cheia\n";
        } else{
            echo "Enchendo a garrafa...\n";
            $this->tampa = true;
        }
    }

    public function tampar(){
        if (!$this->tampa){
            echo "A garrafa ja esta tampada\n";
            sleep(1);
            $this->tampa = true;
        } else{
            echo "Destampando a garrafa...\n";
            sleep(1);
            $this->tampa = false;
        }
    }

    public function beber(){
        if (!$this->tampa && $this->cheia){
            echo "Glut, glut, glut, Aaahhhh";
            sleep(2);
            $this->cheia = false;
        } else{
            echo "Garrafa fechada ou vazia";
        }
    }

    public function getMaterial(){
        return $this->material;
    }
    public function setMaterial($material){
        $this->material = $material;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getVolume(){
        return $this->volume;
    }
    public function setVolume($volume){
        $this->volume = $volume;
    }

    public function gettampa(){
        return $this->tampa;
    }
    public function settampa($tampa){
        $this->tampa = $tampa;
    }

    public function getcheia(){
        return $this->cheia;
    }
    public function setcheia($cheia){
        $this->cheia = $cheia;
    }
}

$g = new Garrafa("Metal", "Prata", 0.5);
$g->mostrarDados();
$g->beber();
$g->tampar();
$g->encher();
$g->mostrarDados();
$g->beber();
?>