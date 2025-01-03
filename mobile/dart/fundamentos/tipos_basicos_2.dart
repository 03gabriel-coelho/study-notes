// LIST | MAP | SET
main () {
  List aprovados = ['Ana', 'Carlos', 'Daniel', 'Rafael']; // CRIANDO UMA LISTA (ARRAY)
  // OU
  var aprovadosVar = ['Ana', 'Carlos', 'Daniel', 'Rafael'];
  aprovadosVar.add('Daniel');
  print(aprovadosVar);

  print(aprovados);
  print(aprovados.elementAt(2));
  print(aprovados[0]);
  print(aprovados.length);

  Map telefones = { // CRIANDO UM MAP (OBJETO)
    'João': '+55 (11) 98898-8389'
  };
  // OU
  var telefonesVar = {
    'João': '+55 (11) 98898-8389',
    'Maria': '+55 (21) 93238-3232',
  };
  print(telefones);
  print(telefonesVar);
  print(telefonesVar['João']);
  print(telefonesVar.values);
  print(telefonesVar.keys);
  print(telefonesVar.entries);

  Set times = {'Vasco', 'Flamengo', 'Fortaleza'};  // CRIANDO UM SET
  // OU
  var timesVar = {'Vasco', 'Flamengo', 'Fortaleza'};
  timesVar.add('Palmeiras');
  print(timesVar.length);
  print(times.contains('Vasco'));
}