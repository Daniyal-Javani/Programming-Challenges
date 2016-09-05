var i, bouncy = 0;
for (var i = 1; ; ++i) {
	if (isBouncy(i)) {
		++bouncy;
	}
	if (bouncy/i >= 0.99) {
		break;
	}
}
console.log(i);
function isBouncy (num) {
	var increasing = decreasing = false;
	var numString = num.toString();
	for (var i = 0; i < numString.length - 1; ++i) {
		if (numString.charAt(i) > numString.charAt(i + 1)) {
			decreasing = true;
		}
		if (numString.charAt(i) < numString.charAt(i + 1)) {
			increasing = true;
		}
	}
	if (decreasing && increasing) {
		return true;
	} else {
		return false;
	}
}