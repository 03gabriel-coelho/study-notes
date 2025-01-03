/*
  - Números (int e double)
  - String (String)
  - Booleano (bool)
*/

main() {
  // NÚMEROS

  int n1 = 3;

  double n2 = (-5.67).abs(); // Transforma em positivo (valor absoluto)
  
  double n3 = double.parse('12.765'); // Transforma string em double

  num n4 = 6; // Num é o pai de double e int, aceita como ambos

  print(n1 + n2 + n3 + n4);

  n4 = 6.7;

  print(n1 + n2 + n3 + n4);

  // STRING

  String s1 = 'Bom';
  String s2 = ' dia';

  print(s1 + s2.toUpperCase() + '!!!');

  // BOOLEAN

  bool estaChovendo = true;
  bool muitoFrio = false;

  print(estaChovendo && muitoFrio);

  // DYNAMIC

  dynamic x = 'Um texto bem legal';
  print(x);

  x = 123;
  print(x);

  var y = 'Outro texto bem legal!'; // A TIPAGEM JÁ É INFERIDA NO COMPILADOR
  print(y);
}