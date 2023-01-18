const arr1 = [3, 5, 23, 54, 65, 89, 15, 64, 16, 62, 84];
const arr2 = [4, 1, 2, 87, 4, 56, 35, 76, 23, 93, 36, 47, 11];

function tri(arr, order) {
    if (order == 'desc') {
        arr.sort((a, b) => b-a);
        return arr;
    } else if (order == 'asc') {
        arr.sort((a, b) => a-b);
        return arr;
    } else { console.log('Your sorting mode is incorrect'); }
}

console.log(tri(arr1, 'desc'));
console.log(tri(arr1, 'asc'));

console.log(tri(arr2, 'desc'));
console.log(tri(arr2, 'asc'));
console.log(tri(arr2, 'dasc'));