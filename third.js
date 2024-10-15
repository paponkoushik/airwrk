function firstUniqChar(s) {
  let n = s.length;

  // Step 1: Iterate over each character in the string
  for (let i = 0; i < n; ++i) {
    let found = true;

    for (let j = 0; j < n; ++j) {
      if (i !== j && s[i] === s[j]) {
        found = false;
        break;
      }
    }

    if (found) {
      return i;
    }
  }

  // Step 4: If no such character is found, return -1
  return -1;
}

// Driver code
let s = "geeksforgeeks";
console.log(firstUniqChar(s));