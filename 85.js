var i, j, bestNumber = 0, area;
for (i = 1; ; ++i) {
	if ((i * (i + 1) * 2) / 4 > 2000000) {
		break;
	}
	for (j = 1; ; ++j) {
		var rec = (i * (i + 1) * j * (j + 1)) / 4;
		if (Math.abs(rec - 2000000) < Math.abs(bestNumber - 2000000)) {
			bestNumber = rec;
			area = i * j;
		}
		if (rec > 2000000) {
			break;
		}
	}
}
console.log(area);