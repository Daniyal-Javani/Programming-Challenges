var i, j, counter = 0, ls = [], max = 1500000;
for (i = 2; 2 * i + 2 * Math.pow(i,2) <= max; ++i) {
	for (j = 1; j < i; ++j) {
		var l = 2 * i * j + 2 * Math.pow(i, 2);
		if (l >= max) {
			break;
		}
		var c = Math.pow(i, 2) - Math.pow(j, 2);
		var b = 2 * i *j;
		var a = Math.pow(j, 2) + Math.pow(i, 2);
		for (k = 1; k * l <= max; ++k) {
			if (ls[l * k] === undefined) {
				ls[l * k] = [];
				ls[l * k][0] = 1;
				ls[l * k][1] = c * k;
				++counter;
			} else if (ls[l * k][1] === c * k || ls[l * k][1] === b * k) {
			} else if (ls[l * k][0] === 1) {
				ls[l * k][0] = 2;
				--counter;
			} else {

			}
		}
	}
}
console.log(counter);