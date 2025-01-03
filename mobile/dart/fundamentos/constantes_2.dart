main() {
  final lista1 = ['Gabriel', 'Henrique']; // IMPEDE DE ALTERAR A BASE DA LISTA
  lista1.add('Coelho');
  print(lista1.toString() + ' lista 1');

  final lista2 = const ['Gabriel', 'Henrique']; // INSERINDO UM CONST NA LISTA IMPEDE A LISTA DE ADICIONAR OU REMOVER ELEMENTO
  lista2.add('Coelho');

  const lista3 = ['Gabriel', 'Henrique']; // IMPEDE TANTO DE ALTERAR A BASE QUANTO DE ADICIONAR OU REMOVER ELEMENTO
  lista3.add('Coelho');
}