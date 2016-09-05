var x, n = 1, max = 0,near = false, primes = [2,3,5,7,11,13,17], pro;
for (n = 1; ; ++n) {
	for (var j = 0, pro = 1; ; ++j) {
		if (pro * primes[j] >= n) break;
		pro *= primes[j];
	}
	if (n % pro != 0) continue;
	var counter = 0;
	for (x = n * 2; x > n; --x) {
		var y = (n * x)/(x - n);
		if (y % 1 == 0) {
			++counter;
		}
	}
	if (counter > max) {
		max = counter;
	}
	if (counter > 1000) break;
}
console.log(n);