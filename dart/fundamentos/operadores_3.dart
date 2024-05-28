main() {
  int a = 3;
  int b = 4;

  // Operadores Unários
  a++; //Posfix
  --a; //Prefix

  print(a);

  print(a++ == --b); // Dá true porque a prioridade é do "--" que vem antes (prefix) ai depois vem a comparação
  print(a == b);
}