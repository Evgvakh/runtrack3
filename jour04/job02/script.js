
const randomArr = {
    "name":"John",
    "age": 30,
    "cars":[ "Ford", "BMW", "Fiat" ]
 };

const jsonArr = JSON.stringify(randomArr);

function jsonValueKey(str, i) {
    const strToObj = JSON.parse(str);    
    return strToObj[i];
}

console.log(jsonValueKey(jsonArr, 'name'));




