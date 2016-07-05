var i, j;
var pow3countsum = [];
var max = 9000;
for (var i = 1000; i < max; ++i) {
	pow3countsum[i] = countNum(Math.pow(i, 3).toString());
}
for (var i = 1000; i < max; ++i) {
	var cube = pow3countsum[i];
	var count = 1;
	for (var j = i + 1; j < max; ++j) {
		var cube2 = pow3countsum[j];
		if (cube2 == cube) {
			++count;
		}
	}
	if (count == 5) {
		console.log(i*i*i);
		break;
	}
}
function countNum (num) {
	var arr = [0,0,0,0,0,0,0,0,0,0];
	var i;
	for (var i = 0; i < num.length; ++i) {
		++arr[num.charAt(i)];
	}
	return arr.toString();
}