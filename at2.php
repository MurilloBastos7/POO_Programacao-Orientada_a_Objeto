<?php

class Notebook
{
    private string $marca;
    private bool $ligado;
    private int $bateria;
    private int $volume;

    public function __construct(string $marca, int $bateria = 100)
    {
        $this->marca = $marca;
        $this->ligado = false;
        $this->bateria = $bateria;
        $this->volume = 50;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function getBateria()
    {
        return $this->bateria;
    }

    public function setBateria($bateria)
    {
        if ($bateria >= 0 && $bateria <= 100) {
            $this->bateria = $bateria;
        } else {
            echo "[Validação] Erro: A bateria deve estar entre 0% e 100%.\n";
        }
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        if ($volume >= 0 && $volume <= 100) {
            $this->volume = $volume;
        } else {
            echo "[Validação] Erro: O volume deve estar entre 0 e 100.\n";
        }
    }

    public function ligar()
    {
        if ($this->bateria <= 0) {
            echo "Não é possível ligar: Notebook sem bateria!\n";
            return;
        }
        $this->ligado = true;
        echo "Notebook {$this->marca} LIGADO.\n";
    }

    public function desligar()
    {
        $this->ligado = false;
        echo "Notebook {$this->marca} DESLIGADO.\n";
    }

    public function usarPrograma($nomePrograma)
    {
        if (!$this->ligado) {
            echo "Erro: Não dá para usar '{$nomePrograma}', o notebook está desligado!\n";
            return;
        }

        if ($this->bateria <= 10) {
            echo "Bateria fraca! O notebook desligou por segurança.\n";
            $this->ligado = false;
            return;
        }

        $this->bateria -= 15;
        echo "Executando '{$nomePrograma}'. Bateria restante: {$this->bateria}%\n";
    }
}

echo "1. Criando o Objeto\n";
$meuNotebook = new Notebook("Dell");

echo "\n2. Testando Regras de Validação (Setters)\n";
$meuNotebook->setVolume(150);
$meuNotebook->setVolume(80);
echo "Volume configurado: " . $meuNotebook->getVolume() . "%\n";

echo "\n3. Testando Ações e Verificação de Estado\n";
$meuNotebook->usarPrograma("VS Code");

$meuNotebook->ligar();
$meuNotebook->usarPrograma("VS Code");
$meuNotebook->usarPrograma("Navegador Web");