var i, j, counter, maxCounter = 0, ans, pri = [];
pri[0] = false;
pri[1] = false;
for (i = 2; i < 900000; ++i) {
	for (j = 2 * i; j < 900000; j += i) {
		pri[j] = false;
	}
}
for (i = 2; i < 900000; ++i) {
	if (pri[i] !== false) {
		continue;
	}
	counter = 0;
	var list = [];
	var temp = i;
	while (true) {
		temp = divisor(temp);
		if (pri[temp] !== false) {
			counter = 0;
			break;
		}
		var br = false;
		for (val in list) {
			if (list[val] == temp) {
				br = true;
				counter = 0;
				break;
			}
		}
		if (br) {
			break;
		}
		++counter;
		if (temp == i) {
			break;
		}
		if (temp > 1000000 || temp < i) {
			counter = 0;
			break;
		}
		list.push(temp);
	}
	if (counter > maxCounter) {
		maxCounter = counter;
		ans = i;
	}
}
console.log(ans);
function divisor (num) {
	var i, sum = 1;
	for (i = 2; i <= Math.sqrt(num); ++i) {
		if (num % i == 0) {
			sum += i;
			if (i != Math.sqrt(num)) {
				sum += num / i;
			}
		}
	}
	return sum;
}