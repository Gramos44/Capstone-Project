function calc() {
		  /*info:
		    1 yard   = 3 feet  = 36 inches
		    1 foot   = 12 inches
		    N feet   = (N/3) yards
		    N inches = (N/12) feet
		    N inches = (N/36) yards
		  */

		  //get inputs
		  var l = document.volcalc.length.value; //in feet
		  var w = document.volcalc.width.value; //in feet
		  var d = document.volcalc.depth.value; //in inches

		  //convert length feet to yards
		  l = l/3;

		  //convert width feet to yards
		  w = w/3;

		  //convert depth inches to yards
		  d = d/36;

		  //calculate volume in yards
		  var v = l * w * d;

		  // round numbers up to nearest whole number
		  // var v = Math.ceil( v );

		  // round to 2 decimal places
		  // var v = Math.round( v * 100) / 100;

		  // round numbers in increments of .25
		  var v = Math.round( v * 4 ) / 4 ;

		  document.volcalc.vol.value = v; //in yards

}