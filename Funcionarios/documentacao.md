1. **O que é herança?**
   É quando uma classe pega coisas de outra pra reutilizar.

2. **Qual a diferença entre private e protected?**
   Private só a própria classe usa, protected a filha usa.

3. **O que significa sobrescrever um método?**
   É mudar um método pai pra funcionar diferente na filha.

```mermaid
Funcionario <|-- FuncionarioCLT
Funcionario <|-- FuncionarioPJ
classDiagram
    class Funcionario {
        #string nome
        #string documento
        #float valorBase

        +__construct(string nome, string documento, float valorBase)
        +getNome() string
        +getDocumento() string
        +getValorBase() float
        +calcularPagamento() float
    }

    class FuncionarioCLT {
        -float beneficios
        -float descontos

        +__construct(string nome, string documento, float salarioBruto, float beneficios, float descontos)
        +calcularPagamento() float
    }

    class FuncionarioPJ {
        -int horasTrabalhadas
        
        +__construct(string nome, string documento, float valorHora, int horasTrabalhadas)
        +calcularPagamento() float
    }
```