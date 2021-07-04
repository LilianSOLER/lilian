const binarySearch = (array, thingToFind, start, end) => {
    
    if (start > end) {
        return false;
    }
    
    let mid = Math.floor((start + end) / 2);
    
    if (array[mid] === thingToFind) {
        return true;
    }
    
    if (thingToFind < array[mid]) {
        return binarySearch(array, thingToFind, start, mid - 1);
    } else {
        return binarySearch(array, thingToFind, mid + 1, end);
    }
}