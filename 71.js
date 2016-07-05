var min = 1;
var ans;
var j;
for (var i = 1000000; i > 0; --i) {
	j = parseInt((i*3)/7);
	if (j/i < 3/7) {
		if (3/7 - j/i < min) {
			min = 3/7 - j/i;
			ans = j;
		}
	}
}
console.log(ans);