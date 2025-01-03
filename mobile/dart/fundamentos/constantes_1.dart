import 'dart:io';

main() {
  // Área da circunferÇencia = PI * raio * raio

  final PI = 3.1415;

  stdout.write('Informe o raio: ');

  var entradaDoUsuario = stdin.readLineSync();

  final double raio = double.parse(entradaDoUsuario!);

  final area = PI * raio * raio;

  print('O valor da área é: ' + area.toString());
}