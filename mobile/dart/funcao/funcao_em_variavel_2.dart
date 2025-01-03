main() {
  var adicao = (int a, int b) => a + b;
  var subtracao = (int a, int b) => a - b;
  var multiplicacao = (int a, int b) => a * b;

  print(adicao(8, 2));
  print(subtracao(8, 2));
  print(multiplicacao(8, 2));

  // FUNÇÃO ERRADA

  var divisao = (int a, int b) => { // O DART NÃO RECONHECE ISSO COMO UM BLOCO DE CODIGO IGUAL O JAVASCRIPT
    a / b
  };

  print(divisao(8, 4));
  // ignore: unnecessary_type_check
  print(divisao(8, 4) is Set); // A FUNÇÃO SEMPRE VAI SER UM SET
}