var i, diff = 2, primes = 0, n = 1, edge = 0;
for (i = 3; ; i += diff) {
	++edge;
	if (isPrime(i)) {
		++primes;
	}
	++n;
	if (edge != 4 && primes/n <= 0.1) {
		console.log(diff + 1);
		break;
	}
	if (edge == 4) {
		diff += 2;
		edge = 0;
	}
}
function isPrime(num) {
	if (num == 2) {
		return true;
	}
	if (num % 2 == 0 || num == 1) {
		return false;
	}
	var i;
	for (var i = 3; i < Math.sqrt(num) + 1; i += 2) {
		if (num % i == 0) {
			return false;
		}
	}
	return true;
}