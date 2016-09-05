var i, j, counter = 0, primes = [];
for (i = 2; i <= 12000; ++i) {
	for (j = i - 1; j > 0; --j) {
		if (j / i > 1/3 && j / i < 1/2 && isHCD1(i, j)) {
			++counter;
		}
	}
}
console.log(counter);
function isHCD1 (num1, num2) {
	while (true) {
		num1 = num1 % num2;
		if (num1 == 0) {
			return num2 == 1;
		}
		num2 = num2 % num1;
		if (num2 == 0) {
			return num1 == 1;
		}
	}
}