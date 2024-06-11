import 'dart:io';

main() {
  print('Está chovendo? (s/N)');
  final resposta1 = stdin.readLineSync();
  bool estaChovendo = resposta1 == 's' ? true : false; // Mesmo formato javascript
  print('Está chovendo ? ' + estaChovendo.toString());

  stdout.write('Está frio? (s/N) '); // Inserir na mesma linha do terminal, evitando quebra de linha
  bool estaFrio = stdin.readLineSync() == 's';

  String resultado = estaChovendo && estaFrio ? 'Ficar em casa' : 'Sair!!!';
  print(resultado);
  print(estaChovendo && estaFrio ? 'Azarado' : 'Sortudo!');
}