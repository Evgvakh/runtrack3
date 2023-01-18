function sommenombrespremiers(a, b) {    
    
    for (let i = 2; i < a; i++) {
        if (a % i == 0) {            
            return false;            
        } 
    }

    for (let j = 2; j < b; j++) {
        if (b % j == 0) {            
            return false;            
        } 
    }

    return a + b;
}

console.log(sommenombrespremiers(7, 13));
console.log(sommenombrespremiers(4, 13));
console.log(sommenombrespremiers(7, 14));