import 'dart:io';

main() {
  int a = 0;

  while (a < 10) {
    print(a);
    a++;
  }

  String digitado = '';

  while(digitado != 'sair') {
    stdout.write('Digite algo ou sair:');
    digitado = stdin.readLineSync().toString();  // ELE SÓ EXECUTA QUANDO O DIGITADO FOR DIFERENTE DE SAIR
  }

  do {
    stdout.write('Digite algo ou sair: ');
    digitado = stdin.readLineSync().toString();  // ELE EXECUTA PELO MENOS UMA VEZ, MESMO QUE O DIGITADO COMECE COM "sair"
  } while(digitado != 'sair');

  print('Fim!');
}