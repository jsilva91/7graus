Esta biblioteca foi criada no ambito de um execício de avaliação de habilidades de POO e contem 5 ficheiros:
1. Shape.php
2. Rectangle.php
3. Circle.php
4. RunSample.php
5. Readme.md

1. Shape
    Esta classe permite definir um nome para a forma geométrica, bem como calcular a sua área (recebidos dois parametros) e contempla ainda uma função pública que fornece os valores do objeto 

2. Rectangle
    Classe que herda da classe Shape.

3. Circle
    Esta classe herda também da classe Shape, mas permite calcular a area de um circulo, atravez de uma função própria.

4. RunSample
    Foi criado apenas para correr as classes anteriores.

5. Readme
    Presente ficheiro que contem a descrição do projeto.

O autor desta biblioteca é Jorge Silva

# Requisitos

Requere a versão 5.3 do PHP ou superior


## Utilização

Para testar a biblioteca, basta posicionar na sua raiz e correr a seguinte linha:

'php RunSample.php'

Se pretender definir valores diferentes para o nome, width, lenght and radius correr o comando da seguinte forma:

'php Run Sample.php name=lucas w=1 l=2 r=0'