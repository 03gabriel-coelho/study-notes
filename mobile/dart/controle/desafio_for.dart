// #
// ##
// ###
// ####
// #####
// ######

// use o laço FOR, mas não pode controlar o laço usando valor numérico!

main() {
  // MINHA TENTATIVA

  int indexA = 1;

  for(; ;){
    var coluna = '';

    while(coluna.length != indexA) {
      coluna += '#';
    }
    
    print(coluna);
    
    indexA += 1;
    if(indexA == 7) {
      break;
    }
  }

  // -------------------------------------------------
  // RESPOSTA CORRETA

  for(var valor = '#'; valor != '#######'; valor += '#') {
    print(valor);
  }
}