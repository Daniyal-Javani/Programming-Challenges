var i = 1, n = 1;
while (true) {
	if (n * i < 1000000) {
//		debugger;
		if (isPrime(i)) {
			n *= i;
		}
	} else {
		break;
	}
	++i;
}
console.log(n);
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