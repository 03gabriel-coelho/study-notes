main() {
  for(int a = 0; a < 10; a++) {
    if(a == 6) {
      break;  // ELE PARA O LAÇO FOR
    }
    print(a);
  }

  print('Depois do laço for #01');

  for(int a = 0; a < 10; a++) {
    if(a % 2 == 1) {
      continue; // ELE PARA SOMENTE NESSE CASO E DEPOIS CONTINUA O LAÇO FOR
    }
    print(a);
  }

  print('Depois do laço for #02');
}